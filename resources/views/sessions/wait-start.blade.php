@extends('layouts.app')

@section('content')

    <div class="container-session">
        <img src="/images/0-hourglass.jpg">
        <h1>Please wait for host to start...</h1>

        <script>
            setInterval(function() {
                $.ajax({
                    type: "GET",
                    url: "start/check/{{ $session_id }}",
                    dataType: 'json',
                    data: 'id={{ $session_id }}',
                    cache: false,
                    success: function (data) {
                        console.log(data);
                        if (data) {
                            // the session started
                            // redirect to set name page
                            window.location.href = "{{ route('session.name', ['session_id' => $session_id]) }}";
                        } else {
                            // session not started yet
                        }
                    },
                    error: function (data) {
                        console.log('error');
                    }

                });
            }, 500);
        </script>

    </div>

@endsection
