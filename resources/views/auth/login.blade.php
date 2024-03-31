@extends('nabav.layout')
@section('content')
    <div class="container">
        <h2> Login </h2>
        @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <form method="POST" action="">
            @csrf
            <div class="mb-3" style="width : 500px">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" placeholder="email">
                <span class="text-danger">@error('email') {{$message}} @enderror</span>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" placeholder="password">
                <span class="text-danger">@error('password') {{$message}} @enderror</span>
                
            </div>
            <button type="submit" class="btn btn-primary">Login

            </button>
        </form>
    </div>
@endsection
