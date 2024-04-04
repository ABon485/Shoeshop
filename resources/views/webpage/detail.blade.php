@extends('nabav.layout')
@section('content')
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
                                                        Pice: <span class="price text-danger">{{ $product->price }}</span>

                                                    </div>
                                                </div>

                                            </div><!-- /.row -->
                                        </div><!-- /.price-container -->
                                        <div class="quantity-container info-container">
                                            <div class="row">
                                                <div class="col-md-4 mt-5">
                                                    <a href="#" class="btn btn-success">
                                                        Buy now
                                                    </a>
                                                </div>
                                                <div class="col-md-8 mt-5">
                                                    <a href="#" class="btn btn-primary">
                                                        <i class="fa fa-shopping-cart inner-right-vs"></i> ADD TO CART
                                                    </a>
                                                </div>
                                            </div>
                                            
                                        </div><!-- /.quantity-container -->
                                    @endif
                                </div><!-- /.product-info -->
                            </div><!-- /.col-sm-7 -->
                        </div><!-- /.row -->
                    </div>
                   
                    <div class="clearfix">
                        <div class="description-container m-t-20">
                            <h4>Description</h4>
                            {{ $product->description }}
                        </div><!-- /.description-container -->
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
