<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PlayersController extends Controller
{

    public function index()
    {
        $json = file_get_contents(database_path("teams.json"));
        $teams = json_decode($json,true);

        return view('forms.addTeam')->with([
            'teams' => $teams
        ]);
    }

}