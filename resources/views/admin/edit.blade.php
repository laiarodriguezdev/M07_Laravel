<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITA UN PROFESSOR</title>
</head>
<body>
    <!--
        EL EDITAR ÉS UN GET PER SI MATEIX PER ANAR A LA VISTA. 
        TAMBÉ NECESSITES UN ALTRE GET PER RECOLLIR LES DADES DE BBDD. 
        I LLAVORS, EN EL BOTÓ DE GUARDAR, ES EL UPDATE -PUT- 
    -->

    <h1>Editar Profesor</h1>

    <form action="{{ route('admin.update', $professor->id) }}" method="post">
        @csrf
        @method('put')

        <!-- Campos del formulario -->
        <!-- Puedes cargar los valores actuales del profesor en los campos del formulario -->

        <button type="submit">Guardar Cambios</button>
    </form>

    <br>
    <a href="{{ route('admin.index')}}">Torna a home</a>
</body>
</html>