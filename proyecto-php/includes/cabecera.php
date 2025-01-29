<?php require_once 'conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog de Videojuegos</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <!-- Favicons -->
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="./assets/icons/favicon-32x32.png"
    />
</head>
<body>
    <!-- CABECERA -->
    <header id="cabecera">
        <!-- LOGO -->
        <div id="logo">
            <a href="index.php">
                Blog de Videojuegos
            </a>
        </div>
        <!-- MENU -->
        <nav id="menu">
            <ul>
                <li><a href="index.php">INICIO</a></li>
                <?php 
                    $categorias = conseguirCategorias();
                    if(!empty($categorias)):
                        while($categoria = mysqli_fetch_assoc($categorias)) : 
                ?>
                        <li>
                            <a href="categoria.php?id=<?=$categoria['id']?>"><?=$categoria['nombre']?></a>
                        </li>
                <?php
                        endwhile;
                    endif;
                ?>
                <li><a href="index.php">SOBRE MI</a></li>
                <li><a href="index.php">CONTACTO</a></li>
            </ul>
        </nav>

        <div class="clearfix"></div>
    </header>

    <div id="contenedor"></div>