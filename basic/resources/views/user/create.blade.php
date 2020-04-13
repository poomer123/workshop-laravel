@extends('layout')
@section('title', 'Form Submit')
@section('content')
    <div class="container">
        <h1>เพิ่มข้อมูลผู้ใช้ระบบ</h1>
        <div class="row">
            <div class="col-12">
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