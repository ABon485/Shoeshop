@extends('admin.layouts')

@section('content')

<h2>Show User</h2>

<div class="pull-right">
    <a class="btn btn-success" href="{{route('home')}}">Back</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Password</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>John</td>
            <td>Jhon123</td>
            <td>0949834389</td>
            <td>john@example.com</td>
            <td>
                <a class="btn btn-success" href="{{route('createProduct')}}"> Create </a>
                <a class="btn btn-success" href="{{route('editProduct')}}"> Edit </a>
                <a class="btn btn-success" href="{{route('deleteProduct')}}"> Delete </a>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>John</td>
            <td>Jhon123</td>
            <td>0949834389</td>
            <td>john@example.com</td>
            <td>
                <a class="btn btn-success" href="{{route('createProduct')}}"> Create </a>
                <a class="btn btn-success" href="{{route('editProduct')}}"> Edit </a>
                <a class="btn btn-success" href="{{route('deleteProduct')}}"> Delete </a>
            </td>
        </tr>
        <tr>
            <td>3</td>
            <td>John</td>
            <td>Jhon123</td>
            <td>0949834389</td>
            <td>john@example.com</td>
            <td>
                <a class="btn btn-success" href="{{route('createProduct')}}"> Create </a>
                <a class="btn btn-success" href="{{route('editProduct')}}"> Edit </a>
                <a class="btn btn-success" href="{{route('deleteProduct')}}"> Delete </a>
            </td>
        </tr>
    </tbody>
</table>
@endsection