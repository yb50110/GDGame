@extends('layouts.scene')

@section('image')

@endsection

@section('prompt')
    JACK:
    You wake up. You notice your clothing is soaked and decide to dry your tops.
@endsection

@section('options')
    <a href="{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 4]) }}">next</a>
@endsection
