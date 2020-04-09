@extends('layouts.app')

@section('content')

    <div class="container-welcome">
        <div class="title">
            Welcome
        </div>
        <a href="{{ route('login') }}">Login to continue</a>
    </div>

@endsection
