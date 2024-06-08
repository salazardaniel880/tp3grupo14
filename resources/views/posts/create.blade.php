<!DOCTYPE html>
<html>
<head>
    <title>Agregar Post</title>
</head>
<body>
    <h1>Agregar Post</h1>
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <input type="hidden" name="book_id" value="{{ $book->id }}">
        <input type="hidden" name="category_id" value="{{ $category->id }}">
        <div>
            <label for="post_title">Título del Post:</label>
            <input type="text" id="post_title" name="post_title" required>
        </div>
        <div>
            <label for="comment">Comentario:</label>
            <textarea id="comment" name="comment" required></textarea>
        </div>
        <div>
            <label for="rating">Calificación (1-5):</label>
            <input type="number" id="rating" name="rating" min="1" max="5" required>
        </div>
        <button type="submit">Agregar Post</button>
    </form>
</body>
</html>
