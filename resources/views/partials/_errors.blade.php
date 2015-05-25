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