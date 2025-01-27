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
                <li><a href="index.php">Inicio</a></li>
                <li><a href="index.php">Categoria 1</a></li>
                <li><a href="index.php">Categoria 2</a></li>
                <li><a href="index.php">Categoria 3</a></li>
                <li><a href="index.php">Categoria 4</a></li>
                <li><a href="index.php">Sobre mí</a></li>
                <li><a href="index.php">Contacto</a></li>
            </ul>
        </nav>

        <div class="clearfix"></div>
    </header>

    <div id="contenedor">
        <!-- BARRA LATERAL -->
        <aside id="sidebar">
            <div id="login" class="bloque">
                <h3>Identificate</h3>
                <form action="login.php" method="post">
                    <label for="email">Email</label>
                    <input type="email" name="email">

                    <label for="password">Contraseña</label>
                    <input type="password" name="password">

                    <input type="submit" value="Entrar">
                </form>
            </div>

            <div id="register" class="bloque">
                <h3>Registrate</h3>
                <form action="registro.php" method="post">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre">

                    <label for="apellidos">Apellidos</label>
                    <input type="text" name="apellidos">

                    <label for="email">Email</label>
                    <input type="email" name="email">

                    <label for="password">Contraseña</label>
                    <input type="password" name="password">

                    <input type="submit" value="Registrar">
                </form>
            </div>
        </aside>

        <!-- CAJA PRINCIPAL -->
         <div id="principal">
            <h1>Ultimas entradas</h1>
            <article class="entrada">
                <a href="">
                <h2>Titulo de mi entrada</h2>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus ea expedita nemo, quidem minima in reiciendis, ratione eaque pariatur tempore, explicabo adipisci aperiam provident suscipit neque! Laborum officiis nulla ipsa.
                </p>
                </a>
                <a href="">
                <h2>Titulo de mi entrada</h2>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus ea expedita nemo, quidem minima in reiciendis, ratione eaque pariatur tempore, explicabo adipisci aperiam provident suscipit neque! Laborum officiis nulla ipsa.
                </p>
                </a>
                <a href="">
                <h2>Titulo de mi entrada</h2>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus ea expedita nemo, quidem minima in reiciendis, ratione eaque pariatur tempore, explicabo adipisci aperiam provident suscipit neque! Laborum officiis nulla ipsa.
                </p>
                </a>
                <a href="">
                <h2>Titulo de mi entrada</h2>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus ea expedita nemo, quidem minima in reiciendis, ratione eaque pariatur tempore, explicabo adipisci aperiam provident suscipit neque! Laborum officiis nulla ipsa.
                </p>
                </a>
            </article>

            <div id="ver-todas">
                <a href="">Ver todas las entradas</a>
            </div>  
         </div><!-- Fin principal -->
         
         <div class="clearfix"></div>
    </div>
    <!-- PIE DE PÁGINA -->
     <footer id="pie">
        <p>Desarrollado por Efraín Arévalo &copy; 2025</p>
     </footer>
</body>
</html>