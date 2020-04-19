@extends('layouts.scene')

@section('image')
    <img src="/images/0-placeholder.jpg">
@endsection

@section('prompt')
    JACK:
    {{ $other_player }} suggests starting fire but you argue back.
    <br>
    {{ $other_player }} is overruled.
@endsection

@section('options')
    <a href="{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 29]) }}">next</a>
@endsection
