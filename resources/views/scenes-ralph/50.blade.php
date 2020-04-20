@extends('layouts.scene')

@section('image')
    <img src="/images/0-hourglass.jpg">
@endsection

@section('prompt')
    Waiting for {{ $other_player }} to make a decision...
@endsection

@section('options')
    check jack's Q...
    if 1: go to 51;
    else: go to 52
@endsection
