@extends('layouts.scene')

@section('image')
    <img src="/images/0-placeholder.jpg">
@endsection

@section('prompt')
    You notice <span class="player-name">{{ $other_player->name }}</span> picking it up.
@endsection

@section('options')
    <a href="{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 11]) }}">next</a>
@endsection
