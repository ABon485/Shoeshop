@extends('nabav.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="{{asset('/images/'. $product ->image)}}" class="img-fluid " alt="Hình ảnh sản phẩm">
        </div>
        <div class="col-md-6">
            <ul class="list-group">
                <h3 class="list-group-item ">{{$product->name}}</h3>
                <li class="list-group-item">{{$product->description}}</li>
                <li class="list-group-item"><span class="woocommerce-Price-amount amount">{{ $product->price}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></li>
                <li class="list-group-item"><s><span class="woocommerce-Price-amount amount">250,00<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></s></li>
            </ul>
        </div>
    </div>
</div>
@endsection
