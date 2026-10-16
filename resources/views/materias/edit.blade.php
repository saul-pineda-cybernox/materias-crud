<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Materia</title>
</head>
<body>
    <h1>Editar Materia</h1>

    <a href="{{ route('materia.index') }}">Volver al Listado</a>

    <form action="{{ route('materia.update', $materia->id) }}" method="POST" style="margin-top: 15px;">
        @csrf
        @method('PUT')

        <label for="nombre">Nombre de la Materia:</label><br>
        <input type="text" id="nombre" name="nombre" value="{{ old('nombre', $materia->nombre) }}" required><br><br>

        <label for="creditos">Créditos:</label><br>
        <input type="number" id="creditos" name="creditos" value="{{ old('creditos', $materia->creditos) }}" required><br><br>

        <label for="profesor">Profesor:</label><br>
        <input type="text" id="profesor" name="profesor" value="{{ old('profesor', $materia->profesor) }}" required><br><br>

        <button type="submit">Actualizar Materia</button>
    </form>
</body>
</html>