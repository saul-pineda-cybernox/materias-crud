<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de Materia</title>
</head>
<body>
    <h1>Detalle de la Materia</h1>

    <p><strong>ID:</strong> {{ $materia->id }}</p>
    <p><strong>Nombre:</strong> {{ $materia->nombre }}</p>
    <p><strong>Créditos:</strong> {{ $materia->creditos }}</p>
    <p><strong>Profesor:</strong> {{ $materia->profesor }}</p>
    <p><strong>Fecha de Creación:</strong> {{ $materia->created_at }}</p>
    <p><strong>Última Actualización:</strong> {{ $materia->updated_at }}</p>

    <br>
    <a href="{{ route('materia.index') }}">Volver al Listado</a> | 
    <a href="{{ route('materia.edit', $materia->id) }}">Editar</a>
</body>
</html>