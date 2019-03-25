<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
class testController extends Controller
{
    function postMetadata(Request $request) {
        echo $request->input('title');
        echo $request->input('album');
        return view('prueba');
	}
}
