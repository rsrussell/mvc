<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit157eb5a313af6425eabe546085e12e93
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'core\\' => 5,
            'config\\' => 7,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'config\\' => 
        array (
            0 => __DIR__ . '/../..' . '/config',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit157eb5a313af6425eabe546085e12e93::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit157eb5a313af6425eabe546085e12e93::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
