<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit52000922af2b023b2da6d54ec4304bfd
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sqids\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sqids\\' => 
        array (
            0 => __DIR__ . '/..' . '/sqids/sqids/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit52000922af2b023b2da6d54ec4304bfd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit52000922af2b023b2da6d54ec4304bfd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit52000922af2b023b2da6d54ec4304bfd::$classMap;

        }, null, ClassLoader::class);
    }
}
