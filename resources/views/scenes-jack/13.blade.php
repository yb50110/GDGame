@extends('layouts.scene')

@section('image')
    <img src="/images/0-placeholder.jpg">
@endsection

@section('prompt')
    JACK:
    Piggy suggests using it in meeting where only the person with it can speak.
@endsection

@section('options')
    <a href="{{ route('scene.decision', ['session_id' => $session_id, 'scene_id' => 14, 'decision_id' => 'E', 'option' =>1]) }}">Accept the idea</a>
    <br>
    <a href="{{ route('scene.decision', ['session_id' => $session_id, 'scene_id' => 15, 'decision_id' => 'E', 'option' => 0]) }}">Say its crap</a>
@endsection
