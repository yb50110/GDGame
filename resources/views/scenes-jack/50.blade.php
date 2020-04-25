@extends('layouts.scene')

@section('image')
    <img src="/images/0-placeholder.jpg">
@endsection

@section('prompt')
   <span class="player-name">{{ $other_player->name }}</span> explains to you that he saw a boat off the distance in the water but he took too long to start the fire, and now the boat is gone.
@endsection

@section('options')
    <a href="{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 0]) }}">next</a>
@endsection
