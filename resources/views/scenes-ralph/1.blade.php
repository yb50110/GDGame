@extends('layouts.scene')

@section('image')
    <img src="/images/1-plane.jpg">
@endsection

@section('prompt')
    RALPH:
    You are coming back home from a scouts camp. You and the other kids are riding on a plane.
@endsection

@section('options')
    <a href="{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 2]) }}">next</a>
@endsection
