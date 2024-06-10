@extends('layout')

@section('content')
<section class="flex flex-col justify-center items-center">

    <h1 class="flex justify-center text-white text-5xl pt-10 pb-10">Crear Categoría</h1>

    @if ($errors->any())
        <div>
            <strong>Error:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('categories.store') }}">
        @csrf
        <div class="mb-4 ">
            <label for="name" class="block text-red-600 text-xl font-bold">Nombre de la Categoría:</label>
            <input type="text" id="name" name="name" required class="w-full p-2 border border-gray-300 rounded">
        </div>
        <div class="mb-4">
            <button type="submit" class="bg-red-700 text-white p-2 rounded-lg m-6">Crear Categoría</button>
        </div>
    </form>
</section>
    @endsection
