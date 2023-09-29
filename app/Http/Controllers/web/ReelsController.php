<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reels;
use Illuminate\Support\Facades\Auth;

class ReelsController extends Controller
{
    public function index()
    {
        $data['route'] = 'Reels';
        // Récupérer toutes les activités depuis le modèle Activity
        $data['Reels']=Reels::select('id','titre', 'video')->get();
        $data['User'] = Auth::user();
        
        // Charger la vue de la page web avec les données des activités
        return view('web.Reels', $data);
    }
}
