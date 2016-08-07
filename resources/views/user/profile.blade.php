@extends('layouts.master')
@section('title')
    Sign up
@endsection
@section('content')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
           <h2>Profile</h2>
            <hr>
            <h2>My orders</h2>
            @foreach($orders as $order)
            <div class="panel panel-default">
                <div class="panel-body">
                    <ul class="list-group">
                        @foreach($order->cart->items as $item)
                        <li class="list-group-item">
                            <span class="badge">$ {{$item['price']}}</span>{{$item['item']['title']}}
                            |{{ $item['qty']}}Units</li>
                        @endforeach
                    </ul>
                </div>
                <div class="panel-footer">Total price : ${{$order->cart->totalPrice}}</div>
                @endforeach
            </div>
        </div>
    </div>
@endsection