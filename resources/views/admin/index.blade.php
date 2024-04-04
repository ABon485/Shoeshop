@extends('admin.layouts')
@section( 'content')
<div class="row">
    <div class="col-lg-12" margin-tb>
        <div class="pull-left">
            <h2> Product </h2>
        </div>
        <div class=" pull-right" >
<a class="btn btn-success" href=""></a>
        </div>
    </div>
</div>
@if ($message = section::get('success'))
<div class="alert alert-succsess">
    <p> {{$message}}</p>
</div>
@endif
<table class="table table-bordered"> 
<tr>
    <th>No</th>
    <th>Name</th>
    <th>Detail</th>
    <th width=280px> Action</th>
</tr>
@foreach($products as $product)
    <tr>
        <td>{{++$i}}</td>
        <td>{{$products->name}}</td>
        <td>{{$products->detail}}</td>
        <td>
            <form action="{{route('admin.destroy', $adminProduct->id)}}" method="POST">
                <a class="btn btn-success" href="{{route('admin.show', $adminProduct->id)}}">Show</a>
                <a class="btn btn-success" href="{{route('admin.edit', $adminProduct->id)}}">Edit</a>
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>

    </tr>
@endforeach
</table>
@endsection
