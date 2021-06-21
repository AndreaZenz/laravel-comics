<div class="blue-bar">
    <div class="container">
        <div class="comic-view">
            <small class="top">comic-book</small>
            <img src="{{$comic['thumb']}}" alt="">
            <small class="bottom">view-gallery</small>
        </div>
    </div>
</div>
<div class="full">
    <div class="container-less">
        <div class="single-comic">
            <div class="comics-info">
                <h1>{{$comic['title']}}</h1>
                <div class="price">
                    <div class="us-price">
                        <span class="one">U.S Price: <span class="white">{{$comic['price']}}</span></span>
                        <span class="two">AVAILABLE</span>
                    </div>
                    <div class="check-available">
                        <span>Check availability</span>
                    </div>
                </div>
                <p>{{$comic['description']}}</p>
            </div>

            <div class="advertisement">
                <h3>ADVERTISEMENT</h3>
                <img src="{{ asset('images/pippo.jpg') }}" alt="???">
            </div>
        </div>
    </div>
</div>
<div class="container splitter">
    <div class="half">
        <h2>Talent</h2>
        <div class="content">
            <p>Art by:</p>
            @foreach($comic as $artist)
                <a href=""></a>
            @endforeach
            <a href="#"></a>
        </div>
        <div class="content">
            <p>Written by:</p>
            <a href="#">{{ $comic['writers'] }}</a>
        </div>
    </div>
    <div class="half">
        <h2>Specs</h2>
    </div>
</div>
