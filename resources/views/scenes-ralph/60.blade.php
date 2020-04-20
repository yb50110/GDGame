@extends('layouts.scene')

@section('image')
    <img src="/images/0-placeholder.jpg">
@endsection

@section('prompt')
    You notice {{ $other_player }} is missing...
@endsection

@section('options')
    <a href="{{ route('scene.decision', ['session_id' => $session_id, 'scene_id' => x, 'decision_id' => 'R', 'option' =>1]) }}">Let him be</a>
    <br>
    <a href="{{ route('scene.decision', ['session_id' => $session_id, 'scene_id' => x, 'decision_id' => 'R', 'option' => 0]) }}">Send someone to look for him</a>
@endsection
