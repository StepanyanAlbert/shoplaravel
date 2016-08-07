@extends('layouts.master')
@section('title')
    Sign in
@endsection
@section('content')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h1>Sign in</h1>
            @if(count($errors)>0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{$error}}</p>
                    @endforeach
                </div>
            @endif
            <form action="{{route('user.signin')}}" method="POST">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password"  class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn-success">Sign in</button>
                {{csrf_field()}}
            </form>
            <h2>Don't have an account? <a href="{{route('user.signup')}}">Sign up </a></h2>
        </div>
    </div>
@endsection