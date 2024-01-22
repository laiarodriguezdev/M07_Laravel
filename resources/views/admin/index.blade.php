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

    @if ($consultaProfe->isEmpty())
    <p>No hi ha cap professor en la BBDD.</p>
    @else
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
                        <form action="{{ url('admin/'. $user['id'])}}" method="post">
                            @method("delete")
                            @csrf
                            <input type="submit" value="delete">
                        </form>
                    </td>
                </tr>   
            @endforeach 
        </tbody>
    </table>
    @endif
    <!--BUTTONS -->
    <br><button><a href="{{ route('admin.create')}}">Crear un nou professor</a></button><br>
    <a href="{{ route('signin')}}">Log out</a>
</body>
</html>