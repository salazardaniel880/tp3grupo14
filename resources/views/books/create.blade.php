@extends('layout')

@section('content')

<section class="flex flex-col justify-center items-center">
        <h1 class="flex justify-center text-white text-5xl pt-10 pb-10">crear Libros</h1>
        <form action="{{ route('books.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" class="form-control" id="titulo" name="titulo" required>
            </div>
            <div class="form-group">
                <label for="type">Tipo</label>
                <input type="text" class="form-control" id="type" name="type" required>
            </div>
            <div class="form-group">
                <label for="author_id">Autor</label>
                <select class="form-control" id="author_id" name="author_id" required>
                    @foreach($autores as $autor)
                        <option value="{{ $autor->id }}">{{ $autor->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="category_id">categoria</label>
                <select class="form-control" id="category_id" name="category_id" required>
                    @foreach($categoria as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="publication_date">fecha de publicacion</label>
                <input type="date" class="form-control" id="publication_date" name="publication_date" required>
            </div>
            <div class="form-group">
                <label for="original_title">titulo original</label>
                <input type="text" class="form-control" id="original_title" name="original_title" required>
            </div>
            <div class="form-group">
                <label for="pages">cantida de paginas</label>
                <input type="number" class="form-control" id="pages" name="pages" required>
            </div>
            <div class="form-group">
                <label for="country">pais donde se escrivio el libro</label>
                <input type="text" class="form-control" id="country" name="country" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
</section>
        @endsection