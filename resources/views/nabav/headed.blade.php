<!doctype html>
<html lang="en">
  <head>
    <title>Shoes Shop</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('asset/nabav/header.css')}}">
    <link rel="stylesheet" href="{{asset('asset/nabav/footer.css')}}">
    <link rel="stylesheet" href="{{asset('asset/client/home.css')}}">
    <link rel="stylesheet" href="{{asset('asset/client/product.css')}}">
    <link rel="stylesheet" href="{{asset('asset/client/detail.css')}}">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>


<body>

    <div class="container ">
        <div class="navbar row">
            <div class="img col-3">
                <img class="mt-5" src="{{ asset('/images/Group 550.png') }}" alt="">
            </div>
            <div class="search col-3">
                <input class="btn " type="text" name="search" placeholder="Search..">
            </div>
            <div class="title_menu">
                <a class="p-3" href="{{route('home')}}">Home</a>
                <a class="p-3" href="{{route('product')}}">Product</a>
                <a class="p-3" href="#">Contact</a>
                @if (Auth::check())
                    <a class="header-icon header-icon-user" href=""><i class="fa fa-user" aria-hidden="true"></i>{{ Auth::user()->name }}</a>
                    <a class="btn btn-secondary btn-icon" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i> Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @else
                    <a class="btn btn-danger btn-icon" href="{{ route('login') }}">Login</a>
                    <a class="btn btn-success btn-icon" href="{{ route('register') }}">Register</a>
                @endif
            </div>



        </div>
    </div>
    

</body>


