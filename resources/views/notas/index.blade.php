<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>
</head>
<body>
    <div class="container">
        <h1>Notas</h1>
        <a href="{{ route('notas.create') }}" class="btn btn-primary mb-3">Crear nueva nota</a>

        @if ($notas->count() > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Contenido</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($notas as $nota)
                        <tr>
                            <td>{{ $nota->titulo }}</td>
                            <td>{{ $nota->contenido }}</td>
                            <td>
                                <a href="{{ route('notas.edit', $nota->id) }}" class="btn btn-sm btn-primary">Editar</a>
                                <form action="{{ route('notas.destroy', $nota->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar esta nota?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No hay notas registradas.</p>
        @endif
    </div>
</body>
</html>