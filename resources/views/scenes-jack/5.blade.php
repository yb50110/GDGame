@extends('layouts.scene')

@section('image')
    <img src="/images/3-ralph-jack.jpg">
@endsection

@section('prompt')
    JACK:
    {{ $other_player }} approaches you and asks if you want to explore the island together.
@endsection

@section('options')
    <a href="{{ route('scene.decision', ['session_id' => $session_id, 'scene_id' => 6, 'decision_id' => 'B', 'option' =>1]) }}">Sure, why not</a>
    <br>
    <a href="{{ route('scene.decision', ['session_id' => $session_id, 'scene_id' => 7, 'decision_id' => 'B', 'option' => 0]) }}">You decline</a>
@endsection
