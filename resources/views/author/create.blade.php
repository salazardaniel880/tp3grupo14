@extends('layout')

@section('content')

<section class="flex flex-col justify-center items-center">
        <h1 class="flex justify-center text-white text-5xl pt-10 pb-10">añadir autor</h1>
        <form action="{{ route('author.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-red-600 text-xl font-bold">Nombre</label>
                <input type="text" class="w-full p-2 border border-gray-300 rounded" id="name" name="name" required>
            </div>
            <div class="mb-4">
                <label for="nationality" class="block text-red-600 text-xl font-bold">nacionalidad</label>
                <input type="text" class="w-full p-2 border border-gray-300 rounded" id="nationality" name="nationality" required>
            </div>
            
            <div class="mb-4">
                <label for="birth_date" class="block text-red-600 text-xl font-bold">fecha de nacimiento</label>
                <input type="date" class="w-full p-2 border border-gray-300 rounded" id="birth_date" name="birth_date" required>
            </div>
            <div class="mb-4">
            <button type="submit" class="bg-red-700 text-white p-2 rounded-lg m-6">Guardar</button>
            </div>
        </form>
</section>
        @endsection