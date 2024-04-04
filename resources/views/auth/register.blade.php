@extends('nabav.layout')
@section('content')
<div class="container">
  <form method="POST" action="{{ route('register') }}">
      @csrf
      <div class="mb-3">
          <label for="exampleInputName" class="form-label">Full name</label>
          <input type="text" class="form-control" name="name" placeholder="Enter your full name" value="{{ old('name') }}">
          @error('name')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
      </div>
      <div class="mb-3">
          <label for="exampleInputEmail" class="form-label">Email address</label>
          <input type="email" class="form-control" name="email" placeholder="Enter your email" value="{{ old('email') }}">
          @error('email')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
      </div>
      <div class="mb-3">
          <label for="exampleInputPassword" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" placeholder="Enter your password">
          @error('password')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
      </div>
      <div class="mb-3">
          <label for="exampleInputConfirmPassword" class="form-label">Confirm Password</label>
          <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm your password">
      </div>
      <button type="submit" class="btn btn-primary">Register</button>
  </form>
</div>
@endsection
