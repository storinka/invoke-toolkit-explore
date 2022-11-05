<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3fddc35d1f750723f212a95bb4853ec6
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Invoke\\Toolkit\\Explore\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Invoke\\Toolkit\\Explore\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3fddc35d1f750723f212a95bb4853ec6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3fddc35d1f750723f212a95bb4853ec6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3fddc35d1f750723f212a95bb4853ec6::$classMap;

        }, null, ClassLoader::class);
    }
}
