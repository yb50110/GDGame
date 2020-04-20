@extends('layouts.scene')

@section('image')
    <img src="/images/0-placeholder.jpg">
@endsection

@section('prompt')
    {{ $other_player }} argues back and an argument begins but {{ $other_player }} soon realizes s/he is outnumbered.
@endsection

@section('options')
    <a href="{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 36]) }}">next</a>
@endsection
