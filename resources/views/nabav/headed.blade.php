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
    <link rel="stylesheet" href="asset/nabav/header.css">
    <link rel="stylesheet" href="asset/nabav/footer.css">
    <link rel="stylesheet" href="asset/client/home.css">
    <link rel="stylesheet" href="asset/client/product.css">

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
                <a class="p-3" href="{{route('home')}}">Home</a>
                <a class="p-3"href="{{route('product')}}">Product</a>
                <a class="p-3"href="">Contact</a>
                <a class="pl-3 pr-3  btn btn-secondary "href="">Login</a>
                <button class="btn btn-primary ">Register</button>
            </div>
        </div>
    </div>

</body>
<div class="container title mt-5">
    <div class="row">
        <div class="col-6 mt-5">
            <div class="title_paragraph mt-5">
                <h1>Air Jordan 1 Hi FlyEase</h1>
                <p>These are the best shoes ever madafaka buy these or I will come to your house, so you better be
                    buying it ok. <br>
                    Hope you like it.</p>
                <button class="btn btn-success">Buy now</button>
            </div>
        </div>
        <div class="col-6">
            <div class="img">
                <img class="img_shoes" src="{{ asset('/images/Aire Jordan Nike.png') }}" alt="">
            </div>
        </div>
    </div>
</div>

