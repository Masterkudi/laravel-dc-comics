@extends('layouts.public')

@section('content')
    <div class="jumbo-container">
        <img class="jumbotron" src="/img/jumbotron.jpg" alt="">
    </div>
    <div class="gallery">
        <div class="gallery d-flex">
            <div class="row row-cols-4 g-5 justify-content-center">
    
                @foreach ($comics as $comic)
                    <div class="col">
                        <div class="card p-3 bg-white">
                            <div class="card-body">
                                <img src="{{ $comic['thumb'] }}" alt="comic-img">
                                <h3 class="card-title">{{ $comic->title }}</h3>
                                <h4 class="card-subtitle mb-2 text-body-secondary">{{ $comic->price }}</h4>
                                <p class="card-text">series: {{ $comic->series }}</p>
                                <p class="card-text">date: {{ $comic->sale_date }}</p>
                                <p class="card-text">comic type: <strong>{{ $comic->type }}</strong></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="btn btn-primary text-white text-center rounded">
        LOAD MORE
    </div>
    </div>

    <ul class="banner nav flex-row">
        <li class="nav-item"><a href="#" class="nav-link"><img src="/img/buy-comics-digital-comics.png"
                    alt="">
                DIGITAL COMICS</a></li>
        <li class="nav-item"><a href="#" class="nav-link"><img src="/img/buy-comics-merchandise.png" alt="">DC
                MERCHANDISE</a></li>
        <li class="nav-item"><a href="#" class="nav-link"><img src="/img/buy-comics-subscriptions.png"
                    alt="">SUBSCRIPTION</a></li>
        <li class="nav-item"><a href="#" class="nav-link"><img src="/img/buy-comics-shop-locator.png"
                    alt="">COMIC
                SHOP LOCATION</a></li>
        <li class="nav-item"><a href="#" class="nav-link"><img src="/img/buy-dc-power-visa.svg" alt="">DC
                POWER
                VISA</a></li>
    </ul>
@endsection
