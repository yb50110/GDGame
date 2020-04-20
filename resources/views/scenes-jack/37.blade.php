@extends('layouts.scene')

@section('image')
    <img src="/images/0-placeholder.jpg">
@endsection

@section('prompt')
    {{ $other_player }} decides to stay near the shore.
    <br>
    You head to the jungle alone.
@endsection

@section('options')
    <a href="{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 39]) }}">next</a>
@endsection
