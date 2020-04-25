@extends('layouts.scene')

@section('image')
    <img src="/images/0-placeholder.jpg">
@endsection

@section('prompt')
   <span class="player-name">{{ $other_player->name }}</span> argues back and an argument begins but <span class="player-name">{{ $other_player->name }}</span> soon realizes s/he is outnumbered.
@endsection

@section('options')
    <a href="{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 36]) }}">next</a>
@endsection
