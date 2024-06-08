<!DOCTYPE html>
<html>
<head>
    <title>Posts de {{ $book->title }}</title>
    <style>
        .grid-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
        }
        .grid-item {
            border: 1px solid #ccc;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>Posts de {{ $book->title }}</h1>
    <div class="grid-container">
        @foreach($posts as $post)
            <div class="grid-item">
                <strong>Título:</strong> {{ $post->post_title }} <br>
                <strong>Comentario:</strong> {{ $post->comment }} <br>
                <strong>Calificación:</strong> {{ $post->rating }} <br>
                <strong>Libro:</strong> {{ $post->book->title }} <br>
                <strong>Categoría:</strong> {{ $post->category->name }} <br>
            </div>
        @endforeach
    </div>
</body>
</html>
