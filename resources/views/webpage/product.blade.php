@extends('nabav.layout')
@section('content')


        <div class="untree_co-section product-section before-footer-section mt-5">
            <h2>Shoes</h2>
            <div class="tab">
                <a class="tablinks " onclick="openTabs(event,'tab_21')"><b>Men</b></a>
                <a class="tablinks " onclick="openTabs(event,'tab_19')"><b>Women</b></a>
            </div>
            <div class="container">
                <div class="row list-product" id="tab_21">
                    @foreach ($products as $product)
                    @if ($product->category == "Men")
                    <div class="col-4 col-md-4 col-lg-3 mb-5">
                        <a class="product-item text-decoration-none" href="{{ route('Detailproduct', ['id' => $product->id]) }}">
                            <img src="{{ asset('images/' . $product->image) }}" class="img-fluid product-thumbnail">
                            <h3 class="product-title">{{ $product->name }}</h3>
                            <strong class="product-price">{{ $product->price }}</strong>
                        </a>
                    </div>
                    @endif
                    @endforeach 
                </div>

                <div class="row list-product" id="tab_19">
                    @foreach ($products as $product) 
                    @if ($product->category == "Women")
                    <div class="col-4 col-md-4 col-lg-3 mb-5">
                        <a class="product-item text-decoration-none" href="{{ route('Detailproduct', ['id' => $product->id]) }}">
                            <img src="{{ asset('images/' . $product->image) }}" class="img-fluid product-thumbnail">
                            <h3 class="product-title">{{ $product->name }}</h3>
                            <strong class="product-price">{{ $product->price }}</strong>
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
            
        
@endsection
