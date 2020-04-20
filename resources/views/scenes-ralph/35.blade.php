@extends('layouts.scene')

@section('image')
    <img src="/images/0-placeholder.jpg">
@endsection

@section('prompt')
    {{ $other_player }} takes the criticism and stays quiet.
    <br>
    You suggest to make a fire first.
@endsection

@section('options')
    <a href="{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 38]) }}">next</a>
@endsection
