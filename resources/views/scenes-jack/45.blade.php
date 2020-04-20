@extends('layouts.scene')

@section('image')
    <img src="/images/0-placeholder.jpg">
@endsection

@section('prompt')
    You notice what looks like a fire smoke coming from shore!
@endsection

@section('options')
    <a href="{{ route('scene.decision', ['session_id' => $session_id, 'scene_id' => 47, 'decision_id' => 'Q', 'option' =>1]) }}">Return to shore</a>
    <br>
    <a href="{{ route('scene.decision', ['session_id' => $session_id, 'scene_id' => 46, 'decision_id' => 'Q', 'option' => 0]) }}">Ignore it</a>
@endsection
