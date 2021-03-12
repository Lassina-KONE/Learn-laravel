@extends('template')

    @section('title')
        Say hello
    @endsection

@section('body')
    <p>
        Hello <strong>{{ $name }}</strong>. <br>
        Welcome to my web page.
    </p>