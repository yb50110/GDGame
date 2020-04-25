@extends('layouts.scene')

@section('image')
    <img src="/images/0-placeholder.jpg">
@endsection

@section('prompt')
    You criticizes <span class="player-name">{{ $other_player->name }}</span>.
    <br>
    There seem to be some tension...
@endsection

@section('options')
    <a href="{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 32]) }}">next</a>
@endsection
