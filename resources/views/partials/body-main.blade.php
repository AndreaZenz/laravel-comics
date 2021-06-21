<div class="black-bg">
        <div class="container">
            <div class="current-series">
                <h2>CURRENT SERIES</h2>
            </div>


            <div class="card-container">
                @foreach($comics as $index => $comic)
                <div class="card">
                    <a href="{{route("comics-info",['id' => $comic['id']]) }}">
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