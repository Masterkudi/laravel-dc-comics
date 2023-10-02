@extends('layouts.public')

@section('content')
    <div class="container">
        <a href="{{ route('comics.index', ['id' => $comics->id]) }}" class="btn btn-outline-primary">back</a>


        <img class="img-fluid" src="{{ $comics->image }}" alt="{{ $comics->title }}">
        <h3>{{ $comics->title }}</h3>
        <p>{{ $comics->series }}</p>
        <p>{{ $comics->sale_date }}</p>
        <p><strong>{{ $comics->type }}</strong></p>
        <strong> {{ $comics->price }}$ </strong>
        <p>{{ $comics->description }}</p>
    </div>
@endsection

