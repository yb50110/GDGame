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
                url: "{{ route('session.decision_check', ['session_id' => $session_id, 'decision_id' => 'H']) }}",
                dataType: 'text',
                data: {'session_id':'{{ $session_id }}', 'decision_id':'H'},
                cache: false,
                success: function (data) {
                    if (data === '0') {
                        // jack chooses fishing
                        window.location.href = "{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 24]) }}";
                    } else if (data === '1') {
                        // jack choosing hunting
                        window.location.href = "{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 23]) }}";
                    }
                },
                error: function (data) {
                    console.log('error');
                }
            });
        }, 500);
    </script>
@endsection
