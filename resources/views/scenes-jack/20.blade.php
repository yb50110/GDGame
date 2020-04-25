@extends('layouts.scene')

@section('image')
    <img src="/images/0-placeholder.jpg">
@endsection

@section('prompt')
    <span class="player-name">{{ $other_player->name }}</span> splits the group into two.
    <br>
    <span class="player-name">{{ $other_player->name }}</span> asks what group you want to join...
@endsection

@section('options')
    <a href="{{ route('scene.decision', ['session_id' => $session_id, 'scene_id' => 21, 'decision_id' => 'H', 'option' =>1]) }}">Hunting in the jungle</a>
    <br>
    <a href="{{ route('scene.decision', ['session_id' => $session_id, 'scene_id' => 22, 'decision_id' => 'H', 'option' => 0]) }}">Fishing</a>
@endsection
