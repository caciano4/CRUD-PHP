<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbe88fb29746c42e7606965053420d1e3
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitbe88fb29746c42e7606965053420d1e3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbe88fb29746c42e7606965053420d1e3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbe88fb29746c42e7606965053420d1e3::$classMap;

        }, null, ClassLoader::class);
    }
}
