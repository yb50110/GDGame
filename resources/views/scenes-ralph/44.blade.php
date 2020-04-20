@extends('layouts.scene')

@section('image')
    <img src="/images/11-ralph-boat.jpg">
@endsection

@section('prompt')
    After a while, you notice a boat off the distance in the water!
@endsection

@section('options')
    <a href="{{ route('scene.decision', ['session_id' => $session_id, 'scene_id' => 45, 'decision_id' => 'M', 'option' =>1]) }}">Start making fire now</a>
    <br>
    <a href="{{ route('scene.decision', ['session_id' => $session_id, 'scene_id' => 46, 'decision_id' => 'M', 'option' => 0]) }}">Call the others</a>
@endsection
