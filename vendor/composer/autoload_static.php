<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite022c7189514e0467ecad3e05657c233
{
    public static $prefixLengthsPsr4 = array (
        'l' => 
        array (
            'ls\\pluginmanager\\' => 17,
            'ls\\menu\\' => 8,
            'ls\\helpers\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ls\\pluginmanager\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application/libraries/PluginManager',
            1 => __DIR__ . '/../..' . '/application/libraries/PluginManager/Storage',
        ),
        'ls\\menu\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application/libraries/MenuObjects',
        ),
        'ls\\helpers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application/helpers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite022c7189514e0467ecad3e05657c233::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite022c7189514e0467ecad3e05657c233::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
