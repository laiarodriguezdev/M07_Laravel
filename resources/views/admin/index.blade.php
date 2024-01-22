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
            @foreach ($consultaProfe as $user)
                <tr>
                    <td>{{ $user->nom }}</td>
                    <td>{{ $user->cognoms }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->actiu == 1 ? 'Sí' : 'No' }}</td>
                    <td>
                        <a href="/admin/edit/{{ $user->id }}">Editar</a>
                        <a href="/admin/delete/{{ $user->id }}">Borrar</a>
                    </td>
                </tr>   
            @endforeach 
        </tbody>
    </table>
    <a href="/prof/create">Crear nuevo usuario profesor</a>
    <!--BUTTONS -->
    <button><a href="{{ route('admin.create')}}">Crear un nou professor</a></button><br>
    <a href="{{ route('signin')}}">Log out</a>
</body>
</html>