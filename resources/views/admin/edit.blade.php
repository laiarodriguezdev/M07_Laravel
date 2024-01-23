<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODIFICA UN PROFESSOR</title>
</head>
<body>
    <!--
        EL EDITAR ÉS UN GET PER SI MATEIX PER ANAR A LA VISTA. 
        TAMBÉ NECESSITES UN ALTRE GET PER RECOLLIR LES DADES DE BBDD. 
        I LLAVORS, EN EL BOTÓ DE GUARDAR, ES EL UPDATE -PUT- 
    -->

    <h1>MODIFICA UN PROFESSOR</h1>

    <form action="{{route('admin.update',[$consultaProfe->id])}}" method="post">
        @method('put')
        @csrf
        <label for = "id"> Indica el teu id </label>
        <input type="text" name="id" value="{{$consultaProfe->id}}">
        <br>
        <label for = "nom"> Indica el teu nom </label>
        <input type="text" name="nom" value="{{$consultaProfe->nom}}">
        <br>
        <label for = "cognoms"> Indica el teu cognom </label>
        <input type="text" name="cognoms" value="{{$consultaProfe->cognoms}}">
        <br>
        <label for = "email"> Indica el teu email </label>
        <input type="email" name="email" value="{{$consultaProfe->email}}">
        <br>
        <label for = "password"> Indica el teu password </label>
        <input type="password" name="password" value="{{$consultaProfe->password}}">        
        <br>
        <label for="rol"> Rol </label>
        <select name="rol">
            <option value="Professor">Professor</option>
        </select>
        <br>
        <label for="actiu"> Actiu? </label>
        <input type="checkbox" name="actiu" value="{{ $consultaProfe->id ==1 ? 'checked' : ''}}">
        <br>            
        <input type="submit" value="Enviar">   
    </form> 
    <!--INICIAR SESSIÓ-->
    <br>
    <br>
    <a href="{{ route('admin.index')}}">Torna a home</a>
</body>
</html>