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
        <th scope="col">Serie</th>
        <th scope="col">€</th>


        </tr>
    </thead>
    <tbody>
        @foreach ($comic as $book)
            <tr class="overflow-hidden">
                <th scope="row">{{ $book->id}}</th>
                <td><img src="{{ $book->img}}" alt="{{ $book->title }}"> </td>
                <td>{{ $book->title }}</td>
                <td><p>{{ $book->type }}</p></td>
                <td>{{ $book->series }}</td>
                <td>{{ $book->price }}</td>

                <td class="text-center">
                    <a href="{{ route('comics.show', [ 'comic' => $book -> id])}}" class="btn btn-success w-100">Show</a>
                    <a href="{{ route('comics.edit', [ 'comic' => $book -> id])}}" class="btn btn-primary w-100 my-2">Edit</a>
                    <a href="" class="btn btn-danger w-100">Delete</a>
                </td>
            </tr>
        @endforeach

    </tbody>
    </table>
    @endsection


</div>
