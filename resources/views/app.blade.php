<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Enterprise Portal Prototype</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{--<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.4/lumen/bootstrap.min.css" rel="stylesheet">--}}
    <link href="{{ asset('css/add.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Enterprise Portal Prototype</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            @if (Auth::guest())

            @else
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/') }}"><span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span>
                            Dashboard</a></li>
                    <li><a href="{{ action('DepartmentsController@index') }}"><span class="glyphicon glyphicon-list-alt"
                                                                                    aria-hidden="true"></span>
                            Departments</a></li>
                    <li><a href="{{ action('TasksController@index') }}"><span class="glyphicon glyphicon-tasks"
                                                                              aria-hidden="true"></span> Tasks</a>
                    </li>
                    <li><a href="{{ action('UsersController@index') }}"><span class="glyphicon glyphicon-user"
                                                                              aria-hidden="true"></span> Users</a></li>
                    <li class="hidden"><a href="{{ action('FilesController@index') }}"><span
                                    class="glyphicon glyphicon-envelope"
                                                                              aria-hidden="true"></span> Messages</a>
                    </li>
                </ul>
            @endif


            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="{{ url('/auth/login') }}">Login</a></li>
                    <li><a href="{{ url('/auth/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @if (Session::has('message'))
                <div class="alert alert-warning">
                    <p><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                        <span class="sr-only">Info:</span>
                        {{ Session::get('message') }}</p>
                </div>
            @endif
            @if ($errors->any())
                <div class='alert alert-danger'>
                    @foreach ( $errors->all() as $error )
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            @yield('content')
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="{{ URL::asset('js/rowlink.js') }}"></script>

</body>
</html>
