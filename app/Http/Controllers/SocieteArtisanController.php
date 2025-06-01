<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\SocieteArtisan;
class SocieteArtisanController extends Controller
{
    public function index(Request $request)
    {
        $societes = $this->filterSocietes($request);
        return view('front.art_soc', compact('societes'));
    }

    public function search(Request $request)
    {
        $societes = $this->filterSocietes($request);
        $html = view('partials.societe_cards', compact('societes'))->render();
        return response()->json(['html' => $html]);
    }

    private function filterSocietes(Request $request)
    {
        $query = DB::table('societe_artisan');

        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->name . '%');
        }

        if ($request->filled('ville')) {
            $query->where('ville', 'like', '%' . $request->ville . '%'); // ou une vraie colonne `ville` si elle existe
        }

        return $query->get();
    }
}
