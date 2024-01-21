<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista Alumne</title>
</head>
<body>
    <h1>Benvingut alumne, el teu email és: {{$email}}</h1>

    <a href="{{ route('signin')}}">Log out</a>
</body>
</html>