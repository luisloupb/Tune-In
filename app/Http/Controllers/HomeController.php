<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        print("hola prro :v");
        return view('home');
    }

    
}
