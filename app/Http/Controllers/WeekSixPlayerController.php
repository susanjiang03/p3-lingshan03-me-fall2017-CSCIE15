<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeekSixPlayerController extends Controller
{
    const Players = Array("lebron james" => "Cleveland Cavaliers", "chris paul" => "Houston Rocket",

        "john wall" => "Washington Wizards", "giannis antetokounmpo" => "Milwaukee Bucks");

    public function index(){
        foreach(self::Players as $name => $team)
        echo "<h1><i>".ucfirst($name)."</i> is playing for ".$team.".</h1><br>";
    }

    public function showInfo($name = ""){
        $name = str_replace("-"," ",strtolower($name));

        if($name == ""){
            self::index();
        }
        elseif(array_key_exists($name,self::Players)){
            echo "<h1><i>".ucfirst($name)."</i> is playing for ".self::Players[$name].".</h1><br>";
        }
        else{
            echo "<h1>Can't find the team's info for ".$name."</h1>";
        }
    }
}
