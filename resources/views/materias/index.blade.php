<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Materias</title>
</head>
<body>
    <h1>Listado de Materias</h1>

    <a href="{{ route('materia.create') }}">Crear Nueva Materia</a>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="8" cellspacing="0" style="margin-top: 15px;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Créditos</th>
                <th>Profesor</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($materias as $materia)
                <tr>
                    <td>{{ $materia->id }}</td>
                    <td>{{ $materia->nombre }}</td>
                    <td>{{ $materia->creditos }}</td>
                    <td>{{ $materia->profesor }}</td>
                    <td>
                        <a href="{{ route('materia.show', $materia->id) }}">Ver</a> | 
                        <a href="{{ route('materia.edit', $materia->id) }}">Editar</a> | 
                        <form action="{{ route('materia.destroy', $materia->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('¿Desea eliminar esta materia?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No hay materias registradas.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>