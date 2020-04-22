@extends('layouts.scene')

@section('image')
    <img src="/images/9-jack-hunt.jpg">
@endsection

@section('prompt')
    {{ $other_player }} breaks the silence by saying they should hunt for food.
@endsection

@section('options')
    <a href="{{ route('scene.decision', ['session_id' => $session_id, 'scene_id' => 30, 'decision_id' => 'I', 'option' =>1]) }}">Suggest starting fire</a>
    <br>
    <a href="{{ route('scene.decision', ['session_id' => $session_id, 'scene_id' => 31, 'decision_id' => 'I', 'option' => 0]) }}">Agree</a>
@endsection
