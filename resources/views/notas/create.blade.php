<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar nota</title>
</head>
<body>
    <div class="container">
        <h1>Editar nota</h1>
        <form action="{{ route('notas.update', $nota->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="titulo">Título:</label>
                <input type="text" name="titulo" id="titulo" class="form-control" value="{{ $nota->titulo }}" required>
            </div>
            <div class="form-group">
                <label for="contenido">Contenido:</label>
                <textarea name="contenido" id="contenido" class="form-control" rows="5" required>{{ $nota->contenido }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</body>
</html>