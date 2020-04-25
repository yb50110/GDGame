@extends('layouts.scene')

@section('image')
    <img src="/images/0-placeholder.jpg">
@endsection

@section('prompt')
   <span class="player-name">{{ $other_player->name }}</span> says that Piggy's idea is crap.
@endsection

@section('options')
    <a href="{{ route('scene.decision', ['session_id' => $session_id, 'scene_id' => 27, 'decision_id' => 'F', 'option' =>1]) }}">Stay quiet</a>
    <br>
    <a href="{{ route('scene.decision', ['session_id' => $session_id, 'scene_id' => 28, 'decision_id' => 'F', 'option' => 0]) }}">Criticize <span class="player-name">{{ $other_player->name }}</span></a>
@endsection
