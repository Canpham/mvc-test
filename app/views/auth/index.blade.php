@extends('layouts.main')
@section('title', 'Đăng nhập')
@section('content')

<div class="row">
        <div class="col-6 offset-3">
            <h3 class="text-center text-primary">Đăng nhập</h3>
            <form action="{{ BASE_URL . 'post-login'}}" method="post">
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                @if(!empty($msg))
                <span class="text-danger">{{$msg}}</span>
                @endif
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-sm">Login</button>
                    <a href="{{ BASE_URL}}" class="btn btn-danger btn-sm">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection