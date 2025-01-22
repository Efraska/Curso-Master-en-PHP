<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación de Formularios</title>
</head>
<body>
    <h1>Validar formularios en PHP</h1>

    <?php 
        if (isset($_GET['error'])) {
            $error = $_GET['error'];
            if ($error == 'faltan_valores') {
                echo '<strong style="color:red">Rellena el formulario completo</strong>';
            }
        }
    ?>

    <form method="post" action="procesar_formulario.php">
        <label for="nombre">Nombre: </label><br>
        <input type="text" name="nombre" required="required" pattern="[a-zA-Z\s]+$"><br>
        
        <label for="apellidos">Apellidos: </label><br>
        <input type="text" name="apellidos" required="required" pattern="[a-zA-Z\s]+$"><br>

        <label for="edad">Edad: </label><br>
        <input type="number" name="edad" required="required" pattern="[0-9]+"><br>

        <label for="email">Email: </label><br>
        <input type="email" name="email" required="required"><br>

        <label for="pass">Contraseña: </label><br>
        <input type="password" name="pass" required="required"><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>