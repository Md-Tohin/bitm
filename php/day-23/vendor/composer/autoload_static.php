<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd8e4da1c25b58729881df1bf8509fdec
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd8e4da1c25b58729881df1bf8509fdec::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd8e4da1c25b58729881df1bf8509fdec::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd8e4da1c25b58729881df1bf8509fdec::$classMap;

        }, null, ClassLoader::class);
    }
}
