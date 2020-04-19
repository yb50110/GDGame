@extends('layouts.scene')

@section('image')
    <img src="/images/0-placeholder.jpg">
@endsection

@section('prompt')
    Ralph:
    You split the group into two: hunting in the jungle or fishing.
    <br>
    You ask {{ $other_player }} what group {{ $other_player }} would like to join.
@endsection

@section('options')
    <a href="{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 22]) }}">next</a>
@endsection
