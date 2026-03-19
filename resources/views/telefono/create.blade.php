<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Crear telefono</h1>

    <form action="/telefono" method="POST">
    @csrf

    <label for="Nombre">Codigo Cliente</label>
    <input type="text"name="codigoCliente" id="codigoCliente" value="{{$codigoCliente}}">

    <label for="Nombre">Numero Telefono</label>
    <input type="text"name="numero" id="numero">

    <button type="submit">Guardar telefono</button>
    </form>
    
</body>
</html>