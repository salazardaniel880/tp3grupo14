@extends('layout')

@section('content')
    <section class="flex flex-col justify-center items-center">
        <h1 class="flex justify-center text-white text-5xl pt-10 pb-10">Lista de Libros</h1>
        <div class="  justify-between ">
        <x-dropdown class="m-16">
                    <x-slot name="trigger">
                        <button
                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                <div>
                                    Categorias
                                </div>
                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                        </button>
                    </x-slot>
                    <x-slot name="content">
                        @foreach($category as $cate)
                        <x-dropdown-link :href="route('books.list',['id_category'=>$cate->id])">
                                {{$cate->name}}
                            </x-dropdown-link>
                        @endforeach
                    </x-slot>
        </x-dropdown>
        <x-dropdown class="m-16">
                    <x-slot name="trigger">
                        <button
                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150 mt-6">
                                <div>
                                    autores
                                </div>
                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                        </button>
                    </x-slot>
                    <x-slot name="content">
                        @foreach($autor as $au)
                        <x-dropdown-link :href="route('books.list',['autor_id'=>$au->id])">
                                {{$au->name}}
                            </x-dropdown-link>
                        @endforeach
                    </x-slot>
        </x-dropdown>
        </div>
        <div class="grid grid-cols-4 gap-4 mt-6">
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
