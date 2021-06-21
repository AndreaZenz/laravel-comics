@php
    $routeName = Request::route()->getName();
@endphp


<header>
    <div class="blue-header">
    <div class="container small-container">
        <p>DC POWER**VISA</p>
        <p>ADDITIONAL DC SITE</p>
    </div>
    </div>
    <div class="container navbar">
        <img src="{{ asset('images/dc-logo.png') }}" alt="DC">
        <h3><a href="">CHARACTERS</a></h3>
        <h3><a class="{{ $routeName == 'pagina-comics' ? 'active' : ''}}" href="{{route("pagina-comics")}}">COMICS</a></h3>
        <h3><a href="">MOVIES</a></h3>
        <h3><a href="">TV</a></h3>
        <h3><a href="">GAMES</a></h3>
        <h3><a href="">COLLECTIBLES</a></h3>
        <h3><a href="">VIDEOS</a></h3>
        <h3><a href="">FANS</a></h3>
        <h3><a href="">NEWS</a></h3>
        <h3><a href="">SHOP</a></h3>
        <div class="blue-line">
        <h3>Search <i class="fa fa-search" aria-hidden="true"></i></h3>
        </div>
    </div>
    <div class="jumbotron">
        <img src="{{ asset('images/jumbotron.jpg') }}" alt="" class="jumbotron-img">
    </div>
</header>
