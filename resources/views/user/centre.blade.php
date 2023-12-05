<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador del centre!</title>
</head>
<body>
    <h1>Benvingut administrador, el teu email és: {{$email}}</h1>

    <h2>Llista de Professors:</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NOM</th>
                <th>EMAIL</th>
                <th>CURS</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($professors as $professor)
                <tr>
                    <td>{{$professor['id']}}</td>
                    <td>{{$professor['nom']}}</td>
                    <td>{{$professor['email']}}</td>
                    <td>{{$professor['curs']}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>