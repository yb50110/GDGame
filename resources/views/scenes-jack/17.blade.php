@extends('layouts.scene')

@section('image')
    <img src="/images/0-hourglass.jpg">
@endsection

@section('prompt')
    Waiting for {{ $other_player }} to make a decision...
@endsection

@section('options')
    <script>
        setInterval(function() {
            $.ajax({
                type: "GET",
                url: "{{ route('session.decision_check', ['session_id' => $session_id, 'decision_id' => 'G']) }}",
                dataType: 'text',
                data: {'session_id':'{{ $session_id }}', 'decision_id':'G'},
                cache: false,
                success: function (data) {
                    if (data === '0') {
                        // ralph suggested finding food
                        window.location.href = "{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 19]) }}";
                    } else if (data === '1') {
                        // ralph agrees
                        window.location.href = "{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 18]) }}";
                    }
                },
                error: function (data) {
                    console.log('error');
                }
            });
        }, 500);
    </script>
@endsection
