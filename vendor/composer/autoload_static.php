<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7af00c49864e76c4c00c33e488d42827
{
    public static $files = array (
        '826af643f4da230ac72752ae728583b4' => __DIR__ . '/../..' . '/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Forwardcode\\LaravelOptions\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Forwardcode\\LaravelOptions\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7af00c49864e76c4c00c33e488d42827::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7af00c49864e76c4c00c33e488d42827::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7af00c49864e76c4c00c33e488d42827::$classMap;

        }, null, ClassLoader::class);
    }
}