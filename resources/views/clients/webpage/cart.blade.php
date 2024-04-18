@extends('clients.nabav.layout')   
@section('banner')
    
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Shopping Cart</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
                <a href="index.html">Home</a> / <span>Shopping Cart</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
@endsection
@section('content')
    <div class="card shadow border-0 m-4">
        <div class="row card-body p-4">
            <div class="table-responsive">
                <table id="tblData" class="table table-striped table-hover">
                    <thead class="table-secondary">
                        <th scope="col-2" style="width: 5%">ID</th>
                        <th scope="col-2" style="width: 20%">Name</th>
                        <th scope="col-2" style="width: 30%">Image</th>
                        <th scope="col-2" style="width: 15%">Price</th>
                        <th scope="col-2" style="width: 15%">Quantity</th>
                        <th scope="col-2" style="width: 10%">Action</th>
                    </thead>
                    <tbody>
                        @foreach ($productCarts as $product)
                            <tr>
                                <td scope="row">{{ $product['item']['id'] }}</td>
                                <td>{{ $product['item']['name'] }}</td>
                                <td><img src="{{ asset('/images/'.$product['item']['image']) }}" alt=""
                                        width="150px" height="150px"></td>
                                <td>  
                                    <span class="amount">
                                        @if($product['item']['promotion_price'] != 0)
                                            {{ number_format($product['item']['promotion_price']) }}
                                            <input type="number" class="prod-input" name="productId" value="{{ ($product['item']['promotion_price']) }}" style="display: none">
                                        @else 
                                            {{ number_format($product['item']['unit_price']) }}
                                            <input type="number" class="prod-input" name="productId" value="{{ ($product['item']['unit_price']) }}" style="display: none">
                                        @endif
                                    </span>
                                </td>
                                <td class="cart-product-quantity" width="130px">
                                    <input type="hidden" class="product_id" value="{{ $product['item']['id'] }}">
                                    <div class="input-group quantity">
                                        <div class="input-group-prepend decrement-btn changeQuantity" style="cursor: pointer">
                                            <span class="input-group-text">-</span>
                                        </div>
                                        <input type="number" class="qty-input form-control" maxlength="2" max="10" value="1" name="qty" id="qty">
                                        <div class="input-group-append increment-btn changeQuantity" style="cursor: pointer">
                                            <span class="input-group-text">+</span>
                                        </div>
                                        <script>
                                            // Lấy thẻ input và các nút tăng/giảm số lượng
                                            var qtyInput = document.querySelector('.qty-input');
                                            var changeQuantityBtns = document.querySelectorAll('.changeQuantity');
                                        
                                            // Xử lý sự kiện click nút giảm hoặc tăng số lượng
                                            changeQuantityBtns.forEach(function(btn) {
                                                btn.addEventListener('click', function() {
                                                    var currentValue = parseInt(qtyInput.value);
                                                    var maxValue = parseInt(qtyInput.getAttribute('max'));
                                        
                                                    if (btn.classList.contains('decrement-btn')) {
                                                        // Nếu là nút giảm số lượng
                                                        if (currentValue > 1) {
                                                            qtyInput.value = currentValue - 1;
                                                        }
                                                    } else if (btn.classList.contains('increment-btn')) {
                                                        // Nếu là nút tăng số lượng
                                                        if (currentValue < maxValue) {
                                                            qtyInput.value = currentValue + 1;
                                                        }
                                                    }
                                                });
                                            });
                                        </script>
                                    </div>
                                </td>
                                <td class="product-remove">
                                    <a href="{{ route('delete-cart', $product['item']['id']) }}" class="remove" title="Remove this item"><i class="fa fa-trash-o"></i></a>
                                    <div class="col-md-4 mt-5">
                                        {{-- <a href="{{ route('checkout-momo') }}" class="btn btn-success">
                                            Buy now
                                        </a> --}}
                                        <input type="number" class="prod-id" name="productId" value="{{ $product['item']['id'] }}" style="display: none">
                                        <button onclick="checkoutForm()" class="btn-success">Buy Now</button>
                                        <script>
                                            function checkoutForm() {
                                                let qtyInput = document.querySelector('.qty-input');
                                                let qtyValue = qtyInput.value;
                                                let price = document.querySelector('.prod-input').value;
                                                let productId = document.querySelector('.prod-id').value;
                                                // Thực hiện các hành động liên quan đến việc thanh toán, chẳng hạn như gửi dữ liệu số lượng đến URL hoặc xử lý form.
                                                // Ở đây, chúng ta chỉ đoạn mã JavaScript để lấy giá trị số lượng và in ra console.
                                                console.log('Số lượng:', qtyValue);
                                                const url = 'payUrl?qty=' + qtyValue + '&price=' + price + '&productId=' + productId;

                                                // Chuyển hướng đến URL đã được chỉnh sửa
                                                window.location.href = url;
                                            }
                                        </script>
                                        
                                    </div>
                                </td>
                           
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{-- <div class="col-md-4 mt-9" style="margin-left: 1100px ; margin-bottom:100px">
            <a href="{{ route('checkout') }}" class="btn btn-success">
                Checkout 
            </a>

        </div> --}}
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</div>

@endsection