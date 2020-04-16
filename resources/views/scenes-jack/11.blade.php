@extends('layouts.scene')

@section('image')
    <img src="/images/6-ralph-jack-question.jpg">
@endsection

@section('prompt')
    JACK:
    {{ $other_player }} asks what we should or could do with it...
@endsection

@section('options')
    <a href="{{ route('scene.decision', ['session_id' => $session_id, 'scene_id' => 12, 'decision_id' => 'D', 'option' =>1]) }}">Suggest calling the others and asking them too</a>
    <br>
    <a href="{{ route('scene.decision', ['session_id' => $session_id, 'scene_id' => 10, 'decision_id' => 'D', 'option' => 0]) }}">Tell him it's just a shell...</a>
@endsection
