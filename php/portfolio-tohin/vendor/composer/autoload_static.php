<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita9668d931241e465585747fb9eea24bf
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita9668d931241e465585747fb9eea24bf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita9668d931241e465585747fb9eea24bf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita9668d931241e465585747fb9eea24bf::$classMap;

        }, null, ClassLoader::class);
    }
}
