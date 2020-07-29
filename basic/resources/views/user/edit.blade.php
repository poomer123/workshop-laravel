@extends('layout')
@section('title', 'Edit User')
@section('content')
<div class="container">
    <h1>แก้ไขข้อมูลผู้ใช้ระบบ</h1>
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

            <form method="post" action="{{ action('UserController@update', $id) }}">
                {{csrf_field()}}
                <div class="form-group">
                    <input type="text" name="firstname" class="form-control" placeholder="name"
                        value="{{ $user->fname }}">
                </div>
                <div class="form-group">
                    <input type="text" name="surname" class="form-control" placeholder="surname"
                        value="{{ $user->lname }}">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Save Edit User">
                </div>
                <input type="hidden" name="_method" value="PATCH" />
            </form>

        </div>
    </div>
</div>
@endsection