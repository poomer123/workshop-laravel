@extends('layout')
@section('title', 'Show User')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <a class="btn btn-primary" href="{{ route('user.create') }}">New User</a>
            <ul>
                @foreach($users as $user)
                <li>{{ $user['fname'] }} {{ $user['lname'] }} <a class="text-primary ml-3" href="#">Edit</a> <a
                        class="text-danger ml-3" href="#">Del</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection