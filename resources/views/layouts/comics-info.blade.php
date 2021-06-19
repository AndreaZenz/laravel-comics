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
    <title>Comics info</title>
</head>
<body>
    @include('partials.header')
    <div class="blue-bar">
        <div class="container">
            <div class="comic-view">
                <small class="top">comic-book</small>
                <img src="" alt="">
                <small class="bottom">view-gallery</small>
            </div>
        </div>
    </div>
    <div class="container-less">
        <div class="single-comic">
            <div class="comics-info">
                <h1>ACTION COMICS#1000: THE DELUXE EDITION</h1>
                <div class="price">
                    <div class="us-price">
                        <span class="one">U.S Price: <span class="white">$19.99</span></span>
                        <span class="two">AVAILABLE</span>
                    </div>
                    <div class="check-available">
                        <span>Check availability</span>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, nisi. Excepturi vel ipsum sint at eius eos, ullam placeat nam est hic, ab quod impedit magnam reprehenderit! Modi, facere eveniet! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus deleniti beatae in assumenda repudiandae natus, aliquam dolorem distinctio voluptate fuga sit provident asperiores omnis dolorum earum! Dolore iusto nisi itaque!</p>
            </div>

            <div class="advertisement">
                <img src="{{ asset('images/adv.jpg') }}" alt="">
            </div>
        </div>
    </div>
    @include('partials.footer')
</body>
</html>
