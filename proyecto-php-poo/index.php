<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Online</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="container">
        <!-- CABECERA -->
        <header id="header">
            <div id="logo">
                <img src="assets/img/camiseta.png" alt="Camiseta Logo" />
                <a href="index.php">
                    Tienda de Camisetas
                </a>
            </div>
        </header>

        <!-- MENU -->
        <nav id="menu">
            <ul>
                <li>
                    <a href="#">Inicio</a>
                </li>
                <li>
                    <a href="#">Categoria 1</a>
                </li>
                <li>
                    <a href="#">Categoria 2</a>
                </li>
                <li>
                    <a href="#">Categoria 3</a>
                </li>
                <li>
                    <a href="#">Categoria 4</a>
                </li>
                <li>
                    <a href="#">Categoria 5</a>
                </li>
            </ul>
        </nav>

        <div id="content">
            <!-- BARRA LATERAL -->
            <aside id="lateral">
                <div id="login" class="block_aside">
                    <form action="#" method="post">
                        <label for="email">Email</label>
                        <input type="email" name="email" />

                        <label for="password">Contraseña</label>
                        <input type="password" name="password" />

                        <input type="submit" value="Enviar">
                    </form>

                    <a href="#">Mis pedidos</a>
                    <a href="#">Gestionar pedidos</a>
                    <a href="#">Gestionar Categorias</a>
                </div>
            </aside>

            <!-- CONTENIDO CENTRAL -->
            <div id="central"></div>
            <div class="product">
                <img src="assets/img/camiseta.png" alt="Logo camiseta" />
                <h2>Camiseta Azul Ancha</h2>
                <p>30 euros</p>
                <a href="">Comprar</a>
            </div>
            <div class="product">
                <img src="assets/img/camiseta.png" alt="Logo camiseta" />
                <h2>Camiseta Azul Ancha</h2>
                <p>30 euros</p>
                <a href="">Comprar</a>
            </div>
            <div class="product">
                <img src="assets/img/camiseta.png" alt="Logo camiseta" />
                <h2>Camiseta Azul Ancha</h2>
                <p>30 euros</p>
                <a href="">Comprar</a>
            </div>
        </div>

        <!-- PIE DE PÁGINA -->
        <footer id="footer">
            <p>Desarrollado por Efraín Arévalo &copy; <?= date('Y') ?></p>
        </footer>
    </div>
</body>

</html>