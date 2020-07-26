@extends('layout')
@section('title', 'Show User')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <a class="btn btn-primary" href="{{ route('user.create') }}">New User</a>
            @if(\Session::has('success'))
            <div class='alert alert-success'>
                <p class="mb-0">{{ \Session::get('success') }}</p>
            </div>
            @endif
            <ul>
                @foreach($users as $user)
                <li class="mb-3">{{ $user['fname'] }} {{ $user['lname'] }}
                    <a class="text-primary ml-3" href="#">Edit</a>
                    <form action="{{ action('UserController@destroy', $user['id']) }}" method="post"
                        class="delete_form">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE" />
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

@section('script')
<script type="text/javascript">
$(document).ready(function() {
    $('.delete_form').on('submit', function() {
        if (confirm('คุณต้องการลบข้อมูลหรือไม่ ?')) {
            return true;
        } else {
            return false;
        };
    });
});
</script>
@endsection
@endsection