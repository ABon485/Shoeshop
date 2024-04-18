@extends('admin.layouts')
@section( 'content')
<h2> DashBoard </h2>
<nav>
    <ul>
        <li><a href="#">
                <i class="fas fa-home"></i>
                <span class="nav-item">Home</span>
            </a></li>
        <li><a href="{{route('showUser')}}">
                <i class="fas fa-user"></i>
                <span class="nav-item">User</span>
            </a></li>
        <li><a href="{{route('showOrder')}}">
                <i class="fas fa-wallet"></i>
                <span class="nav-item">Order</span>
            </a></li>
        <li><a href="{{route('showProduct')}}">
                <i class="fas fa-chart-bar"></i>
                <span class="nav-item">Product</span>
            </a></li>
        <li><a href="{{route('home')}}" class="logout">
                <i class="fas fa-sign-out-alt"></i>
                <span class="nav-item mt-5">Log out</span>
            </a></li>
    </ul>
</nav>
<div class="dashborad">

</div>

@endsection