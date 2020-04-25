@extends('layouts.scene')

@section('image')
    <img src="/images/0-hourglass.jpg">
@endsection

@section('prompt')
    Waiting for <span class="player-name">{{ $other_player->name }}</span> to make a decision...
@endsection

@section('options')
    <script>
        setInterval(function() {
            $.ajax({
                type: "GET",
                url: "{{ route('session.decision_check', ['session_id' => $session_id, 'decision_id' => 'S']) }}",
                dataType: 'text',
                data: {'session_id':'{{ $session_id }}', 'decision_id':'S'},
                cache: false,
                success: function (data) {
                    if (data === '0') {
                        // jack explores alone so the rest is still there
                        window.location.href = "{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 54]) }}";
                    } else if (data === '1') {
                        // no one is there anymore
                        window.location.href = "{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 55]) }}";
                    }
                },
                error: function (data) {
                    console.log('error');
                }
            });
        }, 500);
    </script>
@endsection
