@extends('layouts.scene')

@section('image')
    <img src="/images/0-placeholder.jpg">
@endsection

@section('prompt')
    You gather the wood but without an instigator, you have trouble starting the fire.
@endsection

@section('options')
{{--    <a href="{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 48]) }}">next</a>--}}
    <a href="{{ route('scene.decision', ['session_id' => $session_id, 'scene_id' => 48, 'decision_id' => 'FIRE', 'option' => 1]) }}">next</a>
@endsection
