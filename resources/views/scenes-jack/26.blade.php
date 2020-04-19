@extends('layouts.scene')

@section('image')
    <img src="/images/9-jack-hunt.jpg">
@endsection

@section('prompt')
    JACK:
    You break the silence by suggesting we should hunt for food.
@endsection

@section('options')
    <a href="{{ route('scene.show', ['session_id' => $session_id, 'scene_id' => 27]) }}">next</a>
@endsection
