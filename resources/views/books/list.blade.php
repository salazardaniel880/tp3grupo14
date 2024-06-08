@extends('layout')

@section('content')
    <h1>Lista de Libros</h1>
    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>Categoría</th>
                <th>Editorial</th>
                <th>Fecha de Publicación</th>
                <th>Páginas</th>
                <th>País</th>
                <th>Acciones</th> <!-- Agregado para los botones -->
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author->name }}</td>
                    <td>{{ $book->category->name }}</td>
                    <td>{{ $book->publisher }}</td>
                    <td>{{ $book->publication_date }}</td>
                    <td>{{ $book->pages }}</td>
                    <td>{{ $book->country }}</td>
                    <td>
                        <a href="{{ route('posts.create', ['book_id' => $book->id, 'category_id' => $book->category->id]) }}"
                            class="btn btn-primary">Agregar Post</a>
                        <a href="{{ route('books.show_posts', ['book_id' => $book->id]) }}" class="btn btn-primary">Ver
                            Posts</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
