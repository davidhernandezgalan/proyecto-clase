<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Mensajes</h1>
<table border="1">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Mensaje</th>
            <th>Estatus</th>
        </tr>
    </thead>
    <tbody>
        @foreach($mensajes as $mensaje)
        <tr>
            <td>{{ $mensaje->nomre/td> }}</td>
            <td>{{ $mensaje->correo/td> }}</td>
            <td>{{ $mensaje->mensaje/td> }}</td>
            <td>{{ $mensaje->estatus/td> }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>