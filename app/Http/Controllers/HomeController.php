<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $l = 'holi';
        return view(
            'home',[
                'holi' => $l,
            ]
        );
    }

    public function login(){        
        return view('login');
    }
}
