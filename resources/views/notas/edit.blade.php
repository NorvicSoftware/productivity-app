<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear nueva nota</title>
</head>
<body>
    <div class="container">
        <h1>Crear nueva nota</h1>
        <form action="{{ route('notas.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="titulo">Título:</label>
                <input type="text" name="titulo" id="titulo" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="contenido">Contenido:</label>
                <textarea name="contenido" id="contenido" class="form-control" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</body>
</html>