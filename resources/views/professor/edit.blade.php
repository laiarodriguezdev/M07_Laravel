<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODIFICA UN ALUMNE</title>
</head>
<body>
    <h1>MODIFICA UN ALUMNE</h1>

    <form action="{{route('prof.update',[$consultaAlumne->id])}}" method="post">
        @method('put')
        @csrf
        <label for = "id"> Indica el teu id </label>
        <input type="text" name="id" value="{{$consultaAlumne->id}}">
        <br>
        <label for = "nom"> Indica el teu nom </label>
        <input type="text" name="nom" value="{{$consultaAlumne->nom}}">
        <br>
        <label for = "cognoms"> Indica el teu cognom </label>
        <input type="text" name="cognoms" value="{{$consultaAlumne->cognoms}}">
        <br>
        <label for = "email"> Indica el teu email </label>
        <input type="email" name="email" value="{{$consultaAlumne->email}}">
        <br>
        <label for = "password"> Indica el teu password </label>
        <input type="password" name="password" value="{{$consultaAlumne->password}}">        
        <br>
        <label for="rol"> Rol </label>
        <select name="rol">
            <option value="Alumne">Alumne</option>
        </select>
        <br>
        <label for="actiu"> Actiu? </label>
        <input type="checkbox" name="actiu" value="{{ $consultaAlumne->id ==1 ? 'checked' : ''}}">
        <br>            
        <input type="submit" value="Enviar">   
    </form> 
    <!--INICIAR SESSIÓ-->
    <br>
    <a href="{{ route('prof.index')}}">Torna a home</a>
</body>
</html>