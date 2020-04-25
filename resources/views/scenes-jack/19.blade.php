@extends('layouts.scene')

@section('image')
    <img src="/images/0-placeholder.jpg">
@endsection

@section('prompt')
    <span class="player-name">{{ $other_player->name }}</span> suggests finding food.
    <br>
    You agree to help finding food
@endsection

@section('options')
    <a href="{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 20]) }}">next</a>
@endsection
