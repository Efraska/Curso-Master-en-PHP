<?php 

/**
 * Hacer una interfaz de usuario(formulario) con dos inputs y 4 botones, uno para sumar, restar, dividir y multiplicar.
 */

 if (isset($_POST['numero1']) && isset($_POST['numero2'])) {
    $resultado = false;

    if (isset($_POST['sumar'])) {
        $resultado = "El resultado de esta operacion es: ".($_POST['numero1'] + $_POST['numero2']);
    }

    if (isset($_POST['restar'])) {
        $resultado = "El resultado de esta operacion es: ".($_POST['numero1'] - $_POST['numero2']);
    }

    if (isset($_POST['dividir'])) {
        $resultado = "El resultado de esta operacion es: ".($_POST['numero1'] / $_POST['numero2']);
    }

    if (isset($_POST['multiplicar'])) {
        $resultado = "El resultado de esta operacion es: ".($_POST['numero1'] * $_POST['numero2']);
    }
 }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora desde formulario</title>
</head>
<body>
    <h1>Calculadora desde formulario</h1>

    <form action="" method="post">

    <label for="numero1">Numero 1 </label><br>
    <input type="number" name="numero1" required="required" pattern="[0-9]+" ><br><br>

    <label for="numero2">Numero 2 </label><br>
    <input type="number" name="numero2" required="required" pattern="[0-9]+" ><br><br>

    <input type="submit" value="Sumar" name="sumar" />
    <input type="submit" value="Restar" name="restar" />
    <input type="submit" value="Dividir" name="dividir" />
    <input type="submit" value="Multiplicar" name="multiplicar" />

    </form>

    <?php 
    
        // Mostrar el Resultado en el html
        if ($resultado != false):
            echo "<h2>$resultado</h2>";
        endif;
    ?>
</body>
</html>