@extends('layouts.scene')

@section('image')
    <img src="/images/0-placeholder.jpg">
@endsection

@section('prompt')
    Waiting for {{ $other_player }} to make a decision...
@endsection

@section('options')
    <script>
        setInterval(function() {
            $.ajax({
                type: "GET",
                url: "{{ route('session.decision_check', ['session_id' => $session_id, 'decision_id' => 'I']) }}",
                dataType: 'text',
                data: {'session_id':'{{ $session_id }}', 'decision_id':'I'},
                cache: false,
                success: function (data) {
                    if (data === '0') {
                        // ralph agrees
                        window.location.href = "{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 29]) }}";
                    } else if (data === '1') {
                        // ralph suggests starting fire
                        window.location.href = "{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 28]) }}";
                    }
                },
                error: function (data) {
                    console.log('error');
                }
            });
        }, 500);
    </script>
@endsection
