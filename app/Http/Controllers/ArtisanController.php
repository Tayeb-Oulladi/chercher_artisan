<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Artisan;
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

    public function search(Request $request)
{
    $query = Artisan::query();

    if ($request->filled('profession')) {
        $query->where('profession', 'LIKE', '%' . $request->profession . '%');
    }

    if ($request->filled('ville')) {
        $query->where('ville', 'LIKE', '%' . $request->ville . '%');
    }

    $artisans = $query->get();

    return response()->json([
        'html' => view('partials.artisan_cards', compact('artisans'))->render()
    ]);
}

}
