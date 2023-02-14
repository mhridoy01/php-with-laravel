<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2aa38752dac88746a47448d5fb1a1260
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2aa38752dac88746a47448d5fb1a1260::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2aa38752dac88746a47448d5fb1a1260::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2aa38752dac88746a47448d5fb1a1260::$classMap;

        }, null, ClassLoader::class);
    }
}
