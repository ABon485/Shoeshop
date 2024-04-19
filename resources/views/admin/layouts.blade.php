<span style="font-family: verdana, geneva, sans-serif;">
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Layouts Admin</title>
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
        <style>
            @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");

            * {
                margin: 0;
                padding: 0;
                outline: none;
                border: none;
                text-decoration: none;
                list-style: none;
                box-sizing: border-box;
                font-family: "Poppins", sans-serif;
            }

            body {
                background: rgb(233, 233, 233);
            }

            .container {
                display: flex;
                width: 1200px;
                margin: auto;
            }

            nav {
                position: sticky;
                top: 0;
                left: 0;
                bottom: 0;
                width: 280px;
                height: 110vh;
                background: #fff;
            }

            .navbar {
                width: 80%;
                margin: 0 auto;
            }

            ul {
                margin: 0 auto;
            }

            li {
                padding-bottom: 2rem;
            }

            li a {
                font-size: 16px;
                color: rgb(85, 83, 83);
            }

            nav i {
                width: 50px;
                font-size: 18px;
                text-align: center;
            }

            .logout {
                position: absolute;
                bottom: 475px;
            }

            /* ===================ADMIM Layout=========== */
            <style><span style="font-family: verdana, geneva, sans-serif;">
            /*  import google fonts */
            @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");

            * {
                margin: 0;
                padding: 0;
                border: none;
                outline: none;
                text-decoration: none;
                box-sizing: border-box;
                font-family: "Poppins", sans-serif;
            }

            body {
                background: rgb(219, 219, 219);
            }

            .header {
                display: flex;
                align-items: center;
                justify-content: space-between;
                height: 60px;
                padding: 20px;
                background: #fff;
            }

            .logo {
                display: flex;
                align-items: center;
            }

            .logo a {
                color: #000;
                font-size: 18px;
                font-weight: 600;
                margin: 2rem 8rem 2rem 2rem;
            }

            .search_box {
                display: flex;
                align-items: center;
            }

            .search_box input {
                padding: 9px;
                width: 250px;
                background: rgb(228, 228, 228);
                border-top-left-radius: 5px;
                border-bottom-left-radius: 5px;
            }

            .search_box i {
                padding: 0.66rem;
                cursor: pointer;
                color: #fff;
                background: #000;
                border-top-right-radius: 5px;
                border-bottom-right-radius: 5px;
            }

            .header-icons {
                display: flex;
                align-items: center;
            }

            .header-icons i {
                margin-right: 2rem;
                cursor: pointer;
            }

            .header-icons .account {
                width: 130px;
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .header-icons .account img {
                width: 35px;
                height: 35px;
                cursor: pointer;
                border-radius: 50%;
            }

            .con {
                margin-top: 10px;
                display: flex;
                justify-content: space-between;
                padding-right: 300px;
            }

            /* Side menubar section */
            nav {
                background: #fff;
            }

            .side_navbar {
                padding: 1px;
                display: flex;
                flex-direction: column;
            }

            .side_navbar span {
                color: gray;
                margin: 1rem 3rem;
                font-size: 12px;
            }

            .side_navbar a {
                width: 100%;
                padding: 0.8rem 3rem;
                font-weight: 500;
                font-size: 15px;
                color: rgb(100, 100, 100);
            }

            .links {
                margin-top: 5rem;
                display: flex;
                flex-direction: column;
            }

            .links a {
                font-size: 13px;
            }

            .side_navbar a:hover {
                background: rgb(235, 235, 235);
            }

            .side_navbar .active {
                border-left: 2px solid rgb(100, 100, 100);
            }

            /* Main Body Section */
            .main-body {
                width: 70%;
                padding: 1rem;
            }

            .promo_card {
                width: 100%;
                color: #fff;
                margin-top: 10px;
                border-radius: 8px;
                padding: 0.5rem 1rem 1rem 3rem;
                background: rgb(37, 37, 37);
            }

            .promo_card h1,
            .promo_card span,
            button {
                margin: 10px;
            }

            .promo_card button {
                display: block;
                padding: 6px 12px;
                border-radius: 5px;
                cursor: pointer;
            }

            .history_lists {
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .row {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin: 1rem 0;
            }

            table {
                background: #fff;
                padding: 1rem;
                text-align: left;
                border-radius: 10px;
            }

            table td,
            th {
                padding: 0.2rem 0.8rem;
            }

            table th {
                font-size: 15px;
            }

            table td {
                font-size: 13px;
                color: rgb(100, 100, 100);
            }



            /* Sidebar Section */
            .sidebar {
                width: 15%;
                padding: 2rem 1rem;
                background: #fff;
            }

            .sidebar h4 {
                margin-bottom: 1.5rem;
            }

            .sidebar .balance {
                display: flex;
                align-items: center;
                margin-bottom: 1rem;
            }

            .balance .icon {
                color: #fff;
                font-size: 20px;
                border-radius: 6px;
                margin-right: 1rem;
                padding: 1rem;
                background: rgb(37, 37, 37);
            }

            .balance .info h5 {
                font-size: 16px;
            }

            .balance .info span {
                font-size: 14px;
                color: rgb(100, 100, 100);
            }

            .balance .info i {
                margin-right: 2px;
            }

            </span>
        </style>
    </head>

    <body>

        <body>
            <header class="header">
                <div class="logo">
                    <a href="#">SHOE SHOP</a>

                </div>

                @if (Auth::check())
                    <a class="header-icon header-icon-user" href=""><i class="fa fa-user"
                            aria-hidden="true"></i>{{ Auth::user()->name }}</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @else
                    <a class="btn btn-danger btn-icon m-3" href="{{ route('login') }}">Login</a>
                @endif
            </header>
            <div class="con">
                <nav>
                    <div class="side_navbar">
                        <span>Main Menu</span>
                        <a href="{{ route('home') }}" class="active">Dashboard</a>
                        <a href="{{ route('index') }}">User</a>
                        <a href="{{ route('showOrder') }}">Order</a>
                        <a href="{{ route('showProduct') }}">Product</a>
                        <a href="{{ route('logout.admin') }}">Log out</a>
                    </div>
                </nav>

                <div class="main-body">
                    <h2>Dashboard</h2>
                    <div class="promo_card">
                        <h1>Welcome to SHOE SHOP</h1>
                        <span>Lorem ipsum dolor sit amet.</span>
                        <button>Learn More</button>
                    </div>

                    @yield('content')
                </div>
            </div>
        </body>
    </body>

    </html>
