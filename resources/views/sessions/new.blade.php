@extends('layouts.app')

@section('content')

    <div class="container-session">

        <h1>Waiting for {{ 2 - $user_count }} more player(s)...</h1>
        <p>This session id is</p>
        <div class="session-id">{{ $session->id }}</div>

    </div>

@endsection
