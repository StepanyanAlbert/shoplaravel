@extends('layouts.master')
@section('title')
    Shopping cart
@endsection
@section('content')
@if(Session::has("cart"))
<div class="row">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
        @foreach($products as $product)
            <li class="list-group-item">
                <span class="badge">{{$product['qty']}}</span>
                <strong>{{$product['item']['title']}}</strong>
                <span class="label label-success">{{$product['price']}}</span>
                <div class="btn-group">
                    <button type="button"  data-toggle="dropdown" class="btn btn-primary btn-xs dropdown-toogle">
                        Action <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Reduce by 1 </a></li>
                        <li><a href="#">Reduce All</a></li>
                    </ul>
                </div>
            </li>
        @endforeach
    </div>
</div>
<div class="row">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
        <strong>Total : {{$totalPrice}}</strong>
    </div>
</div>
<div class="row">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
        <a  href="{{route('checkout')}}" type="button" class="btn btn-success">Checkout</a>
    </div>
</div>
@else
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <h2>No items in cart</h2>
        </div>
    </div>
@endif
@endsection