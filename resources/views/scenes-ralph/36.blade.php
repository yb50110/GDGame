@extends('layouts.scene')

@section('image')
    <img src="/images/0-placeholder.jpg">
@endsection

@section('prompt')
   <span class="player-name">{{ $other_player->name }}</span> storms off to the jungle.
@endsection

@section('options')
    <a href="{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 37]) }}">next</a>
@endsection
