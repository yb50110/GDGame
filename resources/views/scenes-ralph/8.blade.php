@extends('layouts.scene')

@section('image')
    <img src="/images/0-placeholder.jpg">
@endsection

@section('prompt')
    {{ $other_player }} declines.
    <br>
    You wonder what to do now...
@endsection

@section('options')
    <a href="{{ route('scene.decision', ['session_id' => $session_id, 'scene_id' => 4, 'decision_id' => 'S', 'option' =>1]) }}">Approach Piggy</a>
    <br>
    <a href="{{ route('scene.decision', ['session_id' => $session_id, 'scene_id' => 43, 'decision_id' => 'S', 'option' => 0]) }}">Explore island alone</a>
@endsection
