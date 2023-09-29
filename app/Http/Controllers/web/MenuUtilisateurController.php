<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuUtilisateurController extends Controller
{
    public function index()
    {
        $data['route'] = 'Menu';
        // Récupérer toutes les activités depuis le modèle Activity
        $data['Activity']=Activity::select('id','titre', 'sous-titre', 'image','image2','image3','Categorie','prix')->get();
        $data['User'] = Auth::user();
        
        // Charger la vue de la page web avec les données des activités
        return view('web.MenuUtilisateur', $data);
    }

    
}
