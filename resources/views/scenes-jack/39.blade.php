@extends('layouts.scene')

@section('image')
    <img src="/images/13-jack-stick.jpg">
@endsection

@section('prompt')
    You pick up a strong wooden stick along the way.
@endsection

@section('options')
    <a href="{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 40]) }}">next</a>
@endsection
