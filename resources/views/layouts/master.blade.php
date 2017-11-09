<!DOCTYPE html>
<html>
<head>
    <title>
        @yield('title', 'UCBA')
    </title>

    <meta charset='utf-8'>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    @stack('head')
    <style>
        .navbar-custom {
            background-color:#e74c3c;
            color:#ffffff;
        }

        .navbar-custom .navbar-nav > li > a {
            color:#fff;
        }

        .navbar-custom .navbar-nav > .active > a {
            color: #ffffff;
            background-color:transparent;
        }

        .navbar-custom .navbar-nav > li > a:hover,
        .navbar-custom .navbar-nav > li > a:focus,
        .navbar-custom .navbar-nav > .active > a:hover,
        .navbar-custom .navbar-nav > .active > a:focus,
        .navbar-custom .navbar-nav > .open >a {
            text-decoration: none;
            background-color: #ffbbbc;
        }

        .navbar-custom .navbar-brand {
            color:#eeeeee;
        }
        .navbar-custom .navbar-toggle {
            background-color:#eeeeee;
        }
        .navbar-custom .icon-bar {
            background-color:#ecf0f1;
        }

        .required:after {
            content:" *";
            color:red;
        }

        img.header{
            width:100%;
            height:250px;
        }
    </style>

</head>
<body>
    <div class="container">
<header>
    <img src="{{url('/images/UCBA.jpg')}}" class="header" alt="UnitedChinseBasketballAssoication">
    <nav class="navbar navbar-default navbar-custom">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{url('/')}}">UCBA</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Scores</a></li>
                <li><a href="#">Schedule</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Video</a></li>
                <li><a href="#">Standings</a></li>
                <li><a href="#">Stats</a></li>
                <li><a href="#">Players</a></li>
                <li><a href="#">Teams</a></li>
            </ul>
            <div>
                <form class="navbar-form" method="GET" action="{{url('/search')}}">
                    <div class="form-group">
                        <input name="searchTeam" id="searchTeam" type="text" placeholder="Search By Team Name" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </nav>
</header>

<section class="row">
    @yield('content')
</section>
<footer class="text-center row">
    &copy; {{ date('Y') }}
</footer>

@stack('body')

    </div>

</body>
</html>
