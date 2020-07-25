@extends('layout')
@section('title', 'Home page')
@section('content')
<h1>Welcome to home page</h1>
<p>Comming soon..</p>
<nav>
    <a class="btn btn-primary" href="{{ route('user.create') }}">New User</a>
</nav>
@stop
@section('footer')
<h3>contact me</h3>
@stop

<p>show other content</p>