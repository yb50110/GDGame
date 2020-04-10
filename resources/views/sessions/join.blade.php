@extends('layouts.app')

@section('content')

    <div class="container-session">
        <h1>Enter session id of room</h1>

        <form method="POST" action="{{ route('session.join') }}">
            @csrf

            <input id="session_id" type="number" placeholder="session id"
                   class="form-control" name="session_id"
                   required autofocus>

            <button type="submit" class="btn btn-primary">
                <p>Join</p>
            </button>
        </form>

    </div>

@endsection
