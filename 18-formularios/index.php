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

        <label for="button">Boton: </label>
        <p><input type="button" name="button" value="Click" /></p>

        <label for="sexo">Sexo: </label>
        <p>
            Hombre<input type="checkbox" name="sexo" value="hombre" />
            Mujer<input type="checkbox" name="sexo" value="mujer" checked="checked" />
        </p>

        <label for="color">Color: </label>
        <p><input type="color" name="color" /></p>

        <label for="fecha">fecha: </label>
        <p><input type="date" name="fecha" /></p>

        <label for="correo">correo: </label>
        <p><input type="email" name="correo" /></p>

        <label for="archivo">archivo: </label>
        <p><input type="file" name="archivo" multiple="multiple" /></p>

        <label for="numero">numero: </label>
        <p><input type="number" name="numero" /></p>

        <label for="contraseña">contraseña: </label>
        <p><input type="password" name="contraseña" /></p>

        <label for="continente">continente: </label>
        <p>
            America del sur <input type="radio" name="continente" value="America del Sur"/>
            Europa <input type="radio" name="continente" value="Europa"/>
            Asia <input type="radio" name="continente" value="Asia"/>
        </p>

        <label for="url">url: </label>
        <p><input type="url" name="url" /></p>

        <textarea name="" id=""></textarea><br>

        Peliculas:
        <select name="peliculas" id="peliculas">
            <option value="Avengers: Los Vengadores">Avengers: Los Vengadores</option>
            <option value="Avengers: era de ultron">Avengers: era de ultron</option>
            <option value="Avengers: Infinity War">Avengers: Infinity War</option>
            <option value="Avengers: Endgame">Avengers: Endgame</option>
        </select>
        <br>
        
        <input type="submit" value="Enviar" />

    </form>
</body>
</html>