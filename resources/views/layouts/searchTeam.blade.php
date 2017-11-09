@extends('layouts.master')

@section('content')

    <div style="width:60%;margin:auto">
        <h4 class="text-center">Search Result : {{ $searchTeam }}</h4>
        <hr>
        @if(isset($teams) && sizeof($teams) > 0)
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
        @elseif(!$searchTeam)
            <h3 class="text-center">No input keyword.</h3>
        @else
            <h3 class="text-center">No Team found</h3>
        @endif
    </div>

@endsection

