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

    public function addTeam(Request $request){
        # Validate the request data
        $this->validate($request, [
            'teamName' => 'required|min:3|regex:/^[\pL\s]+$/u',
            'phone' => 'required|digits:10',
            'numPlayers' => 'required',
        ]);

        $teams = $this->getAllTeams();

        $newTeamName = $request->input('teamName');

        $teams[$newTeamName] = Array(
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'Captain Name' => $request->input('captName'),
            'Has Sponsor' => $request->input('hasSponsor'),
            'Number of Players' => $request->input('numPlayers'),
        );

        return view('forms.addTeam')->with([
            'teams' => $teams,
        ]);
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