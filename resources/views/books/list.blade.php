@extends('layout')

@section('content')
    <section class="flex flex-col justify-center items-center">
        <h1 class="flex justify-center text-white text-5xl pt-10 pb-10">Lista de Libros</h1>
        <div class="grid grid-cols-4 gap-4">
            @foreach ($books as $book)
                <div class="flex flex-col border border-slate-400 p-4 gap-4 rounded-lg">
                    <h1 class="text-white text-center text-2xl">{{ $book->title }}</h1>
                    <p class="text-white font-bold">Autor del libro: <span>{{ $book->author->name }}</span></p>
                    <p class="text-white font-bold">Categoría: {{ $book->category->name }}</p>
                    <p class="text-white font-bold">Editorial: {{ $book->publisher }}</p>
                    <p class="text-white font-bold">Fecha: {{ $book->publication_date }}</p>
                    <p class="text-white font-bold">N° páginas: {{ $book->pages }}</p>
                    <p class="text-white font-bold">País: {{ $book->country }}</p>

                    <button class="bg-red-700 text-white p-2 rounded-lg">
                        <a href="{{ route('posts.create', ['book_id' => $book->id, 'category_id' => $book->category->id]) }}"
                            class="btn btn-primary">Agregar Post</a>
                    </button>
                    <button class="bg-red-700 text-white p-2 rounded-lg">
                        <a href="{{ route('books.show_posts', ['book_id' => $book->id]) }}" class="btn btn-primary">Ver
                            Posts</a>
                    </button>
                </div>
            @endforeach
            <button class="bg-red-700 text-white p-2 rounded-lg">
                        <a href="{{ route('books.create') }}" class="btn btn-primary">
                            libro nuevo
                        </a>
                    </button>
                    <button class="bg-red-700 text-white p-2 rounded-lg">
                        <a href="{{ route('categories.create') }}" class="btn btn-primary">
                            nueva categoria
                        </a>
                    </button>
        </div>
    </section>
@endsection
