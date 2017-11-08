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
                            <li>{{ ucfirst($key) }} : {{$value}}</li>
                        @endforeach
                    </div>
                </div>
            @endforeach
        @else
            <h3 class="text-center">No Team found</h3>
        @endif
    </div>

@endsection

