@extends('layouts.scene')

@section('image')
    <img src="/images/8-piggy-conch.jpg">
@endsection

@section('prompt')
    Piggy takes the conch and say they should start a fire.
@endsection

@section('options')
    <a href="{{ route('scene.decision', ['session_id' => $session_id, 'scene_id' => 19, 'decision_id' => 'G', 'option' =>1]) }}">Agree</a>
    <br>
    <a href="{{ route('scene.decision', ['session_id' => $session_id, 'scene_id' => 20, 'decision_id' => 'G', 'option' => 0]) }}">Suggest finding food</a>
@endsection
