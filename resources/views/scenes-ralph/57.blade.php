@extends('layouts.scene')

@section('image')
    <img src="/images/17-ralph-piggy.jpg">
@endsection

@section('prompt')
    Once enough wood is collected, you ask Piggy you can borrow his glasses to use to start the fire.
@endsection

@section('options')
    <a href="{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 59]) }}">next</a>
@endsection
