@extends('layouts.scene')

@section('image')
    <img src="/images/0-placeholder.jpg">
@endsection

@section('prompt')
    ... but you fail
    <br>
    <br>
    Waiting for {{ $other_player }} to make decision...
@endsection

@section('options')
    <script>
        setInterval(function() {
            $.ajax({
                type: "GET",
                url: "{{ route('session.decision_check', ['session_id' => $session_id, 'decision_id' => 'D']) }}",
                dataType: 'text',
                data: {'session_id':'{{ $session_id }}', 'decision_id':'D'},
                cache: false,
                success: function (data) {
                    console.log(data);
                    if (data === '0') {
                        // will lead to decision M

                        //--------------------------------------------------------
                        $.ajax({
                            type: "GET",
                            url: "{{ route('session.decision_check', ['session_id' => $session_id, 'decision_id' => 'M']) }}",
                            dataType: 'text',
                            data: {'session_id':'{{ $session_id }}', 'decision_id':'M'},
                            cache: false,
                            success: function (data) {
                                if (data === '0') {
                                    // ralph is NOT making fire
                                    window.location.href = "{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 46]) }}";
                                } else if (data === '1') {
                                    // ralph is going to make fire, so wait for that

                                    //--------------------------------------------------------
                                    $.ajax({
                                        type: "GET",
                                        url: "{{ route('session.decision_check', ['session_id' => $session_id, 'decision_id' => 'FIRE']) }}",
                                        dataType: 'text',
                                        data: {'session_id':'{{ $session_id }}', 'decision_id':'FIRE'},
                                        cache: false,
                                        success: function (data) {
                                            if (data === '1') {
                                                // there is fire
                                                window.location.href = "{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 45]) }}";
                                            } else {
                                                // no fire
                                                window.location.href = "{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 46]) }}";
                                            }
                                        },
                                        error : function (data) {
                                            console.log('error');
                                        }
                                    });
                                    //--------------------------------------------------------

                                }
                            },
                            error: function (data) {
                                console.log('error');
                            }
                        });
                        //--------------------------------------------------------

                    } else if (data === '1') {
                        window.location.href = "{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 46]) }}";
                    }
                },
                error: function (data) {
                    console.log('error');
                }
            });
        }, 500);
    </script>
@endsection
