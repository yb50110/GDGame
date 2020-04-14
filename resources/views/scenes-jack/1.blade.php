@extends('layouts.scene')

@section('image')

@endsection

@section('prompt')
    JACK:
    You are coming back home from a scouts camp. You and the other kids are riding on a plane.
@endsection

@section('options')
    <a href="{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 2]) }}">next</a>
@endsection
