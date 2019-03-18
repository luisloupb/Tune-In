<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
       $credentials = $this->validate(request(),['email'=>'email|required|string','password'=>'required|string']);

        if (Auth::attempt($credentials)) {
            return redirect('home');
        }
        else{
            return 'error';
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

}
