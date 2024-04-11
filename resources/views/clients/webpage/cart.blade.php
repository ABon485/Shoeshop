@extends('clients.nabav.layout')
@section('content')

<div class="beta-comp">
    @if(Session::has('cart'))
    <div class="cart">
        <h2>Shopping Cart</h2>
            (@if(Session::has('cart')){{ Session('cart')->totalQty }}
            @else Trống 
            @endif) <i class="fa fa-chevron-down"></i></div>

        <div class="beta-dropdown cart-body">
            @foreach($productCarts as $product)
            <div class="cart-item">
                <a class="cart-item-delete" href=""><i class="fa fa-times"></i>
                </a>
                <div class="media">
                    <a class="pull-left" href="#"><img src="/images/{{ $product['item']['image'] }}" alt=""></a>
                    <div class="media-body">
                        <span class="cart-item-title">{{ $product['item']['name'] }}</span>
                        <span class="cart-item-amount">{{ $product['qty'] }}X <span>
                                @if($product['item']['promotion_price']==0)
                                {{ number_format($product['item']['unit_price']) }}@else
                                {{ number_format($product['item']['promotion_price']) }}
                                @endif
                            </span></span>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="cart-caption">
                <div class="cart-total text-right">Tổng tiền: <span class="cart-total-value">{{ $cart->totalPrice }}</span></div>
                <div class="clearfix"></div>

            </div>
        </div>
    </div> 
    @endif
  
</div>
@endsection