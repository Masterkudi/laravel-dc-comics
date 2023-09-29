@extends('layouts.public')

@section('content')
    <div class="container card-container">
        <div class="row row-cols-3 g-5 justify-content-center">

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
@endsection
