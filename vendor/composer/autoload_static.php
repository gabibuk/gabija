<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1bdc193540638a7359b39f55681dfdcc
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'OOP\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'OOP\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1bdc193540638a7359b39f55681dfdcc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1bdc193540638a7359b39f55681dfdcc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1bdc193540638a7359b39f55681dfdcc::$classMap;

        }, null, ClassLoader::class);
    }
}
