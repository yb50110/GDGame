@extends('layouts.scene')

@section('image')
    <img src="/images/14-jack-rabbit.jpg">
@endsection

@section('prompt')
    You ignore the prints and continue walking.
    <br>
    You discover a rabbit resting between a bush!
@endsection

@section('options')
    <a href="{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 43]) }}">next</a>
@endsection
