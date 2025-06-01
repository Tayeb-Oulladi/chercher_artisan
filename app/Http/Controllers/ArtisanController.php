<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ArtisanController extends Controller
{
    public function index(Request $request)
    {
        $query = DB::table('artisans');

        if ($request->filled('profession')) {
            $query->where('profession', 'like', '%' . $request->profession . '%');
        }

        if ($request->filled('ville')) {
            $query->where('ville', 'like', '%' . $request->ville . '%');
        }

        $artisans = $query->get();

        return view('front.art_ind', compact('artisans'));
    }
}
