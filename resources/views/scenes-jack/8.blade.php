@extends('layouts.scene')

@section('image')
    <img src="/images/5-ralph-jack-conch.jpg">
@endsection

@section('prompt')
    JACK:
    You two discover a conch on the sand.
    <br>
    <br>
    Waiting for {{ $other_player }} to make a decision...
@endsection

@section('options')
    <script>
        // ajax call to check if a decision has been made

        setInterval(function() {
            $.ajax({
                type: "GET",
                url: "{{ route('session.decision_check', ['session_id' => $session_id, 'decision_id' => 'C']) }}",
                dataType: 'text',
                data: {'session_id':'{{ $session_id }}', 'decision_id':'C'},
                cache: false,
                success: function (data) {
                    if (data === '0') {
                        // ralph ignored it
                        window.location.href = "{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 10]) }}";
                    } else if (data === '1') {
                        // ralph picked it up
                        window.location.href = "{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 9]) }}";
                    }
                },
                error: function (data) {
                    console.log('error');
                }
            });
        }, 500);

    </script>
@endsection
