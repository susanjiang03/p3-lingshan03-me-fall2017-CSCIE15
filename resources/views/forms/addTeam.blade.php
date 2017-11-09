@extends('layouts.master')

@section('content')
    <div class="col-lg-6">
        <h2>All Teams</h2>
        <hr>
        @foreach($teams as $team => $contact)
            <div class="panel">
                <div class="panel-head">
                    {{$team}}
                </div>
                <div class="panel-body">
                    @foreach($contact as $key => $value)
                        @if($value)
                            <p>{{ ucfirst($key) }} : {{$value}}</p>
                        @endif
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
                <input type="text" class="form-control" id="teamName" name="teamName" value="{{ old('teamName')}}">
            </div>
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email')}}">
            </div>
            <div class="form-group">
                <label for="phone" class="required">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" maxlength="10" value="{{ old('phone')}}">
            </div>
            <div class="form-group">
                <label for="captName">Captain Name</label>
                <input type="text" class="form-control" id="captName" name="captName" value="{{ old('captName')}}">
            </div>
            <div class="form-group">
                <label for="hasSponsor">Has Sponsor</label>
                <label class="checkbox-inline">
                    <input type="checkbox" name="hasSponsor" id="hasSponsor" @if(old('hasSponsor')) checked @endif>
                    Yes
                </label>
            </div>
            <div class="form-group">
                <label for="numOfPlayers" class="required">Number of Players: (7 to 15) </label>
                <select class="form-control" id="numPlayers" name="numPlayers" value="{{ old('numPlayers')}}">
                    <option value=""></option>
                    @for($i = 7; $i <= 15; $i ++)
                        <option value="{{$i}}" @if(old('numPlayers') == $i) selected @endif>{{$i}} </option>
                    @endfor
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <div class="text-danger">
            @if(count($errors) > 0)
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>

@endsection

