@extends("layouts.public")

@section("content")

<div class="container f-flex justify-content-center">
    <a href={{ route("comics.index", ["id" => $comics->id]) }} class="btn btn-outline-primary">back</a>
  
        <img class="img-fluid" src="{{ $comic["image"] }}" alt="{{ $comic->title }}">
        <h3>{{ $comic->title }}</h3>
        <p>{{ $comic->series }}</p>
        <p>{{ $comic->sale_date }}</p>
        <p><strong>{{ $comic->type }}</strong></p>
        <p>{{!! $comic->description !!}}</p>
        <strong> {{ $comic->price }}$  </strong>
  </div>


@endsection