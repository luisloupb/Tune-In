<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use PHPJuice\Slopeone\Algorithm;
use App\User;
use App\Rating;
use App\Song;
use App\SongArtist;

class PredictionController extends Controller
{
    public function predictTest(Request $request)
    {
        $slopeone = new Algorithm();

        $data =[
            [
              "squid" => 1,
              "cuttlefish" => 0.5,
              "octopus" => 0.2
            ],
            [
              "squid" => 1,
              "octopus" => 0.5,
              "nautilus" => 0.2
            ],
            [
              "squid" => 0.2,
              "octopus" => 1,
              "cuttlefish" => 0.4,
              "nautilus" => 0.4
            ],
            [
              "cuttlefish" => 0.9,
              "octopus" => 0.4,
              "nautilus" => 0.5
            ]
          ];

        $slopeone->update($data);

        $results = $slopeone->predict([
            "squid" => 0.4
        ]);

        dd($results);

        return $results;
	}
	
	public function predict(Request $request)
	{
		$slopeCache = Cache::get('Model');

		$user=User::where('id',20)->firstOrFail();
		$userInfo = self::getData($user);

		$results = $slopeCache->predict($userInfo);
		
		$goodValues = [];
		foreach ($results as $key => $value) {
			if ($value>7) {
				array_push($goodValues,$key);
			}
		}
		return $goodValues;
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
}
