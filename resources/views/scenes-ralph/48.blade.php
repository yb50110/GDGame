@extends('layouts.scene')

@section('image')
    <img src="/images/12-ralph-fire.jpg">
@endsection

@section('prompt')
    You finally get a fire going...
@endsection

@section('options')
    <a href="{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 49]) }}">next</a>
@endsection
