@extends('layouts.app')

@section('content')

    <div class="container-session">
        <h1>You are unable to join :(</h1>
    </div>
    <br>

    <div class="container-home">
        <!-- create session -->
        <button><a href="{{ route('session.new') }}" class="">Create new session</a></button>

        <!-- join session -->
        <button><a href="{{ route('session.join_form') }}" class="">Join another session</a></button>
    </div>

@endsection
