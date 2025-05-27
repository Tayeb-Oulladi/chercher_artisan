<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }
    public function about(){
        return view('front.about');
    }
    public function service(){
        return view('front.service');
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
