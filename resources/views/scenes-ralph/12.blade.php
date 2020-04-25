@extends('layouts.scene')

@section('image')
    <img src="/images/6-ralph-jack-question.jpg">
@endsection

@section('prompt')
    You ask <span class="player-name">{{ $other_player->name }}</span> what we can do with it.
@endsection

@section('options')
    <a href="{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 65]) }}">next</a>
@endsection
