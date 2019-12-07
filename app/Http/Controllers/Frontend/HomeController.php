<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("frontend.home.index");
    }
    public function emlak(){
        return view("frontend.home.emlak");
    }
    public function emlaklar(){
        return view("frontend.home.emlaklar");
    }
    public function iletisim(){
        return view("frontend.home.iletisim");
    }

}
