@extends('layouts.scene')

@section('image')
    <img src="/images/0-hourglass.jpg">
@endsection

@section('prompt')
    Waiting for {{ $other_player }} to make a decision...
@endsection

@section('options')
    check S...
    if 1: no one is there anymore: go to 55
    if 0: jack explores alone so the rest is there: go to 54
@endsection
