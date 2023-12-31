<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7114dfce015271b16b3b63d4a9d6be2c
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Todo\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Todo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7114dfce015271b16b3b63d4a9d6be2c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7114dfce015271b16b3b63d4a9d6be2c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7114dfce015271b16b3b63d4a9d6be2c::$classMap;

        }, null, ClassLoader::class);
    }
}
