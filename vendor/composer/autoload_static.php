<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1da097c93cca922558bdae0725dd60d4
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Viktor\\PhpTestLoc\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Viktor\\PhpTestLoc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PHPExcel' => 
            array (
                0 => __DIR__ . '/..' . '/phpoffice/phpexcel/Classes',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1da097c93cca922558bdae0725dd60d4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1da097c93cca922558bdae0725dd60d4::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit1da097c93cca922558bdae0725dd60d4::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit1da097c93cca922558bdae0725dd60d4::$classMap;

        }, null, ClassLoader::class);
    }
}
