<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin</title>
</head>
<body>
    <h1>Iniciar sessió de l'usuari</h1>
    <!--   action="logUser_p05.php" method="post" -->
    <form>
        <!--EMAIL-->
        <label for="email"> Correu: </label>
        <input type="text" name="email">
        <br>
        <!--PASSWORD-->
        <label for="password"> Contrassenya: </label>
        <input type="password" name="password">
        <br>
        <!--RECORDAR-->
        <label for="remember"> Remember me </label>
        <input type="checkbox" name="remember">
        <br>

        <!--   type="submit" value="Enviar" -->
        <input type="submit" value="Enviar">   
    </form>

    <a href="/signup">Registra't</a>
</body>
</html>