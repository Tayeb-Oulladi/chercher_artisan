<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
class MessageController extends Controller
{
    public function store(Request $request)
    {
        // Validation des données
        $request->validate([
            'nom' => 'required',
            'email' => 'required|email',
            'sujet' => 'required',
            'message' => 'required',
        ]);

        // Enregistrement dans la base de données
        Message::create($request->all());

        // Redirection ou message de succès
        return redirect()->route('home')->with('success', 'Votre message a bien été envoyé.');

    }
}
