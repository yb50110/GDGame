@extends('layouts.scene')

@section('image')

@endsection

@section('prompt')
    JACK:
    The plane gets caught in a storm! You hear a loud crashing noise and you black out.
@endsection

@section('options')
    <a href="{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 3]) }}">next</a>
@endsection
