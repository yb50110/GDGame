@extends('layouts.app')

@section('content')

    <div class="container-session">

        <h1>Waiting for more players...</h1>
{{--        todo: get number of players.... check session_user table for how many users for this session--}}
        <p>This session id is</p>
        <div class="session-id">{{ $session->id }}</div>



    </div>

@endsection
