
<header>
    @include('nabav.headed')
</header>

@yield('content')
<div class="container mt-5">
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

<footer>
    @include('nabav.footer')
</footer>
