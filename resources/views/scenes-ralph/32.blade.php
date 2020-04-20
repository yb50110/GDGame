@extends('layouts.scene')

@section('image')
    <img src="/images/0-placeholder.jpg">
@endsection

@section('prompt')
    Simone chimes in supports Piggy's idea.
    <br>
    Others nod.
@endsection

@section('options')
    <a href="{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 33]) }}">next</a>
@endsection
