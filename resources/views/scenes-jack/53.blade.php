@extends('layouts.scene')

@section('image')
    <img src="/images/0-placeholder.jpg">
@endsection

@section('prompt')
    You approach the other kids.
    <br>
    They ask you what they should do...
@endsection

@section('options')
    <a href="{{ route('scene.decision', ['session_id' => $session_id, 'scene_id' => 54, 'decision_id' => 'T', 'option' =>1]) }}">Explore the shore</a>
    <br>
    <a href="{{ route('scene.decision', ['session_id' => $session_id, 'scene_id' => 55, 'decision_id' => 'T', 'option' => 0]) }}">Explore the jungle</a>
@endsection
