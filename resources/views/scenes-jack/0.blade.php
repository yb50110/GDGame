@extends('layouts.scene')

@section('image')
    <img src="/images/0-error.jpg">
@endsection

@section('prompt')
    The script ends here... please restart with a new session :)
@endsection

@section('options')
    <a href="{{ route('home') }}">restart</a>
@endsection
