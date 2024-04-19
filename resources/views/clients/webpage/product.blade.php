@extends('clients.nabav.layout')
@section('content')


        <div class="untree_co-section product-section before-footer-section mt-5">
            <h2>Shoes</h2>
            <div class="tab">
                <a class="tablinks " onclick="openTabs(event,'tab_21')"><h4>Men</h4></a>
                <a class="tablinks " onclick="openTabs(event,'tab_19')"><h4>Women</h4></a>
            </div>
            <div class="m-lg-5 row">
                <div class="row list-product" id="tab_21">
                    @foreach ($products as $product)
                    @if ($product->category == "Men")
                    <div class="col-4 col-md-4 col-lg-3 mb-5">
                        <a class="product-item text-decoration-none col-6" href="{{ route('Detailproduct', ['id' => $product->id]) }}">
                            <img src="{{ asset('images/' . $product->image) }}" class="img-fluid product-thumbnail">
                            <div class="row">
                                <h3 class="product-title">{{ $product->name }}</h3>
                                <div class="col-6">
                                    @if (auth('web')->check())
                                            <div class="card-body">
                                                @if ($product->favorited)
                                                    <a title="bo thich"
                                                        onclick="return confirm('ban co muon bo thich khong ')"
                                                        href="{{ route('webpage.favorite', $product->id) }}"><i
                                                            class=" heart1 fa fa-heart"
                                                            style="color: rgb(163, 144, 144); font-size: 20px; margin-left:50px;"
                                                            aria-hidden="true"></i></a>
                                                @else
                                                    <a title="yeu thich"
                                                        href="{{ route('webpage.favorite', $product->id) }}">
                                                        <i id="icon" class=" heart2 fa fa-heart" style="color: red; font-size: 20px;" aria-hidden="true"></i></a>
                                                @endif
                                            </div>
                                        @endif
                                </div>
                            </div>
                            <div class="price-box">
                                Pice:
                                @if ($product->promotion_price != 0)
                                    <span class="flash-del"
                                        style="text-decoration: line-through; color: red;">{{ number_format($product->price, 0, '.', ',') }}
                                        VND</span>
                                    <span
                                        class="flash-sale">{{ number_format($product->promotion_price, 0, '.', ',') }}
                                        VND</span>
                                @else
                                    <span>{{ number_format($product->price, 0, '.', ',') }}
                                        VND</span>
                                @endif

                            </div>
                        </a>
                    </div>
                    @endif
                    @endforeach 
                </div>

                <div class="row list-product" id="tab_19">
                    @foreach ($products as $product) 
                    @if ($product->category == "Women")
                    <div class="col-6 col-md-4 col-lg-3 mb-5">
                        <a class="product-item text-decoration-none col-6" href="{{ route('Detailproduct', ['id' => $product->id]) }}">
                            <img src="{{ asset('images/' . $product->image) }}" class="img-fluid product-thumbnail">
                            <div class="row">
                                <h3 class="product-title">{{ $product->name }}</h3>
                                <div class="col-6">
                                    @if (auth('web')->check())
                                            <div class="card-body">
                                                @if ($product->favorited)
                                                    <a title="bo thich"
                                                        onclick="return confirm('ban co muon bo thich khong ')"
                                                        href="{{ route('webpage.favorite', $product->id) }}"><i
                                                            class=" heart1 fa fa-heart"
                                                            style="color: rgb(163, 144, 144); font-size: 20px; margin-left:50px;"
                                                            aria-hidden="true"></i></a>
                                                @else
                                                    <a title="yeu thich"
                                                        href="{{ route('webpage.favorite', $product->id) }}">
                                                        <i id="icon" class=" heart2 fa fa-heart" style=" color: red; font-size: 20px;" aria-hidden="true"></i></a>
                                                @endif
                                            </div>
                                        @endif
                                </div>
                            </div>
                            <div class="price-box">
                                Pice:
                                @if ($product->promotion_price != 0)
                                    <span class="flash-del"
                                        style="text-decoration: line-through; color: red;">{{ number_format($product->price, 0, '.', ',') }}
                                        VND</span>
                                    <span
                                        class="flash-sale">{{ number_format($product->promotion_price, 0, '.', ',') }}
                                        VND</span>
                                @else
                                    <span>{{ number_format($product->price, 0, '.', ',') }}
                                        VND</span>
                                @endif

                            </div>
                        </a>
                    </div>
                    @endif
                    @endforeach 
                </div>
            </div>
        </div>
        <script>
            function openTabs(evt, tabName) {
              var i, tabcontent, tablinks;
              tabcontent = document.getElementsByClassName("list-product");
              for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
              }
            
              tablinks = document.getElementsByClassName("tablinks");
              for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
              }
            
              document.getElementById(tabName).style.display = "flex";
              evt.currentTarget.className += " active";
            }
            
            document.addEventListener("DOMContentLoaded", function() {
              document.getElementById("defaultOpen").click();
            });
        </script>
        
        <script>
            var icon = document.getElementById("icon");
            icon.addEventListener("click", function() {
            icon.style.color = "red";
            });
        </script>    
        
@endsection
