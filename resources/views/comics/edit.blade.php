@extends('layouts.app')

@section('main')
    <h4 class="mb-0 text-center mt-4">{{ $comicId->title }}</h4>

    <div class="contenitore-form">
        <form class="mt-0 m-5 " action="" method="post">
        <div class="mb-1">
            <label for="titolo" class="form-label">Titolo</label>
            <input type="text" name="title" class="form-control" id="titolo" value="{{ $comicId->title }}">
        </div>
        <div class="mb-1">
            <label for="image" class="form-label">link immagine</label>
            <input type="text" name="img" class="form-control" id="image" value="{{ $comicId->img }}">
        </div>
        <div class="mb-1">
            <label for="tipo" class="form-label">Tipo</label>
            <input type="text" name="type" class="form-control" id="tipo" value="{{ $comicId->type }}">
        </div>
        <div class="mb-1">
            <label for="date-sale" class="form-label">data sconto</label>
            <input type="text" name="sale_date" class="form-control" id="date-sale" value="{{ $comicId->sale_date }}">
        </div>
        <div class="mb-1">
            <label for="serie" class="form-label">Categoria</label>
            <input type="text" name="series" class="form-control" id="serie" value="{{ $comicId->series }}">
        </div>
        <div class="mb-1">
            <label for="prezzo" class="form-label">Prezzo</label>
            <input type="text" name="price" class="form-control" id="prezzo" value="{{ $comicId->price }}">
        </div>
        <div class="mb-1">
            <label for="descrizione" class="form-label">Descrizione</label>
            <textarea class="form-control" name="description" id="descrizione" rows="3" > {{ $comicId->description }}</textarea>
        </div>
        <input class="mt-2 btn btn-primary" type="submit" value="Submit">
    </form>
    </div>

@endsection
