@extends('admin.layouts')

@section('content')

<h2>Show Order</h2>
<div class="pull-right">
    <a class="btn btn-success" href="{{route('home')}}">Back</a>
</div>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Total</th>
            <th>Status</th>
            <th>Name</th>
            <th>Product_id</th>
            <th>User_id</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Order_001</td>
            <td>600</td>
            <td>Đã nhận hàng </td>
            <td>Doe</td>
            <td>Prduct_001</td>
            <td>User_002</td>
        </tr>
        <tr>
            <td>Order_002</td>
            <td>600</td>
            <td>Đã nhận hàng </td>
            <td>Doe</td>
            <td>Prduct_003</td>
            <td>User_002</td>
        </tr>
        <tr>
            <td>Order_003</td>
            <td>600</td>
            <td>Đã nhận hàng </td>
            <td>Doe</td>
            <td>Prduct_005</td>
            <td>User_001</td>
        </tr>
    </tbody>
</table>
   
   

@endsection
