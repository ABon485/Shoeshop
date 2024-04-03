<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="asset/nabav/header.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="asset/nabav/footer.css">
    <link rel="stylesheet" href="asset/client/home.css">
    <link rel="stylesheet" href="asset/client/product.css">
    <link rel="stylesheet" href="asset/auth/login.css">
    <link rel="stylesheet" href="asset/auth/register.css">


    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>


<body>

    <div class="container ">
        <div class="navbar">
            <div class="img">
                <img src="{{ asset('/images/Group 550.png') }}" alt="">
            </div>
            <div class="search">
                <input class="btn " type="text" name="search" placeholder="Search..">
            </div>
            <div class="title_menu">
                <a class="p-3" href="#">Home</a>
                <a class="p-3" href="#">Product</a>
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
                    <a class="btn btn-secondary btn-icon" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i>
                        Login</a>
                    <a class="btn btn-secondary btn-icon" href="{{ route('register') }}"><i
                            class="fas fa-user-plus"></i> Register</a>
                @endif
            </div>



        </div>
    </div>

</body>


