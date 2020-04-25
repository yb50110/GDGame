@extends('layouts.scene')

@section('image')
    <img src="/images/0-placeholder.jpg">
@endsection

@section('prompt')
    You suggest to <span class="player-name">{{ $other_player->name }}</span> finding a stick in case something pops out of the bush.
@endsection

@section('options')
    <a href="{{ route('scene.decision', ['session_id' => $session_id, 'scene_id' => 0, 'decision_id' => 'U', 'option' =>1]) }}">Long stick</a>
    <br>
    <a href="{{ route('scene.decision', ['session_id' => $session_id, 'scene_id' => 0, 'decision_id' => 'U', 'option' => 0]) }}">Short stick</a>
@endsection
