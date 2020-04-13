@extends('layouts.app')

@section('content')

    <div class="container-scene">
        @yield('image')

        @yield('prompt')

        @yield('options')
    </div>

@endsection
