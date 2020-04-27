@extends('layouts.scene')

@section('image')
    <img src="/images/19-ralp-fire.jpg">
@endsection

@section('prompt')
    <span class="player-name">{{ $other_player->name }}</span> suggests to make a fire first.
@endsection

@section('options')
    <a href="{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 34]) }}">next</a>
@endsection
