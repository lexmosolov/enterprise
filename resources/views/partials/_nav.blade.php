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
                    <li><a href="{{ url('/') }}">
                            <span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span> Dashboard</a></li>
                    <li><a href="{{ action('EntriesController@index') }}">
                            <span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> Entries</a></li>
                    <li><a href="{{ action('DepartmentsController@index') }}">
                            <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Departments</a></li>
                    <li><a href="{{ action('TasksController@index') }}">
                            <span class="glyphicon glyphicon-tasks" aria-hidden="true"></span> Tasks</a></li>
                    <li><a href="{{ action('UsersController@index') }}">
                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Users</a></li>
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
                            <li><a href="{{ action('SupportController@create') }}">Support Request</a></li>
                            <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>