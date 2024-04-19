@extends('clients.nabav.layout')
@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="container title mt-5">
        <div class="row">
            <div class="col-6 mt-5">
                <div class="title_paragraph mt-5">
                    <h1>Air Nike 1 Hi FlyEase</h1>
                    <p>These are the best shoes ever madafaka buy these or I will come to your house, so you better be
                        buying it ok. <br>
                        Hope you like it.</p>
                </div>
            </div>
            <div class="col-6">
                <div class="img">
                    <img class="img_shoes" src="{{ asset('/images/Aire Jordan Nike.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="logo_images">
        <h4>Brands</h4>
        <div class="images container row" id="image">
            <img class="col-1 ml-5" src="{{ asset('images/logo/chanel 1.png') }}" alt="">
            <img class="col-1 ml-5" src="{{ asset('images/logo/adidas 1.png') }}" alt="">
            <img class="col-1 ml-5" src="{{ asset('images/logo/ck 1.png') }}" alt="">
            <img class="col-1 ml-5" src="{{ asset('images/logo/D&G 1.png') }}" alt="">
            <img class="col-1 ml-5" src="{{ asset('images/logo/gucci 1.png') }}" alt="">
            <img class="col-1 ml-5" src="{{ asset('images/logo/guess 1.png') }}" alt="">
        </div>
    </div>

    <div class="trending">
        <h3 class="pl-lg-5">Trending Now</h3>
        <div class="overflow-auto">
            <!-- Slider1 -->
            <div id="mySwiper" class="pb-1">
                <div class="col-6 m-lg-4 d-flex">
                    @php $count = 0; @endphp
                    @foreach ($products as $product)
                        @if ($count < 4)
                            <div class="col-6">
                                <div class="card" style="width: 18rem;">
                                    <span></span>
                                    <a class="product-item text-decoration-none"
                                        href="{{ route('Detailproduct', ['id' => $product->id]) }}">
                                        <img src="{{ asset('images/' . $product->image) }}"
                                            class="card-img-top img-fluid product-thumbnail">
                                        <a class="text-decoration-none"
                                            href="{{ route('Detailproduct', ['id' => $product->id]) }} "
                                            style="height: 50px";>View all</a>
                                        @if (auth('web')->check())
                                            <div class="card-body mt- ml-3">
                                                @if ($product->favorited)
                                                    <a title="bo thich"
                                                        onclick="return confirm('ban co muon bo thich khong ')"
                                                        href="{{ route('webpage.favorite', $product->id) }}"><i
                                                            class=" heart1 fa fa-heart"
                                                            style="color: rgb(163, 144, 144); font-size: 20px; margin-left:50px;"
                                                            aria-hidden="true"></i></a>
                                                @else
                                                    <a title="yeu thich"
                                                        href="{{ route('webpage.favorite', $product->id) }}"><i
                                                            class=" heart2 fa fa-heart"
                                                            style="color: red; font-size: 20px; margin-left:150px;"
                                                            aria-hidden="true"></i></a>
                                                @endif
                                            </div>
                                        @endif
                                    </a>
                                </div>
                            </div>
                            @php $count++; @endphp
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div id="trending" class="trending">
        <h3 class="pl-lg-5">Promotional Products</h3>
        <div class="overflow-auto">
            <!-- Slider1 -->
            <div id="mySwiper" class="pb-1">
                <div class="row">
                    @php $count = 0; @endphp
                    @foreach ($products as $product)
                        @if ($count < 8)
                            <div class="col-6 col-md-4 col-lg-3 mb-5">
                                <a class="product-item text-decoration-none" href="{{ route('Detailproduct', ['id' => $product->id]) }}">
                                    <img src="{{ asset('images/' . $product->image) }}" class="img-fluid product-thumbnail m-lg-4 ml-6">
                                    <h3 class="product-title m-lg-4">{{ $product->name }}</h3>
                                    <div class="price-box m-lg-4">
                                        Price:
                                        @if ($product->promotion_price != 0)
                                            <span class="flash-del m-lg-4" style="text-decoration: line-through; color: red;">{{ number_format($product->price, 0, '.', ',') }} VND</span>
                                            <span class="flash-sale">{{ number_format($product->promotion_price, 0, '.', ',') }} VND</span>
                                        @else
                                            <span>{{ number_format($product->price, 0, '.', ',') }} VND</span>
                                        @endif
                                    </div>
                                </a>
                            </div>
                            @php $count++; @endphp
                            @if ($count % 4 == 0)
                                <div class="w-100"></div>
                            @endif
                        @endif
                    @endforeach 
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="row text-center">
            <div class="d-flex " style="padding-left: 350px">
                <h3>We provide the best customer experiences</h3>
            </div>
        </div>

        <div class="paragrap row mt-5">
            <div class="col-3">
                <p><b>Satisfaction Guarantee</b><br>Exchange the product you’ve purchased if it doesn't fit you.</p>
            </div>
            <div class="col-3">
                <p><b>New Arrivals Everyday</b><br>We update our collection almost every day.</p>
            </div>
            <div class="col-3">
                <p><b>Fast & Free Shipping</b><br>We offer fast and free shipping for our loyal customers.</p>
            </div>
            <div class="col-2">
                <p><b>Original Products</b><br>We provide a money-back guarantee if the products are not original.</p>
            </div>
        </div>
    </div>
@endsection <!-- Optional JavaScript -->
