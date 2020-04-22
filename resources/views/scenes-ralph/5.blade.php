@extends('layouts.scene')

@section('image')
    <img src="/images/3-ralph-jack.jpg">
@endsection

@section('prompt')
    You approach {{ $other_player }} and ask to explore the island together.
@endsection

@section('options')
    <a href="{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 6]) }}">next</a>
@endsection
