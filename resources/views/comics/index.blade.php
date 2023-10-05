@extends('layouts.public')

@section('content')
    <div class="jumbo-container">
        <img class="jumbotron" src="/img/jumbotron.jpg" alt="">
    </div>
    <div>
        <div class="gallery">
            <div class="gallery">
                <div class="row row-cols-4 g-4 justify-content-center">

                    @foreach ($comics as $comic)
                        <div class="col">
                            <div class="card p-2">
                                <img src="{{ $comic["image"] }} alt="comic-img">
                                <div class="card-body bg-white text-center">
                                    <a href="{{ route("comics.show", $comic->id) }}"></a>
                                    <h5 class="card-title">
                                        <a href="{{ route("comics.show", $comic->id) }}">{{ $comic->title }}</a>
                                    </h5>
                                    <!-- <p class="card-text">{{ $comic->series }}</p>
                                        <p class="card-text">{{ $comic->sale_date }}</p>
                                        <p class="card-text"><strong>{{ $comic->type }}</strong></p>
                                        <p class="card-text">{{ $comic->description }}</p>
                                    </div>
                                    <div class="card-footer">
                                        <strong> {{ $comic->price }}$  </strong> -->
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class=" d-flex justify-content-center">
                    <div class="btn btn-primary text-white text-center rounded p-2 mt-5">LOAD MORE
                    </div>
                </div>
            </div>
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
