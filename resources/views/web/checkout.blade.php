<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecommerce Cart/Wishlist Page Design</title>

    
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("web/css/style2.css")}}">
</head>
<body>
<!--  <nav id="menu" class="navbar navbar-default navbar-fixed-top" style="background-color: blue; width: 100%; height: 80px">
		<div class="container"> 
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			  <a class="navbar-brand" href="index.html"><i class="fa fa-flag-checkered fa-flip-horizontal"></i> TripBooking<strong></strong></a> 

			  
			</div>


			
			
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav navbar-right">
			  <li><a href="{{ route('MenuUtilisateur')}}" class="page-scroll">Home</a></li>
				<li><a href="{{ route('Contact')}}" class="page-scroll">Contact</a></li>
				<li><a href="contact.html" class="page-scroll">Services</a></li>
				<li><a href="contact.html" class="page-scroll" class="Reels">Reels</a></li>
				@if (Auth::check())
    <a class="sign-in-button" href="{{ route('Profile', ['id' => $User->id]) }}">
        <i class="fas fa-user"></i> {{ Auth::User()->name }}
    </a>
@else
    <a class="sign-in-button" href="{{ route('login') }}">
        <i class="fas fa-user"></i> Sign In
    </a>
@endif

    </div>
         

			  </ul>
			</div>
			
		
	</nav> 
-->

    <div class="py-3 py-md-4 checkout">
        <div class="container">
            <h4>Checkout</h4>
            <hr>

            <div class="row">
                <div class="col-md-12 mb-4">
                    <div class="shadow bg-white p-3">
                        <h4 class="text-primary">
                            Prix total à payer :
                            <span class="float-end">{{$prix}}$</span>
                        </h4>
                        <hr>
                        <small>* Un mode de passe sera envoyé par Email pour créer votre compte</small>
                        <br/>
                        <small>* Payez avec Paypal, Stripe ou sur place</small>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="shadow bg-white p-3">
                        <h4 class="text-primary">
                            Basic Information
                        </h4>
                        <hr>

                        <form action="{{route('checkout.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label>Full Name</label>
                                    <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Enter Full Name" />
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Phone Number</label>
                                    <input type="number" name="phoneNumber" id="number" class="form-control" placeholder="Enter Phone Number" />
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Email Address</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email Address" />
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Full Address</label>
                                    <textarea name="adress" id="adress" class="form-control" rows="2"></textarea>
                                </div>
                                
                                <div class="col-md-12 mb-3">
                                    <label>Select Payment Mode: </label>
                                    <div class="d-md-flex align-items-start">
                                        <div class="nav col-md-3 flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <button class="nav-link fw-bold" id="cashOnDeliveryTab-tab" data-bs-toggle="pill" data-bs-target="#cashOnDeliveryTab" type="button" role="tab" aria-controls="cashOnDeliveryTab" aria-selected="true" name="payment_method" value="cash">Paiement sur place</button>
                                            <button class="nav-link fw-bold" id="onlinePayment-tab" data-bs-toggle="pill" data-bs-target="#onlinePayment" type="button" role="tab" aria-controls="onlinePayment" aria-selected="false" name="payment_method" value="paypal">Paiement avec Paypal</button>
                                            <button class="nav-link fw-bold" id="StripeTab-tab" data-bs-toggle="pill" data-bs-target="#StripeTab" type="button" role="tab" aria-controls="cashOnDeliveryTab" aria-selected="true" name="payment_method" value="stripe">Paiement avec Stripe</button>
                                            
                                        </div>
                                        <div class="tab-content col-md-9" id="v-pills-tabContent">
                                            <div class="tab-pane fade" id="cashOnDeliveryTab" role="tabpanel" aria-labelledby="cashOnDeliveryTab-tab" tabindex="0">
                                                <h6>Payment sur place</h6>
                                                <hr/>
                                                <button type="submit" class="btn btn-primary payment-option" name="payment_method" value="cash">Place Order (Cash on Delivery)</button>

                                            </div>
                                            <div class="tab-pane fade" id="onlinePayment" role="tabpanel" aria-labelledby="PaypalPayment-tab" tabindex="0">
                                                <h6>Paiement avec Paypal</h6>
                                                <hr/>

                                                <div wire:ignore>
                                                <div id="paypal-button-container" name="payment_method" value="paypal"></div>
                      
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="StripeTab" role="tabpanel" aria-labelledby="StripeTab-tab" tabindex="0">
                                              <h6>Paiement avec Stripe</h6>
                                              <hr/>
                                              <button type="submit" class="btn btn-primary payment-option" name="payment_method" value="stripe">Payez sur Stripe</button>

                                          </div>
                                            
                                          </div>
                              
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://www.paypal.com/sdk/js?client-id=AWmf1PpliTIjpg8ii7JVwLUVqIRCHseV8cUSTinVFvyiNNAAzqXABpoWxl_YsRf64Cdsdx7_VSOmaJpy&currency=USD"></script>
    <script>
        paypal.Buttons({
           /* onClick()  {

// Show a validation error if the checkbox is not checked
 if (!document.getElementById('fullname').value
    || !document.getElementById('number').value
    || !document.getElementById('email').value
    || !document.getElementById('adress').value
    ) {
  
} 
} */
          // Order is created on the server and the order id is returned
          createOrder() {
            return fetch("/my-server/create-paypal-order", {
              method: "POST",
              headers: {
                "Content-Type": "application/json",
              },
              // use the "body" param to optionally pass additional order information
              // like product skus and quantities
              body: JSON.stringify({
                cart: [
                  {
                    sku: "56",
                    quantity: "10",
                  },
                ],
              }),
            })
            .then((response) => response.json())
            .then((order) => order.id);
          },
          // Finalize the transaction on the server after payer approval
          onApprove(data) {
            return fetch("http://127.0.0.1:8000/checkout/store", {
              method: "POST",
              headers: {
                "Content-Type": "application/json",
              },
              body: JSON.stringify({
                orderID: data.orderID
              })
            })
            .then((response) => response.json())
            .then((orderData) => {
              // Successful capture! For dev/demo purposes:
              console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
              const transaction = orderData.purchase_units[0].payments.captures[0];
              alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
              // When ready to go live, remove the alert and show a success message within this page. For example:
              // const element = document.getElementById('paypal-button-container');
              // element.innerHTML = '<h3>Thank you for your payment!</h3>';
              // Or go to another URL:  window.location.href = 'thank_you.html';
            });
          }
        }).render('#paypal-button-container');
      </script>
</body>
</html>