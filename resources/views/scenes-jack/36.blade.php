@extends('layouts.scene')

@section('image')
    <img src="/images/0-placeholder.jpg">
@endsection

@section('prompt')
    Waiting for <span class="player-name">{{ $other_player->name }}</span> to make a decision...
@endsection

@section('options')
    <script>
        setInterval(function() {
            $.ajax({
                type: "GET",
                url: "{{ route('session.decision_check', ['session_id' => $session_id, 'decision_id' => 'L']) }}",
                dataType: 'text',
                data: {'session_id':'{{ $session_id }}', 'decision_id':'L'},
                cache: false,
                success: function (data) {
                    if (data === '0') {
                        // ralph goes to jungle with you
                        window.location.href = "{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 38]) }}";
                    } else if (data === '1') {
                        // ralph decides to stay near shore
                        window.location.href = "{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 37]) }}";
                    }
                },
                error: function (data) {
                    console.log('error');
                }
            });
        }, 500);
    </script>
@endsection
