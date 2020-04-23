@extends('layouts.app')

@section('content')

    <div class="container-session">
        @if($msg ?? '')
            <h2 class="error">{{ $msg ?? '' }}</h2>
        @endif

        <h1>Please select a character</h1>

        <form method="POST" action="{{ route('session.role_update', ['session_id' => $session_id]) }}">
            @csrf

            <div class="role-options">
                @foreach ($roles as $role)
                    <label>
                        <input id="role-{{ $role->id }}" type="radio" name="role" value="{{ $role->id }}" required>
                        <img src="{{ $role->default_image_link }}">
                    </label>
                @endforeach
            </div>

            <button type="submit" class="btn btn-primary">
                <p>Next</p>
            </button>
        </form>
    </div>

    <script>
        $(document).ready(function() {
            setInterval(function() {
                $.ajax({
                    type: "GET",
                    url: "{{ route('session.role_check', ['session_id' => $session_id]) }}",
                    dataType: 'text',
                    data: 'session_id={{ $session_id }}',
                    cache: false,
                    success: function (data) {
                        if (data !== 'false') {
                            // NOT false means everyone has selected
                            // for some reason, [2] is being returned as string, so length is 3...???
                            document.getElementById('role-' + data[1]).disabled = true;
                        }
                    },
                    error: function (data) {
                        console.log('error');
                    }
                })
            }, 500);
        });
    </script>

@endsection
