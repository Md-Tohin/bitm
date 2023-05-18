<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit60d77ce18a2a0f2773eaed588b227b2e
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit60d77ce18a2a0f2773eaed588b227b2e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit60d77ce18a2a0f2773eaed588b227b2e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit60d77ce18a2a0f2773eaed588b227b2e::$classMap;

        }, null, ClassLoader::class);
    }
}
