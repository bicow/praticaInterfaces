<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit087cc2244fd277331c4b008323936b50
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Personagens\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Personagens\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Personagens',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit087cc2244fd277331c4b008323936b50::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit087cc2244fd277331c4b008323936b50::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit087cc2244fd277331c4b008323936b50::$classMap;

        }, null, ClassLoader::class);
    }
}