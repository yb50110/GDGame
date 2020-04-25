@extends('layouts.scene')

@section('image')
    <img src="/images/0-placeholder.jpg">
@endsection

@section('prompt')
    You continue to dry your shirt.
    <br>
    <br>
    Waiting on <span class="player-name">{{ $other_player->name }}</span> to make a decision...
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
                        // ralph explore alone
                        window.location.href = "{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 52]) }}";
                    } else if (data === '1') {
                        // ralph approaches piggy
                        window.location.href = "{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 51]) }}";
                    }
                },
                error: function (data) {
                    console.log('error');
                }
            });
        }, 500);
    </script>
@endsection
