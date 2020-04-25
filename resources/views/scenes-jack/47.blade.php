@extends('layouts.scene')

@section('image')
    <img src="/images/0-placeholder.jpg">
@endsection

@section('prompt')
    You return to the shore and find <span class="player-name">{{ $other_player->name }}</span>.
@endsection

@section('options')
    <a href="{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 50]) }}">next</a>
@endsection
