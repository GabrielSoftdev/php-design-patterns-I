<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0bc3bad625270cb246cfed16634f30da
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alura\\DesignPattern\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alura\\DesignPattern\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit0bc3bad625270cb246cfed16634f30da::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0bc3bad625270cb246cfed16634f30da::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0bc3bad625270cb246cfed16634f30da::$classMap;

        }, null, ClassLoader::class);
    }
}
