@extends('layouts.scene')

@section('image')
    <img src="/images/0-placeholder.jpg">
@endsection

@section('prompt')
    You wonder what to do with the fire...
@endsection

@section('options')
    <a href="{{ route('scene.decision', ['session_id' => $session_id, 'scene_id' => 0, 'decision_id' => 'N', 'option' =>1]) }}">Keep the fire going</a>
    <br>
    <a href="{{ route('scene.decision', ['session_id' => $session_id, 'scene_id' => 0, 'decision_id' => 'N', 'option' => 0]) }}">Let it die</a>
@endsection
