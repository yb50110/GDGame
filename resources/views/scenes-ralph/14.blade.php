@extends('layouts.scene')

@section('image')
    <img src="/images/7-all-question.jpg">
@endsection

@section('prompt')
    RALPH:
    Together, you gather the others and ask what we can do with the conch.
@endsection

@section('options')
    <a href="{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 15]) }}">next</a>
@endsection
