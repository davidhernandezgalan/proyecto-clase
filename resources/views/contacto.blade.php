<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <h1>Formulario de Contacto</h1>  
    
    <Form action="/guardar-formulario" method="POST"><br>
    @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="correo" class="form-label">Correo:</label>
                <input type="email" id="correo" name="correo" class="form-control" required>
                @error('correo')
                <div class="alert alert-danger">{{$mensaje}}</div>
            </div>
            <div class="mb-3">
                <label for="mensaje" class="form-label">Mensaje:</label>
                <textarea id="mensaje" name="mensaje" class="form-control" rows="4"></textarea>
                <input type="submit" value="Enviar">
            </div>
            </Form>
</body>
</html>