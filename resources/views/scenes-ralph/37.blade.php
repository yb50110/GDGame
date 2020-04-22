@extends('layouts.scene')

@section('image')
    <img src="/images/0-placeholder.jpg">
@endsection

@section('prompt')
    The rest asks you what to do now...
@endsection

@section('options')
    <a href="{{ route('scene.decision', ['session_id' => $session_id, 'scene_id' => 0, 'decision_id' => 'x', 'option' =>1]) }}">xxxx</a>
    <br>
    <a href="{{ route('scene.decision', ['session_id' => $session_id, 'scene_id' => 0, 'decision_id' => 'x', 'option' => 0]) }}">xxxx</a>
@endsection
