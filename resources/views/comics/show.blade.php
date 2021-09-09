@extends('layouts.app')

@section('main')
<div>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">IMG</th>
            <th scope="col">Title</th>
            <th scope="col">Tipo</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Data Vendita</th>
            <th scope="col">Serie</th>
            <th scope="col">€</th>
            </tr>
        </thead>
        <tbody>
                <tr class="overflow-hidden">
                    <th scope="row">{{ $comicId->id}}</th>
                    <td><img src="{{ $comicId->img}}" alt="{{ $comicId->title }}"> </td>
                    <td>{{ $comicId->title }}</td>
                    <td><p>{{ $comicId->type }}</p></td>
                    <td>{{ $comicId->description }}</td>
                    <td>{{ $comicId->sale_date }}</td>
                    <td>{{ $comicId->series }}</td>
                    <td>{{ $comicId->price }}</td>

                    <td class="text-center">
                        <a href="" class="btn btn-primary w-100 my-2">Edit</a>
                        <a href="" class="btn btn-danger w-100">Delete</a>
                    </td>
                </tr>
        </tbody>
    </table>

</div>

@endsection