@extends('layouts.scene')

@section('image')
    <img src="/images/0-placeholder.jpg">
@endsection

@section('prompt')
   <span class="player-name">{{ $other_player->name }}</span> suggests starting fire but you argue back.
    <br>
   <span class="player-name">{{ $other_player->name }}</span> is overruled.
@endsection

@section('options')
    <a href="{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 29]) }}">next</a>
@endsection
