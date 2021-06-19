<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
    @include('partials.header')
    <div class="black-bg">
        <div class="container">
            <div class="current-series">
                <h2>CURRENT SERIES</h2>
            </div>


            <div class="card-container">
                @foreach($comics as $comic)
                <div class="card">
                    <a href="{{route("comics-info")}}">
                        <img src="{{ $comic['thumb'] }}" alt="">
                        <h2>{{ $comic['series'] }}</h2>
                    </a>
                </div>
                @endforeach
            </div>
            <div class="button">
                <p><a href="#">LOAD MORE</a></p>
            </div>
        </div>
    </div>
    <div class="blue-bg">
        <div class="container jumbo-bar">
            <img src="{{ asset('images/buy-comics-digital-comics.png') }}" alt="">
            <p>DIGITAL COMICS</p>
            <img src="{{ asset('images/buy-comics-merchandise.png') }}" alt="">
            <p>DC MERCHANDISE</p>
            <img src="{{ asset('images/buy-comics-subscriptions.png') }}" alt="">
            <p>SUBSCRIPTION</p>
            <img src="{{ asset('images/buy-comics-shop-locator.png') }}" alt="">
            <p>COMIC SHOP LOCATOR</p>
            <img src="{{ asset('images/buy-dc-power-visa.svg') }}" alt="">
            <p>DC POWER VISA</p>
        </div>
    </div>

    @include('partials.footer')
</body>
</html>
