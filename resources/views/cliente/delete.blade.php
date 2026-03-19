<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Eliminar cliente</h1>
    <form action="/cliente/{{$clienteE->id}}" method="POST">
    @csrf
    @method('DELETE')
    <label for="Nombre">Codigo Cliente</label>
    <input type="text"name="codigoCliente" id="codigoCliente">

    <label for="Nombre">Nombre Cliente</label>
    <input type="text"name="nombreCliente" id="nombreCliente">

    <label for="edad">Apellido Cliente</label>
    <input type="text"name="apellidoCliente" id="apellidoCliente">

    <label for="edad">Ciudad Cliente</label>
    <input type="text"name="ciudadCliente" id="ciudadCliente">

    <button type="submit">Eliminar cliente</button>
    </form>
    
</body>
</html>