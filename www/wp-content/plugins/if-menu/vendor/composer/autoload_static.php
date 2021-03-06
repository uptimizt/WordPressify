<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1675f12dcb616dfd5aef9267ba43b735
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Layered\\IfMenu\\' => 15,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Layered\\IfMenu\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1675f12dcb616dfd5aef9267ba43b735::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1675f12dcb616dfd5aef9267ba43b735::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
