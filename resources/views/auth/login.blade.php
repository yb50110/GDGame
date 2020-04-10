@extends('layouts.app')

@section('content')
    <div class="container-login">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <input id="username" type="username" placeholder="username"
                   class="form-control" name="username"
                   value="{{ old('username') }}" required autocomplete="username" autofocus>

            <input id="password" type="password" placeholder="password"
                   class="form-control" name="password" required
                   autocomplete="current-password">

            <button type="submit" class="btn btn-primary">
                <p>{{ __('Login') }}</p>
            </button>
        </form>
    </div>
@endsection
