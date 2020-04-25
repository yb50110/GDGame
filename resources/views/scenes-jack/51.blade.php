@extends('layouts.scene')

@section('image')
    <img src="/images/0-placeholder.jpg">
@endsection

@section('prompt')
    You notice <span class="player-name">{{ $other_player->name }}</span> approach Piggy and the two of them begin exploring the island.
@endsection

@section('options')
    <a href="{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 53]) }}">next</a>
@endsection
