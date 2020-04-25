@extends('layouts.scene')

@section('image')
    <img src="/images/0-placeholder.jpg">
@endsection

@section('prompt')
   <span class="player-name">{{ $other_player->name }}</span> suggests calling the others and asking them too.
@endsection

@section('options')
    <a href="{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 14]) }}">next</a>
@endsection
