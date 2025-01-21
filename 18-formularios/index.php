<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Formulario</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <label for="nombre">Nombre: </label>
        <p><input type="text" name="nombre" /></p>
        <label for="apellido">Apellido: </label>
        <p><input type="text" name="apellido" minlength="5" /></p>
        <input type="submit" value="Enviar" />

    </form>
</body>
</html>