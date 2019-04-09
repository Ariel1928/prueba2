@extends('books.layout')

@section('content')

<h1 class="text-center">libros</h1>



<div class="container">

<a class="btn btn-info mb-3" href="{{ route('books.create')}}">agregar libros</a>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Titulo</th>
      <th scope="col">Descripción</th>

    </tr>
  </thead>
  <tbody>

  @foreach($books as $book)


    <tr>
      <th scope="row">{{ $book->id}}</th>
      <td>{{ $book->Titulo}}</td>
      <td>{{ $book->Descripcion}}</td>

    </tr>
    @endforeach
  </tbody>
</table>
{{ $books->links() }}


@endsection 