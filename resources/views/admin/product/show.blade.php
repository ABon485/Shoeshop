@extends('admin.layouts')

@section('content')
    <div class="p-lg-5 d-flex flex-column pt-5">

        <h2>Show Product</h2>


        <div class="d-flex flex-row align-items-center row">
            <div class="col-2">
                <a class="btn btn-success justify-content-start" href="{{ route('createProduct') }}">Create</a>
            </div>
            <div class="col-9"></div>
            <div class="col-1">
                <a class="btn btn-success flex " href="{{ route('home') }}">Back</a>
            </div>
        </div>


        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Promotion_price</th>
                    <th>Size</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td> <a name="" id="" href="#"
                                role="button">{{ $product->id }}</a></td>
                        <td><img src="{{ asset('/images/' . $product->image) }}" class="img-fluid" alt="Hình ảnh xe"></td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->promotion_price }}</td>
                        <td>{{ $product->size }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>{{ $product->Size }}</td>
                        <td><a class="btn btn-success" href="{{ route('editProduct', $product->id) }}"> Edit </a>
                        </td>
                        <td><a class="btn btn-success" href="{{ route('deleteProduct', $product->id) }}"> Delete </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
