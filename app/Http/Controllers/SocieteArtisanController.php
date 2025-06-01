<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SocieteArtisan;
class SocieteArtisanController extends Controller
{
    public function index(Request $request)
{
    $query = SocieteArtisan::query();

    if ($request->filled('ville')) {
        $query->where('ville', 'like', '%' . $request->ville . '%');
    }

    $societes = $query->get();

    return view('front.art_soc', compact('societes'));
}
}
