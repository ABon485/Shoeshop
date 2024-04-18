@extends('admin.layouts')

@section('content')

<h2>Show Order</h2>
<div class="pull-right">
    <a class="btn btn-success" href="{{route('homeAdmin')}}">Back</a>
</div>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>User_id</th>
            <th>Total price</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Order_001</td>
            <td>Nike </td>
            <td>2</td>
            <td>User_001</td>
            <td>456</td>
            <td>Đã nhận hàng </td>
        </tr>
        <tr>
            <td>Order_002</td>
            <td>Nike job </td>
            <td>1</td>
            <td>User_001</td>
            <td>456</td>
            <td>Đã nhận hàng </td>
        </tr>
       
        
    </tbody>
</table>
@endsection
