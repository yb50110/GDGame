@extends('layouts.scene')

@section('image')
    <img src="/images/10-ralph-jack-choice.jpg">
@endsection

@section('prompt')
    {{ $other_player }} asks if you want to go into the jungle...
@endsection

@section('options')
    <a href="{{ route('scene.decision', ['session_id' => $session_id, 'scene_id' => 41, 'decision_id' => 'L', 'option' =>1]) }}">Stay near shore</a>
    <br>
    <a href="{{ route('scene.decision', ['session_id' => $session_id, 'scene_id' => 42, 'decision_id' => 'L', 'option' => 0]) }}">Follow {{ $other_player }} to the jungle</a>
@endsection
