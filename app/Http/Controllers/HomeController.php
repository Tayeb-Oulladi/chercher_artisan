<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profession;
class HomeController extends Controller
{
    public function index(){
        $professions = Profession::all(); 
        return view('index' ,compact('professions'));
    }
    public function about(){
        return view('front.about');
    }
    
    public function company(){
        return view('front.art_soc');
    }
    public function artisan(){
        return view('front.art_ind');
    }
    public function contact(){
        return view('front.contact');
    }
}
