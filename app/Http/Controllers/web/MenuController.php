<?php
namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $data['route'] = 'Menu';
        // Récupérer toutes les activités depuis le modèle Activity
        $data['Activity']=Activity::select('id','titre', 'sous-titre', 'image','image2','image3','Categorie','prix')->get();

        // Charger la vue de la page web avec les données des activités
        return view('web.index', $data);
    }

    // Autres actions pour afficher des activités spécifiques dans la page web
}