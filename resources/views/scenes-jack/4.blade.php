@extends('layouts.scene')

@section('image')

@endsection

@section('prompt')
    JACK:
    waiting for {{ $other_player }} to make a decision...
@endsection

@section('options')

    <script>
        // ajax call to check if a decision has been made

        setInterval(function() {
            $.ajax({
                type: "GET",
                url: "/session/{{ $session_id }}/A/check",
                dataType: 'json',
                data: {'session_id':'{{ $session_id }}', 'decision_id':'A'},
                cache: false,
                success: function (data) {
                    console.log(data);
                    if (data) {
                        console.log('yoo');
                    } else {
                        // session not started yet
                    }
                },
                error: function (data) {
                    console.log(data);
                }
            });
        }, 500);

    </script>

@endsection
