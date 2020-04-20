@extends('layouts.scene')

@section('image')
    <img src="/images/0-placeholder.jpg">
@endsection

@section('prompt')
    Simone chimes in supports Piggy's idea.
    <br>
    Others nod.
@endsection

@section('options')
    <a href="{{ route('scene.decision', ['session_id' => $session_id, 'scene_id' => 31, 'decision_id' => 'J', 'option' =>1]) }}">Argue back</a>
    <br>
    <a href="{{ route('scene.decision', ['session_id' => $session_id, 'scene_id' => 32, 'decision_id' => 'J', 'option' => 0]) }}">Take the criticism</a>
@endsection
