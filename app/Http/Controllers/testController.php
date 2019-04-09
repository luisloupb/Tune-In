<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class testController extends Controller
{
    function postMetadata(Request $request) {
        //var_dump($request->all());
        $genres = $request->genres;
        $titles = $request->titles;
        $artists = $request->artists;
        $getGenres = $this->getGenres(); 
        $validar = $this->validar($genres,$getGenres);
        var_dump($validar);
        //return view('prueba');
	}

	function validar($genreLC,$genresDB){
		$arrayGenres = array();
		$i = 0;
		foreach ($genreLC as $item) {
			$levOld = 254;
			$genreNew = "";
			foreach ($genresDB as $itemH) {
				$levNew = levenshtein($item,$itemH->name);
				if ($levNew < $levOld) {
					$levOld = $levNew;
					$genreNew = $itemH; 
				}
			}
			$arrayGenres[$i++] = $genreNew;
		}
		return $arrayGenres;
	}

	function getGenres(){
		$genre = DB::table('genres')->get();
		$genres = array();
		$i = 0;
		foreach ($genre as $item)
		{
		    $genres[$i++] = $item;
		}
		return $genres;
	}

}
?>




