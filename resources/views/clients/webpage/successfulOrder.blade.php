@extends('clients.nabav.layout')
@section('title', 'Checkout')
@section('css')
    <link rel="stylesheet" href="/assets/css/sucessfulOrder.css">
@endsection
@section('content')
    <style>
        /* Container styles */
        .container-fluid {
            padding: 20px;
            background-color: gainsboro;
        }

        .content {
            background-color: #fff;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            text-align: center;

        }

        /* Heading styles */
        h1 {
            font-size: 36px;
            margin-bottom: 30px;
        }

        /* Logo styles */
        img {
            max-width: 200px;
            margin-bottom: 30px;
        }

        /* Form styles */
        .container {

            margin-top: 30px;
            /* display: flex; */
        }

        .row {
            margin-bottom: 20px;
            width: 300px;
        }

        .col {
            text-align: left;
            width: 700px;
            height: 200px;
        }

        /* Button styles */
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            padding: 10px 30px;
            font-size: 18px;
            border-radius: 5px;
            text-transform: uppercase;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        /* Text styles */
        p {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .text-success {
            color: #28a745;
            font-weight: bold;
        }
    </style>
    @php
        $partnerCode = $_GET['partnerCode'];
        $orderId = $_GET['orderId'];
        $requestId = $_GET['requestId'];
        $amount = $_GET['amount'];
        $orderInfo = $_GET['orderInfo'];
        $orderType = $_GET['orderType'];
        $transId = $_GET['transId'];
        $resultCode = $_GET['resultCode'];
        $message = $_GET['message'];
        $payType = $_GET['payType'];
        $responseTime = $_GET['responseTime'];
        $extraData = $_GET['extraData'];
        $signature = $_GET['signature'];
        $paymentOption = $_GET['paymentOption'];
    @endphp
    <div class="container-fluid" id="modelPayment">
        <div class="content">
            @if ($message == 'Successful.')
                <h1>Payment Successful !</h1><br><br>
                <img src="https://res.cloudinary.com/duas1juqs/image/upload/v1703351741/Web%20DDA%20COMECTIC/gurc3wpnyhzqpsdqibgd.png"
                    alt="logo"><br> <br>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <p>Payment type</p>
                            <p>Your name</p>
                            <p>Email </p>
                            <p>Amount paid </p>
                        </div>
                        <div class="col">
                            <p>{{ $payType }} </p>
                            <p>{{ $orderInfo }}</p>
                            <p>nhikhanh@123</p>
                            <p class="text-success">$ {{ $amount }}</p>
                        </div>
                    </div>
                    <div>
                        <div>
                            <a href="{{ route('homepage') }}" type="submit"
                                class="btn btn-primary font-weight-bold">SHOW</a>
                        </div>
                    </div>
                </div>
            @else
                <h1>Payment Failed !</h1><br><br>
                <img src="https://res.cloudinary.com/duas1juqs/image/upload/v1703325910/Web%20DDA%20COMECTIC/claem76qdwwlnmglebap.png"
                    alt="logo"><br> <br>
                <p>Sorry, your payment failed for some reason. <br>
                    - The order has been cancelled. <br>
                    - Internet connection is interrupted. <br>
                    You can re-order or try to test the connection.
                </p>
                <div>
                    <div style="margin-top: 40px">
                        <a href="{{ route('cart-page') }}" type="submit" class="btn btn-primary font-weight-bold">Return to
                            payment page</a>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
