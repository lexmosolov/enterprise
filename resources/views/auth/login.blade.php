@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Login</div>
                    <div class="panel-body">

                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                <label class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">Login</button>

                                    <a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your
                                                                                                Password?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="panel panel-info">
                    <div class="panel-heading">Login Details</div>
                    <table class="table table-hover table-bordered">
                        <thead>
                        <tr>
                            <th>E-Mail Address</th>
                            <th>Password</th>
                        </tr>
                        </thead>
                        <tbody data-link="row" class="rowlink">
                        <tr>
                            <td>admin@admin.com</td>
                            <td>admin</td>
                        </tr>
                        <tr>
                            <td>head@head.com</td>
                            <td>head</td>
                        </tr>
                        <tr>
                            <td>manager@manager.com</td>
                            <td>manager</td>
                        </tr>
                        <tr>
                            <td>worker@worker.com</td>
                            <td>worker</td>
                        </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
