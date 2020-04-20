@extends('layouts.scene')

@section('image')
    <img src="/images/0-placeholder.jpg">
@endsection

@section('prompt')
    You hear some noise coming from inside the cave...
@endsection

@section('options')
    <a href="{{ route('scene.decision', ['session_id' => $session_id, 'scene_id' => x, 'decision_id' => 'P', 'option' =>1]) }}">Keep walking</a>
    <br>
    <a href="{{ route('scene.decision', ['session_id' => $session_id, 'scene_id' => x, 'decision_id' => 'P', 'option' => 0]) }}">Enter the cave</a>
@endsection
