@extends('layouts.master')
@section('title')
    Sign up
    @endsection
@section('content')
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <h1>Sign up</h1>
        @if(count($errors)>0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
            <p>{{$error}}</p>
              @endforeach
        </div>
        @endif
        <form action="{{route('user.signup')}}" method="POST">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password"  class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-success">Sign up</button>
        {{csrf_field()}}
        </form>
    </div>
</div>
    @endsection