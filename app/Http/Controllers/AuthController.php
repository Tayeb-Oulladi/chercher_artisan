<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class AuthController extends Controller
{
    public function index(){
        return view('auth.login_register');
    }

    public function register(Request $request)
    {
        // Validation
        $request->validate([
            'username' => 'required|string|max:255',
            'type_user' => 'required|string|in:client,artisan,societe d\'artisan',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        // Insertion
        User::create([
            'name' => $request->username,
            'type_user' => $request->type_user,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Redirection ou message de succès
        return redirect()->route('home')->with('success', 'Inscription réussie !');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Connexion réussie
            return redirect()->route('home');
        }

        // Connexion échouée : on renvoie avec un message
        return back()->with('login_error', 'Email ou mot de passe incorrect');
    }

}
