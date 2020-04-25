@extends('layouts.scene')

@section('image')
    <img src="/images/2-plane-crash.jpg">
@endsection

@section('prompt')
    The plane gets caught in a storm! You hear a loud crashing noise and you black out.
@endsection

@section('options')
    <a href="{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 3]) }}">next</a>

    <audio id="sound-planecrash" src="{{ asset('sound/planecrash.m4a') }}" type="audio/m4a" autostart="false"></audio>
    <script>
        $(document).ready(function() {
            document.getElementById('sound-planecrash').play();
        });
    </script>
@endsection
