@extends('layouts.scene')

@section('image')

@endsection

@section('prompt')
    RALPH:
    You approach {{ $other_player }} and ask to explore the island together.
@endsection

@section('options')
    <a href="{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 6]) }}">next</a>
@endsection
