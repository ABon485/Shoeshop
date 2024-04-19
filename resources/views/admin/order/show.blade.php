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
            <th>Product Name</th>
            <th>User_id</th>
            <th>Total price</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($items as $item)
        <tr>
            <td>
                <p> {{ $item['id'] }}</p>
            </td>
            <td>
                <p> {{ $item['productName'] }}</p>
            </td>
            <td>
                <p> {{ $item['userID'] }}</p>
            </td>
            <td>
                <p> {{ $item['total'] }}</p>
            </td>
            <td>
                <p> {{ $item['status'] }}</p>
            </td>
        </tr>
        @endforeach



    </tbody>
</table>
@endsection
