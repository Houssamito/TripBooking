<?php

namespace App\Http\Controllers\web; 
use App\Http\Controllers\Controller;
use App\Http\Requests\storeOrderRequest;
use App\Models\order;
use Illuminate\Http\Request;
use App\Models\Activity;
use Srmklive\PayPal\Services\ExpressCheckout;
use Illuminate\Support\Str;

use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use Stripe;
use Stripe\StripeClient;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Srmklive\Paypal;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class checkoutController extends Controller
{
    public $fullname, $email, $phone, $adress, $price;
    public $totalPrice = 0;

    public function index(Request $request)
    {
        // Récupérer les données stockées en session
        $bookingData = $request->session()->get('bookingData');
        $user = User::find(Auth::id());

        // Vérifier si les données de réservation existent en session
        if ($bookingData) {
            $id = $request->route('id');
            $prix = $request->route('prix');
            $date = $bookingData['date'];
            $numberOfPlaces = $bookingData['numberOfPlaces'];
            $activity = Activity::findOrFail($id);
            $this->totalPrice = $prix * $numberOfPlaces;
            $totalPrice= $this->totalPrice;
            $request->session()->put('totalPrice', $totalPrice);
            $request->session()->put('date', $date);
            $request->session()->put('id', $id);
            // Vous pouvez maintenant utiliser ces données pour afficher la vue du checkout
            // ou effectuer d'autres traitements nécessaires.

            // Par exemple, passons les données à la vue checkout.blade.php
            return view('web.checkout', [
                'id' => $id,
                'prix' => $totalPrice,
                'date' => $date,
                'numberOfPlaces' => $numberOfPlaces,
                'activity' => $activity,
                'User' => $user,
            ]);
        } else {
            // Si les données de réservation n'existent pas en session, redirigez l'utilisateur
            // vers le formulaire de réservation.
            return redirect()->route('checkout.index');
        }
    }
    
    
   
    public function store(storeOrderRequest $request){
        $paymentMethod = $request->input('payment_method');
        
        $totalPrice = $request->session()->get('totalPrice');
        $date = $request->session()->get('date');
        $id = $request->session()->get('id');
        $checkout_session = null;

        if ($paymentMethod === 'cash'){
        $order =new order();
        $order->fullname = $request->fullname;
        $order->phoneNumber = $request->phoneNumber;
        $order->Email = $request->email;
        $order->Adresse = $request->adress;
        $order->status_message ='en cours';
        $order->payment_mode = 'sur place';
        $order->payment_id = $request->payment_id;
        $order->activity_id = $id;
        $order->Date = $date;
        $order->Heure = $request->Heure;
        $order->price = $totalPrice;

        $order->save();

            return redirect()->route('checkout.index');

        } 
        elseif ($paymentMethod === 'stripe'){
            $stripe = new Stripe\StripeClient('sk_test_51NbuRHADMHl7Av0uzOwTqyHRl46spPQHYStjExmXkmw5fPy9DnJvLBY3b7uzsxTou8IKvvWPuBI3OvRfVjY50bNN00jzphdFtq');
             
            $checkout_session = $stripe->checkout->sessions->create([
                'line_items' => [[
                  'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                      'name' => 'TripBooking',
                    ],
                    'unit_amount' => $totalPrice*100,
                  ],
                  'quantity' => 1,
                ]],
                'mode' => 'payment',
                'success_url' => route(name:'checkout.success', absolute: true)."?session_id={CHECKOUT_SESSION_ID}",
                'cancel_url' => route(name:'checkout.cancel', absolute:true),
              ]);
              $order =new order();
        $order->fullname = $request->fullname;
        $order->phoneNumber = $request->phoneNumber;
        $order->Email = $request->email;
        $order->Adresse = $request->adress;
        $order->status_message ='Non payé';
        $order->payment_mode = 'stripe';
        $order->payment_id = $checkout_session->id;
        $order->activity_id = $id;
        $order->Date = $date;
        $order->Heure = $request->Heure;
        $order->price = $totalPrice;

        $order->save();

        if (!auth()->check()) {
            
            $user = new User();
            $user->name = $request->fullname; 
            $user->email = $request->email;
            
           
            $randomPassword = Str::random(10); 
            $user->password = bcrypt($randomPassword);
            $user->save();

            // Connectez automatiquement l'utilisateur après la création du compte
            auth()->login($user);
            
            // Envoyez un e-mail à l'utilisateur avec son mot de passe
            Mail::to($request->email)->send(new WelcomeMail($request->fullname, $randomPassword));
        } else {
            // L'utilisateur est déjà authentifié, utilisez l'utilisateur existant
            $user = auth()->user();
        }

              return redirect($checkout_session->url);
        }
        elseif ($paymentMethod === 'paypal'){
             $data=[];
             $data['items']=
                [
                    'name' => 'TripBooking',
                    'price' => 1000,
                    'desc' =>'description',               
                ];
             $data['invoice_id']=1;
             $data['invoice_description']="Order #{$data['invoice_id']} Invoice";
             $data['return_url']='http://127.0.0.1:8000/successPaypal';
             $data['cancel_url']='http://127.0.0.1:8000/cancelPaypal';
             $data['total']=3000;

             $provider = new ExpressCheckout;
             $response = $provider->setExpressCheckout($data, true);
             $order =new order();
        $order->fullname = $request->fullname;
        $order->phoneNumber = $request->phoneNumber;
        $order->Email = $request->email;
        $order->Adresse = $request->adress;
        $order->status_message ='Non payé';
        $order->payment_mode = 'paypal';
        $order->payment_id = '5';
        $order->activity_id = $id;
        $order->Date = $date;
        $order->Heure = $request->Heure;
        $order->price = $totalPrice;

        $order->save();
        if (!auth()->check()) {
            
            $user = new User();
            $user->name = $request->fullname; 
            $user->email = $request->email;
            
           
            $randomPassword = Str::random(10); 
            $user->password = bcrypt($randomPassword);
            $user->save();

            // Connectez automatiquement l'utilisateur après la création du compte
            auth()->login($user);
            
            // Envoyez un e-mail à l'utilisateur avec son mot de passe
            Mail::to($request->email)->send(new WelcomeMail($request->fullname, $randomPassword));
        } else {
            // L'utilisateur est déjà authentifié, utilisez l'utilisateur existant
            $user = auth()->user();
        }
           
            return redirect($response['paypal_link']);
                

        }
    }
     
    public function successPaypal(Request $request){
    $provider=new ExpressCheckout;
    $response= $provider->getExpressCheckoutDetails($request->token);
    return response()->json(data:'paiement avec succés');

    }

    public function cancelPaypal(){
        return response()->json(data:'paiement annulé', status:402);
    }
    public function success(Request $request){
        $stripeSecretKey = config('services.stripe.secret');
        \Stripe\Stripe::setApiKey($stripeSecretKey);
        $sessionId = $request->get('session_id');

        $session = \Stripe\Checkout\Session::retrieve($sessionId);
        if(!$session){
            throw new NotFoundHttpException;
        }
        $order = Order::where('payment_id', $session->id)->first(); // Assurez-vous que le champ "payment_id" correspond bien à la session_id
    if ($order) {
        $order->status_message = 'Payé';
        $order->save();
    }
       return view('web.success');
    }

    public function cancel(){
        
    }
}
    
    
    

