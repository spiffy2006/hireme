<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>
        <header>
            <div id="logo">
            </div>
            <nav class-"navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="{{ url('/') }}">My Journal</a>
                    </div>  
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="{{ url('/entries/recent') }}">Recent</a>
                        </li>
                        <li>
                            <a href="{{ url('/entries/popular') }}">Popular</a>
                        </li>
                        <li>
                            <a href="{{ url('/entries') }}">All</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        @if(Auth::check())
                            <li>
                                <a href="{{ url('/entries/' . Auth::user()->username) }}">My Entries</a>
                            </li>
                            <li>
                                <a href="{{ url('/entries/create') }}">New Entry</a>
                            </li>
                            <li>
                                <a href="{{ url('/auth/logout') }}">Log out</a>
                            </li>
                        @else
                            <li>
                                <a href="{{ url('/auth/login') }}">Log in</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </nav>
        </header>
        <div class="container">
            <div class="content">
                @yield('content')
            </div>
        </div>
    </body>
</html>
