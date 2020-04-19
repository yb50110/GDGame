@extends('layouts.scene')

@section('image')
    <img src="/images/8-piggy-conch.jpg">
@endsection

@section('prompt')
    JACK:
    Piggy takes the conch and say they should start a fire.
@endsection

@section('options')
    <a href="{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 17]) }}">next</a>
@endsection
