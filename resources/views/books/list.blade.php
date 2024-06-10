@extends('layout')

@section('content')
    <section class="flex flex-col justify-center items-center">
        <h1 class="flex justify-center text-white text-5xl pt-10 pb-10">Lista de Libros</h1>
        <div class="grid grid-cols-4 gap-4">
            @foreach ($books as $book)
                <div class="flex flex-col border border-black p-4 gap-4 rounded-lg bg-red-600">
                    <div class="h-16 w-full">
                        <h1 class="text-white text-center text-2xl font-bold">{{ $book->title }}</h1>
                    </div>
                    <p class="text-white font-bold">Autor del libro: <span>{{ $book->author->name }}</span></p>
                    <p class="text-white font-bold">Categoría: {{ $book->category->name }}</p>
                    <p class="text-white font-bold">Editorial: {{ $book->publisher }}</p>
                    <p class="text-white font-bold">Fecha: {{ $book->publication_date }}</p>
                    <p class="text-white font-bold">N° páginas: {{ $book->pages }}</p>
                    <p class="text-white font-bold">País: {{ $book->country }}</p>

                    <button class="bg-blue-500 text-white p-2 rounded-lg">
                        <a href="{{ route('posts.create', ['book_id' => $book->id, 'category_id' => $book->category->id]) }}"
                            class="btn btn-primary">Agregar Post</a>
                    </button>
                    <button class="bg-blue-500 text-white p-2 rounded-lg">
                        <a href="{{ route('books.show_posts', ['book_id' => $book->id]) }}" class="btn btn-primary">Ver
                            Posts</a>
                    </button>
                </div>
            @endforeach
            </div>
            <div class="grid grid-cols-4 gap-4 mt-6 mb-6">
            <button class="bg-red-700 text-white p-2 rounded-lg m-6" >
                        <a  class="btn btn-primary"href="{{ route('books.create') }}">
                            libro nuevo
</a>
                    </button>
                    <button class="bg-red-700 text-white p-2 rounded-lg m-6" >
                        <a  class="btn btn-primary"href="{{ route('categories.create') }}">
                            nueva categoria
</a>
                    </button>
                    <button class="bg-red-700 text-white p-2 rounded-lg mr-6" >
                        <a  class="btn btn-primary" href="{{ route('author.create') }}">
                            añadir autor
</a>
                    </button>
</div> 
    </section>
@endsection
