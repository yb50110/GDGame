@extends('layouts.app')

@section('content')

    <div class="container-session">
        <h1>Please select a character</h1>

        <form method="POST" action="{{ route('session.role_update', ['session_id' => $session_id]) }}">
            @csrf

            <div class="role-options">
                @foreach ($roles as $role)
                    <label>
                        <input type="radio" name="role" value="{{ $role->id }}" required>
                        <img src="{{ $role->default_image_link }}">
                    </label>
                @endforeach
            </div>

            <button type="submit" class="btn btn-primary">
                <p>Next</p>
            </button>
        </form>
    </div>

@endsection
