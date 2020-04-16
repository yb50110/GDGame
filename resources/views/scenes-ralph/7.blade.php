@extends('layouts.scene')

@section('image')
    <img src="/images/4-ralph-jack-walk.jpg">
@endsection

@section('prompt')
    The two of you walk along the shore together.
@endsection

@section('options')
    <a href="{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 9]) }}">next</a>
@endsection
