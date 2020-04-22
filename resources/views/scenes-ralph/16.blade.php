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
                url: "{{ route('session.decision_check', ['session_id' => $session_id, 'decision_id' => 'E']) }}",
                dataType: 'text',
                data: {'session_id':'{{ $session_id }}', 'decision_id':'E'},
                cache: false,
                success: function (data) {
                    if (data === '0') {
                        // jack said its crap
                        window.location.href = "{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 26]) }}";
                    } else if (data === '1') {
                        // jack accepts idea
                        window.location.href = "{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 17]) }}";
                    }
                },
                error: function (data) {
                    console.log('error');
                }
            });
        }, 500);
    </script>
@endsection
