@extends('layouts.master')

@section('content')
    <div class="col-lg-6">
        <h2>All Teams</h2>
        <hr>
        @if(isset($newTeam))
            @foreach($teams as $team => $contact)
                <div class="panel">
                    <div class="panel-head">
                        {{$team}}
                    </div>
                    <div class="panel-body">
                        @foreach($contact as $key => $value)
                            <p>{{ ucfirst($key) }} : {{$value}}</p>
                        @endforeach
                    </div>
                </div>
            @endforeach
        @endif

        @foreach($teams as $team => $contact)
            <div class="panel">
                <div class="panel-head">
                    {{$team}}
                </div>
                <div class="panel-body">
                    @foreach($contact as $key => $value)
                        <p>{{ ucfirst($key) }} : {{$value}}</p>
                    @endforeach
                </div>
            </div>
        @endforeach

    </div>
    <div class="col-lg-6">
        <h2>Register A New Team</h2>
        <form class="well" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="teamName" class="required">Team Name</label>
                <input type="text" class="form-control" id="teamName">
            </div>
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="phone" class="required">Phone</label>
                <input type="text" class="form-control" id="phone">
            </div>
            <div class="form-group">
                <label for="captName">Captain Name</label>
                <input type="text" class="form-control" id="captName">
            </div>
            <div class="form-group">
                <label for="hasSponsor">Has Sponsor</label>
                <label class="checkbox-inline"><input type="checkbox" name="hasSponsor">Yes</label>
            </div>
            <div class="form-group">
                <label for="selNumOfPlayers" class="required">Number of Players: (7 to 15) </label>
                <select class="form-control" id="selNumOfPlayers">
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection

