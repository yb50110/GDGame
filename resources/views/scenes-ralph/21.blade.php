@extends('layouts.scene')

@section('image')
    <img src="/images/0-placeholder.jpg">
@endsection

@section('prompt')
    You split the group into two: hunting in the jungle or fishing.
    <br>
    You ask <span class="player-name">{{ $other_player->name }}</span> what group<span class="player-name">{{ $other_player->name }}</span> would like to join.
@endsection

@section('options')
    <a href="{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 22]) }}">next</a>
@endsection
