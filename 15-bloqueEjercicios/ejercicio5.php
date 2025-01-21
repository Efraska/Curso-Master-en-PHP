<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Juegos</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            text-align: center;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>ACCION</th>
            <th>AVENTURAS</th>
            <th>DEPORTES</th>
        </tr>
        <?php 
            // Numero de filas (3 en este caso)
            for ($i=0; $i < 3; $i++) { 
                echo "<tr>";
                include 'includes/accion.php';
                include 'includes/aventuras.php';
                include 'includes/deportes.php';
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>