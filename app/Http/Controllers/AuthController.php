<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
class AuthController extends Controller
{
    public function index(){
        return view('auth.login_register');
    }
    public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        return redirect()->route('home');
    }

    return back()->withErrors([
        'email' => 'Email ou mot de passe incorrect.',
    ]);
}
}
