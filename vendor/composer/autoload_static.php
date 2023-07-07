<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4b0658da52413152066d66c17221b2c9
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/api',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4b0658da52413152066d66c17221b2c9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4b0658da52413152066d66c17221b2c9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4b0658da52413152066d66c17221b2c9::$classMap;

        }, null, ClassLoader::class);
    }
}
