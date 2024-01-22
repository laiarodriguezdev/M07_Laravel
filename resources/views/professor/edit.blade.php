<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITA UN USUARI</title>
</head>
<body>
    <h1>EDITA UN USUARI</h1>

    <form action="{{ url('/prof/edit') }}" method="put">
        <!--ID-->
        <label for="id"> Numero</label>
        <input type="number" name="id">
        <br>
        <!--NOM-->
        <label for="nom"> Nom</label>
        <input type="text" name="nom">
        <br>
        <!--COGNOM-->
        <label for="cognoms"> Cognoms </label>
        <input type="text" name="cognoms">
        <br>
        <!--PASSWORD-->
        <label for="password"> Contrassenya </label>
        <input type="text" name="password">
        <br>
        <!--EMAIL-->
        <label for="email"> Email </label>
        <input type="text" name="email">
        <br>
        <!--ROL-->
        <label for="rol"> Rol </label>
        <select name="rol">
            <option value="Alumne">Alumne</option>
        </select>
        <br>
        <!--ACTIU-->
        <label for="actiu"> Actiu? </label>
        <input type="checkbox" name="actiu">
        <br>
        <input type="submit" value="Enviar">   
    </form>
    <!--INICIAR SESSIÓ-->
    <br>
    <a href="{{ route('prof.index')}}">Torna a home</a>
</body>
</html>