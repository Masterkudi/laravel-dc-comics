@extends('layouts.public')

@section('content')
    <div class="container">

        <!-- AGGIUNGO UN FORM PER CREARE NUOVI DATI -->

        <form action="{{ route('comics.store') }}" method="POST">
            @csrf()

            <h1 class="title text-center m-4">Insert new Comic</h1>

            <div class="mb-3"><label class="form-label">title</label><input type="text" class="form-control" name="title">
            </div>
            <div class="mb-3"><label class="form-label">image</label><input type="text" class="form-control"
                    name="image"></div>
            <div class="mb-3"><label class="form-label">description</label>
                <textarea class="form-control" name="description"></textarea>
            </div>
            <div class="mb-3"><label class="form-label">price</label><input type="number" class="form-control"
                    name="price"></div>
            <div class="mb-3"><label class="form-label">series</label><input type="text" class="form-control"
                    name="series"></div>
            <div class="mb-3"><label class="form-label">sale date</label><input type="date" class="form-control"
                    name="sale date"></div>
            <div class="mb-3"><label class="form-label">type</label>
                <select class="form-select" name="type">
                    <option value="comic book">Comic Book</option>
                    <option value="graphic novel">Graphic Novel</option>
                </select>
                @error('type')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="buttons mt-5 mb-5">
                <button class="btn btn-primary text-white text-center rounded p-2">SAVE</button>
                <a class="btn btn-secondary text-white text-center rounded p-2" href={{ route('comics.index') }}>CANCEL</a
                    class="buttons mt-3">
            </div>
        </form>
    </div>
@endsection
