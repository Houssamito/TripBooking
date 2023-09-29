<?php
namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use Illuminate\Http\Request;

class PrezController extends Controller
{
    public function index($id)
    {
        $randomActivities = Activity::inRandomOrder()->limit(4)->get();

        $data['route'] = 'prez';
    
    // Récupérer l'activité spécifique depuis le modèle Activity
    $data['activity'] = Activity::findOrFail($id);
    
    // Charger la vue de la page web avec les données de l'activité spécifique
    return view('web.prez', $data, ['randomActivities' => $randomActivities]);
    }

    public function sendData(Request $request, $id, $prix)
    {
        // Retrieve data from the form submission
        $date = $request->input('date');
        $numberOfPlaces = $request->input('numberOfPlaces');

        // Store the data in the session
        $request->session()->put('bookingData', [
            'date' => $date,
            'numberOfPlaces' => $numberOfPlaces,
        ]);

        // Redirect to another view
        return redirect()->route('checkout.index', ['id' => $id, 'prix' => $prix]);
    }

    // Autres actions pour afficher des activités spécifiques dans la page web
}