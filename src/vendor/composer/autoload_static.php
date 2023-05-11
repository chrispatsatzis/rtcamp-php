<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcf86e75059d7ebff3cda03234c450033
{
    public static $prefixLengthsPsr4 = array (
        'r' => 
        array (
            'rtcamp\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'rtcamp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcf86e75059d7ebff3cda03234c450033::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcf86e75059d7ebff3cda03234c450033::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcf86e75059d7ebff3cda03234c450033::$classMap;

        }, null, ClassLoader::class);
    }
}