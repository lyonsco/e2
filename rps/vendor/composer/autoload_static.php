<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit55e08bdd625830bc667b58e4ecaf4ac3
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'RPS\\' => 4,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'RPS\\' => 
        array (
            0 => __DIR__ . '/..' . '/susanbuck/rock-paper-scissors/src',
        ),
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit55e08bdd625830bc667b58e4ecaf4ac3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit55e08bdd625830bc667b58e4ecaf4ac3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit55e08bdd625830bc667b58e4ecaf4ac3::$classMap;

        }, null, ClassLoader::class);
    }
}
