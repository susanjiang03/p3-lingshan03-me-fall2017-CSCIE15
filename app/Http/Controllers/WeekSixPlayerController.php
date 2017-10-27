<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeekSixPlayerController extends Controller
{
    const Players = Array(
        "Lebron James" => Array("2017" => "Cleveland Cavaliers", "2016" => "Cleveland Cavaliers", "2015" => "Cleveland Cavaliers",
                                "2014" => "Miami Heat", "2013" => "Miami Heat", "2012" => "Miami Heat"),
        "Chris Paul" => Array("2017" => "Houston Rocket", "2016" => "Los Angeles Clippers", "2015" => "Los Angeles Clippers",
                              "2014" => "Los Angeles Clippers", "2013" => "Los Angeles Clippers", "2012" => "Los Angeles Clippers"),
        "Dwight Howard" => Array("2017" => "Charlotte Hornets", "2016" => "Atlanta Hawks", "2015" => "Houston Rockets",
                                "2014" => "Houston Rockets", "2013" => "Houston Rockets","2012" => "Los Angeles Lakers")
    );

    public function index(){
        return view('playerForm');
    }


    public function showInfo($name = null, $year = null){
        $name = str_replace("-"," ",strtolower($name));

        if(!$name && !$year){

            echo "<table style='margin:auto'>";
            echo    "<tr>";
                 echo  "<th>YEAR</th>";
                 echo  "<th>PLAYER</th>";
                 echo  "<th>TEAM</th>";
            echo    "</tr>";
            foreach(self::Players as $name => $teams){

                foreach($teams as $year => $team){
                    echo "<tr>";
                    echo    "<td style='border:1px solid black;padding:5px'>".$year."</td>";
                    echo    "<td style='border:1px solid black;padding:5px'>".$name."</td>";
                    echo    "<td style='border:1px solid black;padding:5px'>".$team."</td>";
                    echo "<tr>";
                }
            }
            echo "<table>";

        }
        elseif(array_key_exists(ucfirst($name),self::Players)){
            echo "<h1><i>".ucfirst($name)."</i> is playing for ".self::Players[$name].".</h1><br>";
        }
        else{
            echo "<h1>Can't find the team's info for ".$name."</h1>";
        }
    }
}
