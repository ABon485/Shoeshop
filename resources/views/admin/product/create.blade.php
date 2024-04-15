@extends('admin.layouts')
@section('content')

<div class="row">
    <div class="col-lg-12" margin-tb>
        <div class="pull-left">
            <h2> Add new Product </h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{route('home')}}">Back</a>
        </div>
    </div>
</div>

@if ($errors -> any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There are some problems <br><br>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="">
    {{--  ví dụ action= "{{route('admin.store')}}" --}}
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description</strong>
                <textarea name="description" class="form-control" placeholder="Description" style="height: 150px"> </textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price</strong>
                <input type="text" name="price" class="form-control" placeholder="Price">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Size</strong>
                <input type="text" name="size" class="form-control" placeholder="Size">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Quantity</strong>
                <input type="text" name="quantity" class="form-control" placeholder="Quantity">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image</strong>
                <input type="file" name="image" class="form-control" placeholder="Image">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection



