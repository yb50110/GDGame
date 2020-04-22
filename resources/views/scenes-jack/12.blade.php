@extends('layouts.scene')

@section('image')
    <img src="/images/7-all-question.jpg">
@endsection

@section('prompt')
    Together, you gather the others and ask what we can do with the conch.
@endsection

@section('options')
    <a href="{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 13]) }}">next</a>
@endsection
