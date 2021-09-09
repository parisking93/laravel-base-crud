@extends('layouts.app')

@section('main')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($comic as $book)
        <tr>
            <th scope="row">{{ $book->id}}</th>
            <td><img src="{{ $book->img}}" alt="{{ $book->title }}"> </td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->description }}</td>
            <td>{{ $book->series }}</td>
            <td>{{ $book->price }}</td>
            <td>@mdo</td>

            <td class="text-center">
                <a href="" class="btn btn-success w-100">Show</a>
                <a href="" class="btn btn-primary w-100 my-2">Edit</a>
                <a href="" class="btn btn-danger w-100">Delete</a>
            </td>
        </tr>
    @endforeach

  </tbody>
</table>
@endsection
