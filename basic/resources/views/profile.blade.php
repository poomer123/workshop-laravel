@extends('layout')
@section('title', 'Profile page')
@section('content')
    <h1>{{$name}}</h1>
    <h2>{{$nickname}}</h2>
@stop
@section('footer')
    <h3>Powered by poom</h3>
@stop