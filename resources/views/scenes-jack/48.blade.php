@extends('layouts.scene')

@section('image')
    <img src="/images/15-jack-cave.jpg">
@endsection

@section('prompt')
    The prints lead to a cave!
@endsection

@section('options')
    <a href="{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 49]) }}">next</a>
@endsection
