@extends('layouts.scene')

@section('image')
    <img src="/images/0-placeholder.jpg">
@endsection

@section('prompt')
    You see some animal footprints on the ground...
@endsection

@section('options')
    <a href="{{ route('scene.decision', ['session_id' => $session_id, 'scene_id' => 42, 'decision_id' => 'O', 'option' =>1]) }}">Ignore it</a>
    <br>
    <a href="{{ route('scene.decision', ['session_id' => $session_id, 'scene_id' => 41, 'decision_id' => 'O', 'option' => 0]) }}">Follow it</a>
@endsection
