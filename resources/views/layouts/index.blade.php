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
                        <img src="{{ $comic['thumb'] }}" alt="">
                        <h2>{{ $comic['type'] }}</h2>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>
