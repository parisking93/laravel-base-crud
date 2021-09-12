@extends('layouts.app')

@section('main')
<div class="h-100">
    <h1 class="title  position-relative title-home ">Benvenuto scegli il tuo Comic Preferito</h1>
    <div class="d-flex flex-wrap h-100">
        @foreach ($comics as $comic)
        <div class="col-3 g-2 text-center">
            <img src="{{ $comic->img }}" alt="{{ $comic->title }}">
            <h4 class="mb-4">{{ $comic->title }}</h4>
        </div>
        @endforeach
    </div>
</div>
   
@endsection