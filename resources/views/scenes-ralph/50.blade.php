@extends('layouts.scene')

@section('image')
    <img src="/images/0-hourglass.jpg">
@endsection

@section('prompt')
    Waiting for {{ $other_player }} to make a decision...
@endsection

@section('options')
    if jack's O is 1, wait to
    check jack's Q... (check 20 sec)
    if 1: go to 51;
    else: go to 52
@endsection
