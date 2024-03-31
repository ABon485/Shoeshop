@extends('nabav.layout')
@section('content')
<div class="container">
    <form method="POST" action="">
        @csrf
        <div class="mb-3" style="width : 500px">
          <label for="exampleInputEmail1" class="form-label">Full name</label>
          <input type="text" class="form-control" name="name"placeholder="name">
        </div>
        {{-- <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Phone number</label>
            <input type="" class="form-control" name="phone" placeholder="phone number">
          </div> --}}
        <div class="mb-3" style="width : 500px">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email"placeholder="email">
          </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" placeholder="password">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"> Confim Password</label>
            <input type="password" class="form-control" name="password" placeholder="password">
          </div>

        <button type="submit" class="btn btn-primary">Register</button>
      </form>
</div>
@endsection