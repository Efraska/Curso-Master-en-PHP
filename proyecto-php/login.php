<?php 
// Iniciar la sesión y la conexión a la BD
require_once 'includes/conexion.php';

// Recoger datos del formulario
if(isset($_POST)) {
    
    // Borrar error antiguo
    if ($_SESSION['error_login']) {
        session_unset();
    }

    // Recoger datos del formulario
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Consulta para comrpobar las credenciales de usuario
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $login = mysqli_query($db, $sql);

    if($login && mysqli_num_rows($login) == 1) {
        $usuario = mysqli_fetch_assoc($login);

        // Comprobar la contraseña / cifrar de nuevo el password
        $verify = password_verify($password, $usuario['password']);

        if ($verify) {
            // Utilizar una sesión para guardar los datos del usuario logueado
            $_SESSION['usuario'] = $usuario;


        } else {
            // Si algo falla enviar una sesión con el fallo
            $_SESSION['error_login'] = "Login incorrecto!!";
        }

    } else {
        // mensaje de error
        $_SESSION['error_login'] = "Login incorrecto!!";
    }
}

// Redirigir al index.php
header("Location: index.php");
