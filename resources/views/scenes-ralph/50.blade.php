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
                url: "{{ route('session.decision_check', ['session_id' => $session_id, 'decision_id' => 'O']) }}",
                dataType: 'text',
                data: {'session_id':'{{ $session_id }}', 'decision_id':'O'},
                cache: false,
                success: function (data) {
                    if (data === '0') {
                        // jack followed footprints
                        window.location.href = "{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 52]) }}";
                    } else if (data === '1') {
                        // jack ignored footprints
                        // keep checking jack's Q...

                        $.ajax({
                            type: "GET",
                            url: "{{ route('session.decision_check', ['session_id' => $session_id, 'decision_id' => 'Q']) }}",
                            dataType: 'text',
                            data: {'session_id':'{{ $session_id }}', 'decision_id':'Q'},
                            cache: false,
                            success: function (data) {
                                if (data === '0') {
                                    // jack ignores fire
                                    window.location.href = "{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 52]) }}";
                                } else if (data === '1') {
                                    // jack returns back to shore
                                    window.location.href = "{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 51]) }}";
                                }
                            },
                            error: function (data) {
                                console.log('error');
                            }
                        });

                    }
                },
                error: function (data) {
                    console.log('error');
                }
            });
        }, 500);
    </script>
@endsection
