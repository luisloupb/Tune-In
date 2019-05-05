<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use PHPJuice\Slopeone\Algorithm;
use App\User;
use App\Rating;
use App\Song;
use App\SongArtist;
use App\Artist;
use App\SongGenre;
use App\Genre;

class PredictionController extends Controller
{

	public function predict(Request $request)
	{
		$slopeCache = Cache::get('Model');

		$user = User::where('id',$request->user_id)->firstOrFail();
		$userInfo = self::getData($user);
		$results = $slopeCache->predict($userInfo);
		$goodValues = [];
		foreach ($results as $key => $value) {
			if ($value>7) {
				array_push($goodValues,$key);
			}
		}
		
		$songsInfo = [];
		foreach ($goodValues as $songId) {
			array_push($songsInfo,self::getSongInfo($songId));
		}

		// dd($songsInfo);

		return \view('recommend',[
			'predictedSongs' => $songsInfo,
		]);
	}

	public function FitSlopeone()
	{
		$userData = [];
		$allUsers = User::distinct('id')->get();
		foreach ($allUsers as $userInfo) {
			if (!empty($userqualification = self::getData($userInfo))) {
				array_push($userData,$userqualification);
			}
		}	
		$slopeone = new Algorithm();
		$slopeone->update($userData);
		Cache::put('Model',$slopeone,now()->addMonth(2));
	}

    public function getData($userInfo)
    {
		$data = [];
		$qualifiedSongs = Rating::where('user_id',$userInfo->id)->get();
		if (!empty($qualifiedSongs)) {
			foreach ($qualifiedSongs as $qualification) {
				$song = Song::where('id',$qualification->song_id)->first();
				$data[$song->id] = $qualification->rating_number;
			}
		}
		return $data;
	}

	public function getSongInfo($songId)
	{
		$song = Song::find($songId);

		$artistId = SongArtist::where('song_id',$songId)->firstOrFail();
		$artist = Artist::find($artistId->artist_id);

		$songGenres = [];
		$genres = SongGenre::where('song_id',$songId)->get();
		foreach ($genres as $genre) {
			$genreWild = Genre::find($genre->genre_id);
			array_push($songGenres, $genreWild);
		}

		return [
			'Song' => $song,
			'Artist' => $artist,
			'Genres' => $songGenres
		];
	}
}

	
