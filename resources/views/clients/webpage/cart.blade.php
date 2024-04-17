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
                                        @else 
                                            {{ number_format($product['item']['unit_price']) }}
                                        @endif
                                    </span>
                                </td>
                                <td class="cart-product-quantity" width="130px">
                                    <input type="hidden" class="product_id" value="{{ $product['item']['id'] }}">
                                    <div class="input-group quantity">
                                        <div class="input-group-prepend decrement-btn changeQuantity" style="cursor: pointer">
                                            <span class="input-group-text">-</span>
                                        </div>
                                        <input type="text" class="qty-input form-control" maxlength="2" max="10" value="{{ $product['qty'] }}">
                                        <div class="input-group-append increment-btn changeQuantity" style="cursor: pointer">
                                            <span class="input-group-text">+</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="product-remove">
                                    <a href="{{ route('delete-cart', $product['item']['id']) }}" class="remove" title="Remove this item"><i class="fa fa-trash-o"></i></a>
                                    <div class="col-md-4 mt-5">
                                        <a href="{{ route('checkout-momo') }}" class="btn btn-success">
                                            Buy now
                                        </a>
                                    </div>
                                </td>
                                td
                           
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
  // Lấy tất cả các phần tử quantity-group trên trang
  const quantityGroups = document.querySelectorAll('.quantity-group');

  // Lặp qua từng quantity-group và gán bộ xử lý sự kiện cho nút + và -
  quantityGroups.forEach(function(quantityGroup) {
    const decrementBtn = quantityGroup.querySelector('.decrement-btn');
    const incrementBtn = quantityGroup.querySelector('.increment-btn');
    const qtyInput = quantityGroup.querySelector('.qty-input');
    const amountSpan = quantityGroup.closest('tr').querySelector('.amount');

    // Bộ xử lý sự kiện khi nhấp vào nút -
    decrementBtn.addEventListener('click', function() {
      let quantity = parseInt(qtyInput.value);
      if (quantity > 1) {
        quantity--;
        qtyInput.value = quantity;
        updatePrice(quantity);
      }
    });

    // Bộ xử lý sự kiện khi nhấp vào nút +
    incrementBtn.addEventListener('click', function() {
      let quantity = parseInt(qtyInput.value);
      if (quantity < 10) {
        quantity++;
        qtyInput.value = quantity;
        updatePrice(quantity);
      }
    });

    // Hàm cập nhật giá trị
    function updatePrice(quantity) {
      const price = parseFloat(amountSpan.dataset.price);
      const totalPrice = price * quantity;
      amountSpan.textContent = totalPrice.toFixed(2);
    }
  });
});
</script>
@endsection