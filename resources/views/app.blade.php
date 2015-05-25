<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Enterprise Portal Prototype</title>

    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
</head>
<body>
@include('partials._nav')

<div class="container">
    <div class="col-md-8 col-md-offset-2">
        @include('partials._errors')
        @yield('content')
        </div>
    </div>

<script src="{{ asset('js/all.js') }}"></script>
@yield('footer')
</body>
</html>
