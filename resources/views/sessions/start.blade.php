@extends('layouts.app')

@section('content')

    <div class="container-session">
        <img src="/images/0-placeholder.jpg">
        <h1>Session has enough players!</h1>
        <a href="{{ route('session.start_update', ['id' => $session_id]) }}">START</a>
    </div>

@endsection
