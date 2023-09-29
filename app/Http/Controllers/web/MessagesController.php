<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Messages; 

class MessagesController extends Controller
{
    public function store(Request $request)
    {
        // Validation des données (vous pouvez utiliser les validateurs de Laravel)
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Créez une nouvelle instance du modèle Contact et attribuez les valeurs
        $message = new Messages();
        $message->name = $validatedData['name'];
        $message->email = $validatedData['email'];
        $message->subject = $validatedData['subject'];
        $message->message = $validatedData['message'];

        // Enregistrez le contact dans la base de données
        $message->save();

        // Redirigez l'utilisateur après la soumission du formulaire
        return redirect()->back()->with('success', 'Votre message a été envoyé avec succès.');
    }
}


