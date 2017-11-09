<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PlayersController extends Controller
{

    public function index()
    {
        return view('forms.addTeam')->with([
            'teams' => $this->getAllTeams()
        ]);
    }

    public function addTeam(){
        return view('forms.addTeam');
    }


    public function searchTeam(Request $request){
        $searchTeam = strtolower($request->input('searchTeam',null));
        $allTeams = $this->getAllTeams();
        $filterTeams = Array();

        if($searchTeam) {
            foreach ($allTeams as $team => $value) {
                if (strpos(strtolower($team), $searchTeam) !== false) {
                    $filterTeams[$team] = $value;
                }
            }
        }

        return view('layouts.searchTeam')->with([
            'searchTeam' => $searchTeam,
            'teams' => $filterTeams
        ]);
    }

    public function getAllTeams(){
        $json = file_get_contents(database_path("teams.json"));
        $teams = json_decode($json,true);
        return $teams;
    }
}