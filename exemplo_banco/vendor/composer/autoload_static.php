<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1a20c3b73d608353a0a8b99c88855fdf
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Classes\\' => 8,
        ),
        'B' => 
        array (
            'BD\\' => 3,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Classes',
        ),
        'BD\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/BD',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1a20c3b73d608353a0a8b99c88855fdf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1a20c3b73d608353a0a8b99c88855fdf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1a20c3b73d608353a0a8b99c88855fdf::$classMap;

        }, null, ClassLoader::class);
    }
}
