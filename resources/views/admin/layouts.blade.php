<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Layouts Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    
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
    </style>
</head>
<body>
        @yield('content')
</body>
</html>
