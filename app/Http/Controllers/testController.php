<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class testController extends Controller
{
    function verUsuarios(Request $request) {
    	var_dump(User::get()->all());
	}
	
	function compareTitleToDB(){
		$titleDB = self::getTitles();
	}

	function compareGenreToDB($genreLCV1,$genreLCV2){
		$genresDB = self::getGenres();
		$arrayGenres = array();
		$i = 0;		
		$temp = 0;
			foreach ($genreLCV1 as $itemV1) {
				$itemV2 = $genreLCV2[$i++];
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
				$genreNew->percent = $percentTemp;				
				array_push($arrayGenres,$genreNew);		
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
	
	function getTitles(){
		$titlesDB = DB::select("select name from dbo.songs");
		$titles = array();
		$i = 0;
		foreach ($titlesDB as $item)
		{
		    $titles[$i++] = $item;
		}
		return $titles;
	}

	function  insertToBD($validar,$artists,$titles){
		$i = 0;
		foreach ($validar as $item) {
			if ($item->id != -1) {
				if ($titles[$i] != null) {
						       	// Rating::create([
						       	// 	'artist_id' => Artist::where('name',$titles[$i])->get(),
						       	// 	'rating_num' => rand(6, 10),
						       	// 	'song_id' => Song::where('name',$titles[$i])->get()
       							// ]);
						DB::table('dbo.music_disc')->insert(['title'=>$titles[$i],'artist'=>$artists[$i],'idGenre'=>$item->id,'idUsers'=>Auth::id()]);
				}
			}
			$i++;
		}
		return "La información se guardo exitosamente";
	}

}
?>




