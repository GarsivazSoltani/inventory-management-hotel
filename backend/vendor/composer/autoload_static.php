<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite216934e0b5848c5d2d0c02b91038c9b
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'HotelInventory\\Backend\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'HotelInventory\\Backend\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite216934e0b5848c5d2d0c02b91038c9b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite216934e0b5848c5d2d0c02b91038c9b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite216934e0b5848c5d2d0c02b91038c9b::$classMap;

        }, null, ClassLoader::class);
    }
}
