@extends('layouts.scene')

@section('image')
    <img src="/images/18-jack-argues.jpg">
@endsection

@section('prompt')
    An argument begins but you realize you are outnumbered.
@endsection

@section('options')
    <a href="{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 33]) }}">next</a>
@endsection
