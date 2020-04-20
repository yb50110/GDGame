@extends('layouts.scene')

@section('image')
    <img src="/images/0-placeholder.jpg">
@endsection

@section('prompt')
    ... but you fail
@endsection

@section('options')
    if ralph M is 1:
    wait for fire, show 45
    <a href="{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 45]) }}">next</a>
    else, show 46
    <a href="{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 46]) }}">next</a>
@endsection
