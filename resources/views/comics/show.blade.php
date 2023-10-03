@extends('layouts.public')

@section('content')
    <div class="bg p-4">
        <div class="container">
            <img class="img-fluid" src="{{ $comics->image }}" alt="{{ $comics->title }}">
            <div class="mt-5">
                <h3>{{ $comics->title }}</h3>
                <p>{{ $comics->series }}</p>
                <p>{{ $comics->sale_date }}</p>
                <p><strong>{{ $comics->type }}</strong></p>
                <p>{{ $comics->description }}</p>
                <strong> {{ $comics->price }}$ </strong>
            </div>
        </div>
    </div>

    <div class="p-4 ms-5">
        <a href="{{ route('comics.index', ['id' => $comics->id]) }}" class="btn btn-primary">back</a>
    </div>
    
@endsection

