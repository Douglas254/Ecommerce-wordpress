<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb4e75f8308c5c865d42739a27e752291
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WP2StaticZip\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WP2StaticZip\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'WP2StaticZip\\CLI' => __DIR__ . '/../..' . '/src/CLI.php',
        'WP2StaticZip\\Controller' => __DIR__ . '/../..' . '/src/Controller.php',
        'WP2StaticZip\\WP2StaticZipException' => __DIR__ . '/../..' . '/src/WP2StaticZipException.php',
        'WP2StaticZip\\ZipArchiver' => __DIR__ . '/../..' . '/src/ZipArchiver.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb4e75f8308c5c865d42739a27e752291::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb4e75f8308c5c865d42739a27e752291::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb4e75f8308c5c865d42739a27e752291::$classMap;

        }, null, ClassLoader::class);
    }
}
