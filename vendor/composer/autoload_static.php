<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit471c96f51771476938cebb6852507617
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit471c96f51771476938cebb6852507617::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit471c96f51771476938cebb6852507617::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit471c96f51771476938cebb6852507617::$classMap;

        }, null, ClassLoader::class);
    }
}
