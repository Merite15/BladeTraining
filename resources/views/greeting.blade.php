@extends('layout')

@section('title')
    <title>Home </title>
@endsection

@section('content')
    <h1>Hello, {{ $name }}</h1>
    @if ($name == $name)
        <p>This name is {{ $name }}</p>
    @elseif ($name !== $name)
        <p>I don't no this user</p>
    @endif
@endsection
