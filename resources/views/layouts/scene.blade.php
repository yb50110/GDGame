@extends('layouts.app')

@section('content')

    <div class="container-scene">
        @yield('image')

        <p>@yield('prompt')</p>

        @yield('options')
    </div>

@endsection
