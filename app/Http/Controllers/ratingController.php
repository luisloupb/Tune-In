<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class ratingController extends Controller
{

    function createRating(Request $request){
	   	try {
			DB::table('dbo.ratings')->insert(['rating_number'=>$request->rating,'user_id'=>Auth::id(),'song_id'=>$request->idsong]);
		} catch (Exception $e) {
			return "Error no se pudo guardar";
		}
    }

    function getSongs(){
    	$data = DB::select("select * from dbo.songs");
    	return $data;
    }

}
