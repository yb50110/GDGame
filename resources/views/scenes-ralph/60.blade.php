@extends('layouts.scene')

@section('image')
    <img src="/images/0-placeholder.jpg">
@endsection

@section('prompt')
    You notice <span class="player-name">{{ $other_player->name }}</span> is missing...
@endsection

@section('options')
    <a href="{{ route('scene.decision', ['session_id' => $session_id, 'scene_id' => 0, 'decision_id' => 'R', 'option' =>1]) }}">Let him be</a>
    <br>
    <a href="{{ route('scene.decision', ['session_id' => $session_id, 'scene_id' => 62, 'decision_id' => 'R', 'option' => 0]) }}">Send someone to look for him</a>
@endsection
