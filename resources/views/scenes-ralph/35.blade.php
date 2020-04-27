@extends('layouts.scene')

@section('image')
    <img src="/images/19-ralph-fire.jpg">
@endsection

@section('prompt')
   <span class="player-name">{{ $other_player->name }}</span> takes the criticism and stays quiet.
    <br>
    You suggest to make a fire first.
@endsection

@section('options')
    <a href="{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 38]) }}">next</a>
@endsection
