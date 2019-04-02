<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
class testController extends Controller
{
    function postMetadata(Request $request) {
        dd($request);
        echo $request->title;
        echo $request->album;
        return view('prueba');
	}
}
