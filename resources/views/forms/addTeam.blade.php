@extends('layouts.master')

@section('content')
    <div class="col-lg-6">
        <h2>All Teams</h2>
        <hr>

    </div>
    <div class="col-lg-6">
        <h2>Register A New Team</h2>
        <form class="well">
            <div class="form-group">
                <label for="teamName">Team Name</label>
                <input type="text" class="form-control" id="teamName">
            </div>
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone">
            </div>
            <div class="form-group">
                <label for="captName">Captain Name</label>
                <input type="text" class="form-control" id="captName">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection

