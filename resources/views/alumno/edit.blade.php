<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar alumno</h1>
    
     <form action="/alumno/{{$alumnoE->id}}" method="POST">
    @csrf
    @method('PUT')
    <label for="Nombre">ID</label>
    <input type="text"name="id" id="id" value="{{$alumnoE->id}}">

    <label for="Nombre">Nombre</label>
    <input type="text"name="nombre" id="nombre" value="{{$alumnoE->nombre}}">

    <label for="Nombre">Apellido</label>
    <input type="text"name="apellido" id="apellido" value="{{$alumnoE->apellido}}">

    <label for="edad">Edad</label>
    <input type="text"name="edad" id="edad" value="{{$alumnoE->edad}}">

    <button type="submit">Actualizar alumno</button>
    </form>
</body>
</html>