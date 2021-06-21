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
<div class="container-splitter">
    <div class="splitter">
        <div class="half">
            <h2>Talent</h2>
            <div class="content border-top">
                <div class="title">
                    <p>Art by:</p>
                </div>
                <div class="title-text">
                    @for($i = 0; $i < count($comic['artists']); $i++) <a href="#">{{$comic['artists'][$i]}}</a><span>,</span>
                        @endfor
                </div>
            </div>
            <div class="content">
                <div class="title">
                    <p>Written by:</p>
                </div>
                <div class="title-text">
                    @for($i = 0; $i < count($comic['writers']); $i++) <a href="#">{{$comic['writers'][$i]}}</a><span>,</span>
                        @endfor
                </div>
            </div>
        </div>
        <div class="half">
            <h2>Specs</h2>
            <div class="content border-top">
                <div class="title">
                    Series:
                </div>
                <div class="title-text">
                    <a href="#">{{$comic['series']}}</a>
                </div>
            </div>
            <div class="content">
                <div class="title">
                    U.S Price:
                </div>
                <div class="title-text">
                    <a href="#">{{$comic['price']}}</a>
                </div>
            </div>
            <div class="content">
                <div class="title">
                    On Sale Date:
                </div>
                <div class="title-text">
                    <a href="#">{{$comic['sale_date']}}</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="comic-bar border-top">
    <div class="container-less h100">
        <div class="details">
            <p>DIGITAL COMICS</p>
            <img src="{{ asset('images/1.png') }}" alt="">
        </div>
        <div class="details">
            <p>SHOP DC</p>
            <img src="{{ asset('images/2.png') }}" alt="">
        </div>
        <div class="details">
            <p>COMIC SHOP LOCATOR</p>
            <img src="{{ asset('images/3.png') }}" alt="">
        </div>
        <div class="details">
            <p>SUBSCRIPTION</p>
            <img src="{{ asset('images/4.png') }}" alt="">
        </div>
    </div>
</div>
