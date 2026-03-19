<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de clientes</h1>
    <a href="/cliente/create">Crear Cliente</a>
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>Codigo Cliente</td>
                <td>Nombre Cliente</td>
                <td>Apellido Cliente</td>
                <td>Ciudad Cliente</td>
                <td>Editar</td>
                <td>Eliminar</td>
                <td>Ver Telefono</td>
            </tr>
        </thead>
    </table>

    <tbody>
        @foreach($dClientes as $cliente)
        <tr>
        <td>{{$cliente->id}}</td>
        <td>{{$cliente->codigoCliente}}</td>
        <td>{{$cliente->nombreCliente}}</td>
        <td>{{$cliente->ApellidoCliente}}</td>
        <td>{{$cliente->ciudadCliente}}</td>
        <td><a href="/cliente/{{$cliente->id}}/edit">Editar</a></td>
        <td><a href="/cliente/{{$cliente->id}}">Eliminar</a></td>
        <td><a href="/telefono/{{$cliente->id}}">Ver Telefono</a></td>
        @endforeach
    </tbody>
</body>
</html>