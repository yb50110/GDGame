@extends('layouts.scene')

@section('image')
    <img src="/images/0-placeholder.jpg">
@endsection

@section('prompt')
    The rest asks you what to do now...
@endsection

@section('options')
    <a href="{{ route('scene.decision', ['session_id' => $session_id, 'scene_id' => 0, 'decision_id' => 'K', 'option' =>1]) }}">make a fire</a>
    <br>
    <a href="{{ route('scene.decision', ['session_id' => $session_id, 'scene_id' => 0, 'decision_id' => 'K', 'option' => 0]) }}">go find food</a>
@endsection
