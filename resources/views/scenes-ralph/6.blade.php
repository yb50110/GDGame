@extends('layouts.scene')

@section('image')
    <img src="/images/0-hourglass.jpg">
@endsection

@section('prompt')
    waiting for {{ $other_player }} to make a decision...
@endsection

@section('options')

    <script>
        // ajax call to check if a decision has been made

        setInterval(function() {
            $.ajax({
                type: "GET",
                url: "{{ route('session.decision_check', ['session_id' => $session_id, 'decision_id' => 'B']) }}",
                dataType: 'text',
                data: {'session_id':'{{ $session_id }}', 'decision_id':'B'},
                cache: false,
                success: function (data) {
                    if (data === '0') {
                        // jack declines
                        window.location.href = "{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 8]) }}";
                    } else if (data === '1') {
                        // jack accepts
                        window.location.href = "{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 7]) }}";
                    }
                },
                error: function (data) {
                    console.log('error');
                }
            });
        }, 500);

    </script>

@endsection
