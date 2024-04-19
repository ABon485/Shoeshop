@extends('admin.layouts')
@section('content')

<div class="row" margin-tb>
    <div class="pull-left col-5">
    </div>
    <div class="pull-left col-4 mt-5">
        <h2> Edit Product </h2>
    </div>
    <div class="pull-left col-2">
    </div>
</div>

<div class="container">
    <div class="pull-left col-4">
    </div>
    <div class="pull-left col-5">
        <form action="{{url('Product/'.$product->id.'/update') }}" method="POST" class="py-5 ml-5" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name" >Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ isset($product) ? $product->name :old('name') }}">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        
            <div class="form-group">
                <label for="description" >Description</label>
                <input type="text" class="form-control " id="description" name="description" value="{{ isset($product) ? $product->description :old('description') }}">
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        
            <div class="form-group">
                <label for="price" >Price</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ isset($product) ? $product->price :old('price') }}">
                @error('price')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
     
            <div class="form-group">
                <label for="promotion_price" >Promotion_price</label>
                <input type="text" class="form-control" id="promotion_price" name="promotion_price" value="{{ isset($product) ? $product->promotion_price :old('promotion_price') }}">
                @error('promotion_price')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
    
            <div class="form-group">
                <label for="size" >Size</label>
                <input type="text" class="form-control " id="size" name="size" value="{{ isset($product) ? $product->size :old('size') }}">
                @error('size')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
    
            <div class="form-group">
                <label for="quantity" >Quantity</label>
                <input type="text" class="form-control " id="quantity" name="quantity" value="{{ isset($product) ? $product->quantity :old('quantity') }}">
                @error('quantity')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="category">Category</label>
                <select class="form-control" id="category" name="category">
                    {{-- <option value="">Select category</option> --}}
                    <option value="Men" {{ (isset($product) && $product->category == 'Men') ? 'selected' : (old('category') == 'Men' ? 'selected' : '') }}>Men</option>
                    <option value="Women" {{ (isset($product) && $product->category == 'Women') ? 'selected' : (old('category') == 'Women' ? 'selected' : '') }}>Women</option>
                </select>
                @error('category')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
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
