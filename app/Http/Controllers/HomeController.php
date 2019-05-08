<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function index(){        
        if(Auth::check())
        {
            return view('download');

        }
        return view('home');
    }

    public function login(){        
        return view('login');
    }

    public function profile(){        
        return view('profile');
    }

    public function download(){        
        return view('download');
    }

    public function recommend(){        
        return view('recommend');
    }

    public function tutorial(){        
        return view('tutorial');
    }
}
