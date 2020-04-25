@extends('layouts.app')

@section('content')

    <div class="container-welcome">
        <h1 class="title">
            Welcome
        </h1>
        <h2>Can you play against the computer to survive without anyone dying?</h2>
        <button><a href="{{ route('login') }}">Login to continue</a></button>
    </div>

@endsection
