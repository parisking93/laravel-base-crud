@extends('layouts.app')

@section('main')
    <h4 class="mb-0 text-center title-admn position-relative">{{ $comicId->title }}</h4>

    <div class="contenitore-form">
        <!-- passo alla route comic.update l'elemento tramite l'id  -->
        <form class="mt-0 m-5 h-100" action="{{ route('comics.update', $comicId -> id   ) }}" method="post">
            <!-- non dimenticare  -->
            @csrf
            @method('PUT')
            <!-- non dimenticare  -->

        <div class="mb-1 mx-4">

            
            <label for="titolo" class="form-label">Titolo</label>
            <input type="text" name="title" class="form-control" id="titolo" value="{{ $comicId->title }}">
        </div>
        <div class="mb-1 mx-4">
            <label for="image" class="form-label">link immagine</label>
            <input type="text" name="img" class="form-control" id="image" value="{{ $comicId->img }}">
        </div>
        <div class="mb-1 mx-4">
            <label for="tipo" class="form-label">Tipo</label>
            <input type="text" name="type" class="form-control" id="tipo" value="{{ $comicId->type }}">
        </div>
        <div class="mb-1 mx-4">
            <label for="date-sale" class="form-label">Data Sconto <span class="text-muted format"> formato : yyyy/mm/gg </span></label>
            <input type="text" name="sale_date" class="form-control" id="date-sale" value="{{ $comicId->sale_date }}">
        </div>
        <div class="mb-1 mx-4">
            <label for="serie" class="form-label">Categoria</label>
            <input type="text" name="series" class="form-control" id="serie" value="{{ $comicId->series }}">
        </div>
        <div class="mb-1 mx-4">
            <label for="prezzo" class="form-label">Prezzo</label>
            <input type="text" name="price" class="form-control" id="prezzo" value="{{ $comicId->price }}">
        </div>
        <div class="mb-1 mx-4">
            <label for="descrizione" class="form-label">Descrizione</label>
            <textarea class="form-control" name="description" id="descrizione" rows="3" > {{ $comicId->description }}</textarea>
        </div>
        <input class="mt-2 btn btn-primary mx-4" type="submit" value="Modifica">
    </form>
    </div>

@endsection
