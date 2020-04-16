@extends('layouts.scene')

@section('image')
    <img src="/images/5-ralph-jack-conch.jpg">
@endsection

@section('prompt')
    You two discover a conch on the sand...
@endsection

@section('options')
    <a href="{{ route('scene.decision', ['session_id' => $session_id, 'scene_id' => 10, 'decision_id' => 'C', 'option' =>1]) }}">Pick it up</a>
    <br>
    <a href="{{ route('scene.decision', ['session_id' => $session_id, 'scene_id' => 11, 'decision_id' => 'C', 'option' => 0]) }}">Just ignore it</a>
@endsection
