<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbc2bb9332ee8610b0298862899c5286e
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'sirename\\' => 9,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'sirename\\' => 
        array (
            0 => __DIR__ . '/..' . '/sirename',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbc2bb9332ee8610b0298862899c5286e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbc2bb9332ee8610b0298862899c5286e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}