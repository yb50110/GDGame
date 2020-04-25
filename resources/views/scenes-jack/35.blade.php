@extends('layouts.scene')

@section('image')
    <img src="/images/10-ralph-jack-choice.jpg">
@endsection

@section('prompt')
    You ask <span class="player-name">{{ $other_player->name }}</span> if s/he want to go into the jungle...
@endsection

@section('options')
    <a href="{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 36]) }}">next</a>
@endsection
