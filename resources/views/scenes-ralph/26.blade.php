@extends('layouts.scene')

@section('image')
    <img src="/images/0-placeholder.jpg">
@endsection

@section('prompt')
    {{ $other_player }} says that Piggy's idea is crap.
@endsection

@section('options')
    <a href="{{ route('scene.decision', ['session_id' => $session_id, 'scene_id' => 27, 'decision_id' => 'F', 'option' =>1]) }}">Stay quiet</a>
    <br>
    <a href="{{ route('scene.decision', ['session_id' => $session_id, 'scene_id' => 28, 'decision_id' => 'F', 'option' => 0]) }}">Criticize {{ $other_player }}</a>
@endsection
