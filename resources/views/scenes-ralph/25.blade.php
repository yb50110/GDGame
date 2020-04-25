@extends('layouts.scene')

@section('image')
    <img src="/images/0-placeholder.jpg">
@endsection

@section('prompt')
    You and <span class="player-name">{{ $other_player->name }}</span> separate to different areas of the shore.
@endsection

@section('options')
    <a href="{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 0]) }}">next</a>
@endsection
