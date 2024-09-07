<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto</title>
</head>
<body>
    <h1>Formulario de Contacto</h1>

    <form action="/guardar-formulario" method="POST">
        @csrf
        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre"><br>
        @error('nombre')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="correo">Correo:</label><br>
        <input type="email" name="correo" id="">
        @error('correo')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

        <label for="mensaje">Mensaje:</label><br>
        <textarea name="mensaje" cols="30" rows="4"></textarea><br>
        @error('mensaje')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <input type="submit" value="Enviar">
    </form>
</body>
</html>