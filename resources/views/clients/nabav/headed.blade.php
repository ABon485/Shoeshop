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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('asset/nabav/header.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/nabav/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/client/home.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/client/product.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/client/detail.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/auth/login.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/auth/register.css') }}">



    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>


<body>

    <div class="bon">
        <div class="navbar ">
            <div class="">
                <img class="" src="{{ asset('/images/Group 550.png') }}" alt="">
            </div>
            <div class="title_menu">
                <a class="p-3" href="{{ route('home') }}">Home</a>
                <a class="p-3" href="{{ route('product') }}">Product</a>
                <a class="p-3" href="#">Contact</a>


            </div>
            <div class="search">
                <div class="input m-4">
                    <a href=""><i class="fa fa-search" aria-hidden="true"></i></a>
                    <input type="text" id="VisualSearchInput" class="pre-search-input headline-5" name="search"
                        autocomplete="off" data-var="vsInput" tabindex="0" placeholder="Search"
                        aria-label="Search Products" role="combobox" aria-controls="VisualSearchSuggestionsList"
                        aria-owns="VisualSearchSuggestionsList" aria-expanded="false">
                </div>
                @if (Auth::check())
                    <a class="header-icon header-icon-user" href=""><i class="fa fa-user"
                            aria-hidden="true"></i>{{ Auth::user()->name }}</a>
                    <a class="btn btn-secondary btn-icon" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i> Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @else
                    <a class="btn btn-danger btn-icon m-3" href="{{ route('login') }}">Login</a>
                    <a class="btn btn-success btn-icon" href="{{ route('register') }}">Register</a>
                @endif
            </div>
            <div>
                <a href=""><i class="fa fa-heart"
                        style="color: rgb(158, 139, 139); font-size: 20px; margin-left:150px;"
                        aria-hidden="true"></i>Favorite</a>
            </div>
            <div class="">
                <svg aria-hidden="true" class="pre-nav-design-icon" focusable="false" viewBox="0 0 24 24" role="img"
                    width="24px" height="24px" fill="none">
                    <path stroke="currentColor" stroke-width="1.5"
                        d="M8.25 8.25V6a2.25 2.25 0 012.25-2.25h3a2.25 2.25 0 110 4.5H3.75v8.25a3.75 3.75 0 003.75 3.75h9a3.75 3.75 0 003.75-3.75V8.25H17.5">
                    </path>
                </svg>
                <span class="pre-jewel pre-cart-jewel text-color-primary-dark"
                    style="visibility: visible;"data-var="jewel">1</span>
            </div>

        </div>
    </div>


</body>
