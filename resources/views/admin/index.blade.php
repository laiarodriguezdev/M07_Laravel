<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
</head>
<body>
    <h1>Pàgina del centre</h1>

    <h2>Benvingut administrador</h2>

    
    <!--BUTTONS -->
    <button><a href="{{ route('admin.create')}}">Crear un nou professor</a></button><br>
    <a href="{{ route('signin')}}">Log out</a>
</body>
</html>