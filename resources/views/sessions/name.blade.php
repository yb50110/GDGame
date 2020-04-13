@extends('layouts.app')

@section('content')

<div class="container-session">
    <h1>Please set your name for this session</h1>

    <form method="POST" action="{{ route('session.name_update', ['session_id' => $session_id]) }}">
        @csrf

        <input id="session_name" type="text" placeholder="name"
               class="form-control" name="session_name"
               required autofocus>

        <button type="submit" class="btn btn-primary">
            <p>Next</p>
        </button>
    </form>
</div>

@endsection
