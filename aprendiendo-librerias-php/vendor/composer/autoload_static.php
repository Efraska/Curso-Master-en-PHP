<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaf4ebc3f7bdade44cd34b34974c97dbb
{
    public static $files = array (
        '0a80d26768cd24fcdbe75bdd719255c1' => __DIR__ . '/..' . '/firephp/firephp-core/lib/FirePHPCore/fb.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Spipu\\Html2Pdf\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Spipu\\Html2Pdf\\' => 
        array (
            0 => __DIR__ . '/..' . '/spipu/html2pdf/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PHPThumb\\Tests' => 
            array (
                0 => __DIR__ . '/..' . '/masterexploder/phpthumb/tests',
            ),
            'PHPThumb' => 
            array (
                0 => __DIR__ . '/..' . '/masterexploder/phpthumb/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Datamatrix' => __DIR__ . '/..' . '/tecnickcom/tcpdf/include/barcodes/datamatrix.php',
        'FB' => __DIR__ . '/..' . '/firephp/firephp-core/lib/FirePHPCore/fb.php',
        'FirePHP' => __DIR__ . '/..' . '/firephp/firephp-core/lib/FirePHPCore/FirePHP.class.php',
        'FirePHP_TestWrapper' => __DIR__ . '/..' . '/firephp/firephp-core/lib/FirePHPCore/FirePHP_TestWrapper.class.php',
        'PDF417' => __DIR__ . '/..' . '/tecnickcom/tcpdf/include/barcodes/pdf417.php',
        'QRcode' => __DIR__ . '/..' . '/tecnickcom/tcpdf/include/barcodes/qrcode.php',
        'TCPDF' => __DIR__ . '/..' . '/tecnickcom/tcpdf/tcpdf.php',
        'TCPDF2DBarcode' => __DIR__ . '/..' . '/tecnickcom/tcpdf/tcpdf_barcodes_2d.php',
        'TCPDFBarcode' => __DIR__ . '/..' . '/tecnickcom/tcpdf/tcpdf_barcodes_1d.php',
        'TCPDF_COLORS' => __DIR__ . '/..' . '/tecnickcom/tcpdf/include/tcpdf_colors.php',
        'TCPDF_FILTERS' => __DIR__ . '/..' . '/tecnickcom/tcpdf/include/tcpdf_filters.php',
        'TCPDF_FONTS' => __DIR__ . '/..' . '/tecnickcom/tcpdf/include/tcpdf_fonts.php',
        'TCPDF_FONT_DATA' => __DIR__ . '/..' . '/tecnickcom/tcpdf/include/tcpdf_font_data.php',
        'TCPDF_IMAGES' => __DIR__ . '/..' . '/tecnickcom/tcpdf/include/tcpdf_images.php',
        'TCPDF_IMPORT' => __DIR__ . '/..' . '/tecnickcom/tcpdf/tcpdf_import.php',
        'TCPDF_PARSER' => __DIR__ . '/..' . '/tecnickcom/tcpdf/tcpdf_parser.php',
        'TCPDF_STATIC' => __DIR__ . '/..' . '/tecnickcom/tcpdf/include/tcpdf_static.php',
        'Zebra_Pagination' => __DIR__ . '/..' . '/stefangabos/zebra_pagination/Zebra_Pagination.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaf4ebc3f7bdade44cd34b34974c97dbb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaf4ebc3f7bdade44cd34b34974c97dbb::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitaf4ebc3f7bdade44cd34b34974c97dbb::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitaf4ebc3f7bdade44cd34b34974c97dbb::$classMap;

        }, null, ClassLoader::class);
    }
}
