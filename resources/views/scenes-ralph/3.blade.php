@extends('layouts.scene')

@section('image')
    <img src="/images/0-placeholder.jpg">
@endsection

@section('prompt')
    You wake up and are wondering what to do...
@endsection

@section('options')
    <a href="{{ route('scene.decision', ['session_id' => $session_id, 'scene_id' => 4, 'decision_id' => 'A', 'option' =>1]) }}">Approach Piggy</a>
    <br>
    <a href="{{ route('scene.decision', ['session_id' => $session_id, 'scene_id' => 5, 'decision_id' => 'A', 'option' => 0]) }}">Approach <span class="player-name">{{ $other_player->name }}</span></a>
@endsection
