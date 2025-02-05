<?php
require_once '../vendor/autoload.php';

use PHPThumb\GD;

$foto_original = 'mifoto.jpg';
$guardar_en = __DIR__ . '/fotomodificada.jpg';

// Verificar si la imagen original existe
if (!file_exists($foto_original)) {
    die('Error: La imagen original no existe.');
}

try {
    $thumb = new GD($foto_original);
    ob_clean();

    // Aplicar recorte y redimensionado
    $thumb->crop(50, 50, 120, 120);
    $thumb->resize(500, 500);

    // Mostrar imagen en el navegador
    header('Content-Type: image/jpeg');
    $thumb->show();

    // Guardar imagen procesada
    if ($thumb->save($guardar_en, 'jpg')) {
        echo "<br>Imagen guardada correctamente en: $guardar_en";
    } else {
        echo "<br>Error al guardar la imagen.";
    }
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
?>
