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
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Cognom</th>
                <th>Email</th>
                <th>Actiu</th>
                <th>Accions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($consultaAlumne as $user)
                <tr>
                    <td>{{ $user->nom }}</td>
                    <td>{{ $user->cognoms }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->actiu == 1 ? 'Sí' : 'No' }}</td>
                    <td>
                        <a href="/prof/edit/{{ $user->id }}">Editar</a>
                        <a href="/prof/delete/{{ $user->id }}">Borrar</a>
                    </td>
                </tr>   
            @endforeach 
        </tbody>
    </table>


    
    <!--BUTTONS -->
    <button><a href="{{ route('prof.create')}}">Crear un nou alumne</a></button><br>
    <a href="{{ route('signin')}}">Log out</a>
</body>
</html>