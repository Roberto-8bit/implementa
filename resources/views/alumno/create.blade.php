<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Crear alumno</h1>

    <form action="/alumno" method="POST">
    @csrf

    <label for="Nombre">Nombre</label>
    <input type="text"name="nombre" id="nombre">

    <label for="Nombre">Apellido</label>
    <input type="text"name="apellido" id="apellido">

    <label for="edad">Edad</label>
    <input type="text"name="edad" id="edad">

    <button type="submit">Guardar alumno</button>
    </form>
    
</body>
</html>