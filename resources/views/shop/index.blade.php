@extends('layouts.master')
@section('title')
    Shop
    @endsection
@section('content')
    @if (Session::has('success'))
    <div class="row">
        <div class="col-sm-6 col-md-4 colmd-offset-4 col-sm-offset-3">
            <div id="charge-message" class="alert alert-success">
                {{Session::get('success')}}
            </div>
        </div>
    </div>
    @endif
    @foreach($products->chunk(3) as  $product)

  <div class="row">
          @foreach($product as $pr)
             <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                       <img src="{{$pr->imagePath}}" alt="product" class="img-responsive">
                              <div class="caption">
                                 <h3>{{$pr->title}}</h3>
                                       <p class="description"> {{$pr->description}}</p>
                                      <div class="clearfix">
                                           <div class="pull-left price">${{$pr->price}}</div>
                                               <a href="{{route('product.addToCart',['id'=>$pr->id])}}" class="btn btn-success pull-right" role="button">Add to cart</a>
                                       </div>
                              </div>
                    </div>
             </div>
     @endforeach
  </div>
    @endforeach
    @endsection