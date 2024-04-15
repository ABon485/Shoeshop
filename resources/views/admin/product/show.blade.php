@extends('admin.layouts')

@section('content')

<h2>Show Product</h2>

<div class="pull-right">
    <a class="btn btn-success" href="{{route('home')}}">Back</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Size</th>
            <th>Quantity</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Doe</td>
            <td>Nike so good</td>
            <td>400</td>
            <td>M</td>
            <td>13</td>
            <td>Image</td>
            <td>
                <a class="btn btn-success" href="{{route('createProduct')}}"> Create </a>
                <a class="btn btn-success" href="{{route('editProduct')}}"> Edit </a>
                <a class="btn btn-success" href="{{route('deleteProduct')}}"> Delete </a>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>Doe</td>
            <td>Nike so good</td>
            <td>400</td>
            <td>M</td>
            <td>13</td>
            <td>Image</td>
            <td>
                <a class="btn btn-success" href="{{route('createProduct')}}"> Create </a>
                <a class="btn btn-success" href="{{route('editProduct')}}"> Edit </a>
                <a class="btn btn-success" href="{{route('deleteProduct')}}"> Delete </a>
            </td>
        </tr>
        <tr>
            <td>3</td>
            <td>Doe</td>
            <td>Nike so good</td>
            <td>400</td>
            <td>M</td>
            <td>13</td>
            <td>Image</td>
            <td>
                <a class="btn btn-success" href="{{route('createProduct')}}"> Create </a>
                <a class="btn btn-success" href="{{route('editProduct')}}"> Edit </a>
                <a class="btn btn-success" href="{{route('deleteProduct')}}"> Delete </a>
            </td>
        </tr>
       
    </tbody>
</table>
@endsection