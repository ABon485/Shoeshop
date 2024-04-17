@extends('clients.nabav.layout')
@section('content')
@if(session('message'))
  <input  id="message" value=" {{ session('message') }}">
  <script>     
    var message = document.getElementById('message').value;
    alert(message)
   </script>
@endif
    <div class="body-content outer-top-xs">
        <div class='container'>
            <div class='row single-product'>
                <div class='col-md-12'>
                    <div class="detail-block mt-5">
                        <div class="row  wow fadeInUp">
                            <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
                                <div class="product-item-holder size-big">
                                    <div id="owl-single-product">
                                        <div class="single-product-gallery-item mt-3" id="slide1">
                                            <img src="{{ asset('/images/' . $product->image) }}" alt="Product Image"
                                                class="img-fluid" height="400" width="450" id="large-image">
                                        </div>
                                        <div class="small-images mt-3">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='col-sm-6 col-md-7 product-info-block'>
                                <div class="product-info">
                                    @if (isset($product))
                                        <h1 class="name">{{ $product->name }}</h1>
                                        <div class="price-container info-container m-t-20">
                                            <div class="row">
                                                <div class="col-sm-6">
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
                                                    Choose Size :
                                                    <select id="size">
                                                        <?php
                                                        $sizes = ['38', '39', '40', '41', '42'];
                                                        foreach ($sizes as $size) {
                                                            echo '<option value="' . $size . '">' . $size . '</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </div>

                                            </div><!-- /.row -->
                                        </div><!-- /.price-container -->
                                        <div class="quantity-container info-container">
                                            <div class="row">
                                                <div class="col-md-4 mt-5">
                                                    <a href="{{ route('checkout-momo') }}" class="btn btn-success">
                                                        Buy now
                                                    </a>

                                                </div>
                                                <div class="col-md-8 mt-5">
                                                 
                                                    <a href="{{ route('post-cart', ['id' => $product->id]) }}" class="btn btn-primary">
                                                        <svg aria-hidden="true" class="pre-nav-design-icon" focusable="false" viewBox="0 0 24 24" role="img" width="24px" height="24px" fill="none">
                                                            <path stroke="currentColor" stroke-width="1.5"
                                                                d="M8.25 8.25V6a2.25 2.25 0 012.25-2.25h3a2.25 2.25 0 110 4.5H3.75v8.25a3.75 3.75 0 003.75 3.75h9a3.75 3.75 0 003.75-3.75V8.25H17.5">
                                                            </path>
                                                        </svg>
                                                        <span class="pre-jewel pre-cart-jewel text-color-primary-dark"
                                                            style="visibility: visible;"data-var="jewel">ADD TO BAG</span>
                                                    </a>
                                                {{-- </form> --}}
                                                </div>
                                            </div>

                                        </div><!-- /.quantity-container -->
                                        <div class="clearfix">
                                            <div class="description mt-5">
                                                {{ $product->description }}
                                            </div><!-- /.description-container -->
                                        </div>
                                    @endif
                                </div><!-- /.product-info -->
                            </div><!-- /.col-sm-7 -->
                        </div><!-- /.row -->
                    </div>


                </div><!-- /.row -->
            </div>
        </div>



    @endsection

    @section('js')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var smallImages = document.querySelectorAll('.small-image');
                var largeImage = document.getElementById('large-image');

                smallImages.forEach(function(smallImage) {
                    smallImage.addEventListener('click', function() {
                        var largeImageUrl = smallImage.getAttribute('data-large-image');
                        largeImage.src = largeImageUrl;
                    });
                });
            });
        </script>

    @endsection
