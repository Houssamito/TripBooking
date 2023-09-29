<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Favorite;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index()
    {
    $data['Activity'] = Activity::select('id','titre', 'sous-titre', 'image','image2','image3','Categorie','prix')->get();   
    $user = User::find(Auth::id());
    $data['favoris'] = DB::table('favorites')
    ->join('activities', 'favorites.activity_id', '=', 'activities.id')
    ->select('favorites.user_id', 'favorites.activity_id', 'activities.*')
    ->get();
    return view('web.Profile', ['User' => $user], $data);
    }

    public function addToFavoris($id)
    {
        // Récupérez l'utilisateur connecté
        $user = Auth::user();
    
        // Vérifiez si l'activité n'est pas déjà dans les favoris de l'utilisateur
        $existingFavorite = Favorite::where('user_id', $user->id)
            ->where('activity_id', $id)
            ->first();
    
        if (!$existingFavorite) {
            // Créez une nouvelle instance du modèle Favorite
            $favorite = new Favorite([
                'user_id' => $user->id,
                'activity_id' => $id,
            ]);
    
            // Enregistrez le favori dans la base de données
            $favorite->save();
        }
    
        // Redirigez l'utilisateur vers la page des favoris ou une autre page de votre choix
        return redirect()->route('MenuUtilisateur');
    }
    

}
