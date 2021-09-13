@extends('layouts.app')


@section('main')

<div>
    <div class="box-message">
    @if(@session('modificato')) 
        <div class="badge alert-success">{{ @session('modificato') }}</div>
        
    @elseif (@session('nuovo'))
        <div class="badge alert-success">{{ @session('nuovo') }}</div>
    @elseif (@session('cancellato'))
        <div class="badge alert-danger">{{ @session('cancellato') }}</div>
    @endif
    </div>

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
                    <form class="w-100" action="{{ route('comics.destroy', [ 'comic' => $book -> id])}}" method="post">
                        @csrf
                        <!-- aggiungiamo il metodo delete perchè il form puo avere solo post and get  -->
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger w-100" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach

    </tbody>
    </table>
    @endsection


</div>
