@extends('layout')
@section('title', 'Form Submit')
@section('content')
<div class="container">
    <h1>เพิ่มข้อมูลผู้ใช้ระบบ</h1>
    <div class="row">
        <div class="col-12">
            @if(count($errors) > 0)
            <div class='alert alert-danger'>
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            @if(\Session::has('success'))
            <div class='alert alert-success'>
                <p class="mb-0">{{ \Session::get('success') }}</p>
            </div>
            @endif

            <form method="post" action="{{url('user')}}">
                {{csrf_field()}}
                <div class="form-group">
                    <input type="text" name="firstname" class="form-control" placeholder="name">
                </div>
                <div class="form-group">
                    <input type="text" name="surname" class="form-control" placeholder="surname">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Create new user">
                </div>
            </form>

        </div>
    </div>
</div>
@endsection