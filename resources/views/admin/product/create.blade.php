@extends('admin.layouts')
@section('content')


    <div class="row" margin-tb>
        <div class="pull-left col-5">
        </div>
        <div class="pull-left col-4 mt-5">
            <h2> Add new Product </h2>
        </div>
        <div class="pull-left col-2">
        </div>
    </div>


<div class="container">
    <div class="pull-left col-4">
    </div>
    <div class="pull-left col-5">
        <form action="{{route('Product.store') }}" method="POST" class="py-5 ml-5" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name" >Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        
            <div class="form-group">
                <label for="description" >Description</label>
                <input type="text" class="form-control " id="description" name="description" value="{{ old('description') }}">
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        
            <div class="form-group">
                <label for="price" >Price</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}">
                @error('price')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
     
            <div class="form-group">
                <label for="promotion_price" >promotion_price</label>
                <input type="text" class="form-control" id="promotion_price" name="promotion_price" value="{{ old('promotion_price') }}">
                @error('promotion_price')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
    
            <div class="form-group">
                <label for="size" >Size</label>
                <input type="text" class="form-control " id="size" name="size" value="{{ old('size') }}">
                @error('size')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
    
            <div class="form-group">
                <label for="quantity" >Quantity</label>
                <input type="text" class="form-control " id="quantity" name="quantity" value="{{ old('quantity') }}">
                @error('quantity')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
    
            <div class="form-group">
                <strong>Category</strong>
                <select name="category" class="form-control">
                    <option value="men">Men</option>
                    <option value="women">Women</option>
                </select>
            </div>
    
            <div class="form-group">
                <label for="image" >Image</label>
                <input type="file" class="form-control-file " id="image" name="image">
                <img id="preview" style="display: none; max-width: 200px; max-height: 200px;" />
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        
            <div class="form-group">
                <input type="submit" name="submit"  class="btn btn-primary">
            </div>
        </form>
    </div>
    <div class="pull-left col-3">
    </div>
</div>


@endsection



