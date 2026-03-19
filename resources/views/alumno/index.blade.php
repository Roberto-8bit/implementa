<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de alumnos</h1>
    <a href="/alumno/create">Crear Alumno</a>
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Edad</td>
                <td>Editar</td>
                <td>Eliminar</td>
                <td>Eliminar 2</td>
            </tr>
        </thead>
    </table>

    <tbody>
        @foreach($resultado as $alumno)
        <tr>
        <td>{{$alumno->id}}</td>
        <td>{{$alumno->nombre}}</td>
        <td>{{$alumno->apellido}}</td>
        <td>{{$alumno->edad}}</td>
        <td><a href="/alumno/{{$alumno->id}}/edit">Editar</a></td>
        <td><a href="/alumno/{{$alumno->id}}">Eliminar</a></td>

        <td> <form action="{{route ('alumno.destroy', $alumno->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Eliminar {{$alumno->id}}</button>
        </form></td>
        </tr>
        @endforeach
    </tbody>
</body>
</html>