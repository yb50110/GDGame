@extends('layouts.scene')

@section('image')
    <img src="/images/0-placeholder.jpg">
@endsection

@section('prompt')
    You continue to dry your shirt.
@endsection

@section('options')
    // wait for ralph S:
    if 1: go to 51
    if 0: go to 52
@endsection
