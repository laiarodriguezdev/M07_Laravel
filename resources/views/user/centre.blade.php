<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Benvingut administrador, el teu email és: {{$email}}</h1>

    <h2>Llista de Professors:</h2>
    <ul>
        @foreach ($professors as $professor)
            <li>
                ID: {{$professor['id']}}, 
                Nom: {{$professor['nom']}}, 
                Email: {{$professor['email']}}, 
                Curs: {{$professor['curs']}}
            </li>
        @endforeach
    </ul>

</body>
</html>