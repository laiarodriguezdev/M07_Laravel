<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professor</title>
</head>
<body>
    <h1>Pàgina del centre</h1>

    <h2>Benvingut professor</h2>

    <!--
            TAULA QUE CONTROLA LA PROPIA VISTA. 
    -->



    
    <!--BUTTONS -->
    <button><a href="{{ route('prof.create')}}">Crear un nou alumne</a></button><br>
    <a href="{{ route('signin')}}">Log out</a>
</body>
</html>