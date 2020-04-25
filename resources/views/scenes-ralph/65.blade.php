@extends('layouts.scene')

@section('image')
    <img src="/images/0-hourglass.jpg">
@endsection

@section('prompt')
    Waiting for <span class="player-name">{{ $other_player->name }}</span> to make a decision...
@endsection

@section('options')
    <script>
        // ajax call to check if a decision has been made
        setInterval(function() {
            $.ajax({
                type: "GET",
                url: "{{ route('session.decision_check', ['session_id' => $session_id, 'decision_id' => 'D']) }}",
                dataType: 'text',
                data: {'session_id':'{{ $session_id }}', 'decision_id':'D'},
                cache: false,
                success: function (data) {
                    if (data === '0') {
                        // jack says that it's just a shell :(
                        window.location.href = "{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 11]) }}";
                    } else if (data === '1') {
                        // jack suggest asking the others
                        window.location.href = "{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 13]) }}";
                    }
                },
                error: function (data) {
                    console.log('error');
                }
            });
        }, 500);
    </script>
@endsection
