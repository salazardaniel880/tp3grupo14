<!DOCTYPE html>
<html>
<head>
    <title>Crear Categoría</title>
</head>
<body>
    <h1>Crear Categoría</h1>

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
        <div>
            <label for="name">Nombre de la Categoría:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <button type="submit">Crear Categoría</button>
    </form>
</body>
</html>
