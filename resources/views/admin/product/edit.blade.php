@extends('admin.layouts')
@section('content')

<div class="row">
    <div class="col-lg-12" margin-tb>
        <div class="pull-left">
            <h2> Edit Product </h2>
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

<form action="{{ route('updateProduct', $product->id) }}">
    {{-- ví dụ: action="{{route('admin.update', $manageProduct->id)}}" --}}
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name</strong>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ isset($product) ? $product->name :old('name') }}">
                {{--  cái này thuộc thẻ input nha: value={{$manageProduct->name}}  --}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description</strong>
                <textarea name="description" class="form-control" placeholder="Detail" value="{{ isset($product) ? $product->description :old('description') }}"style="height: 150px"> </textarea>
                {{-- cái này thuộc thẻ textarea nhe: Value={{$manageProduct->detail}} --}}
            </div>
        </div> 
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price</strong>
                <input type="text" name="price"  class="form-control" placeholder="Price">
                {{-- cái này thuộc thẻ input nha:value={{$manageProduct->price}}  --}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Size</strong>
                <input type="text" name="size"   class="form-control" placeholder="Size">
                {{-- cái này thuộc thẻ input nha:value={{$manageProduct->size}}   --}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Quantity</strong>
                <input type="text" name="quantity"   class="form-control" placeholder="Quantity">
                {{-- cái này thuộc thẻ input nha: value={{$manageProduct->quantity}}--}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image</strong>
                <input type="file" name="image"  class="form-control" placeholder="Image">
                {{-- cái này thuộc thẻ input nha: value={{$manageProduct->image}}  --}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection



