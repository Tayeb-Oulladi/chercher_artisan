<?php

namespace App\Http\Controllers;

use App\Models\Profession;
use Illuminate\Http\Request;

class ProfessionController extends Controller
{
    public function index()
    {
        $professions = Profession::all(); // ou ->paginate() si tu veux la pagination
        return view('front.service', compact('professions'));
    }
}
