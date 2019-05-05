<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LocalResearchController extends Controller
{
    function postMetadata(Request $request) {
        $genres = $request->genres;
        $titles = $request->titles;
        $artists = $request->artists;
        $genresV2 = $request->generosv2;
        $validar = $this->compareGenreToDB($genres,$genresV2);
        $this->insertCache($validar,$artists,$titles);
	}

	function compareGenreToDB($genreLCV1,$genreLCV2){
		$genresDB = $this->getGenres();
		$arrayGenres = array();
		$i = 0;
		foreach ($genreLCV1 as $itemV1) {
			$itemV2 = $genreLCV2[$i];
			$levOld = 0;
			$genreNew = "";
			$percentTemp = 0;
			foreach ($genresDB as $itemH) {

				similar_text(strtolower($itemV1), strtolower($itemH->name), $percentV1);
				similar_text(strtolower($itemV2), strtolower($itemH->name), $percentV2);
				
				$percent = $percentV1;
				if ($percentV2 > $percentV1) {
					$percent = $percentV2;
				}
				if ($percent > $levOld) {
					$levOld = $percent;
					$percentTemp = $percent;
					$genreNew = $itemH; 
				}
			}
			if ($percentTemp < 51) {
				$genreNew->id = -1;
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

	function insertCache($validar,$artists,$titles){
		$i = 0;
		$listMusic = array();
		foreach ($validar as $item ) {
			if ($item->id != -1) {
				$item->artist = $artists[$i];
				$item->id = $titles[$i++];
				$item->rating = mt_rand(6,10);
				array_push($listMusic,$item);
			}
		}
		if (!Cache::has("user".Auth::id())) {
			Cache::put("user".Auth::id(),$listMusic,now()->addMonth(2));
		}
	}

	function  insertToBD($validar,$artists,$titles){
        var_dump(Cache::get("user".Auth::id()));
	}
}
