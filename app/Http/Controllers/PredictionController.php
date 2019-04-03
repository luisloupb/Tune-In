<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPJuice\Slopeone\Algorithm;

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
}
