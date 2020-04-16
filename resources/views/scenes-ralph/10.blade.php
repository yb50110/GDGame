@extends('layouts.scene')

@section('image')
    <img src="/images/0-placeholder.jpg">
@endsection

@section('prompt')
    RALPH:
    You think it can serve an important purpose, but not sure what that is exactly...
@endsection

@section('options')
    <a href="{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 12]) }}">next</a>
@endsection
