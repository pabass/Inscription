<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc6b704d27957c1a7d338b8ba956f93de
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'APP\\Model\\' => 10,
            'APP\\Core\\' => 9,
            'APP\\Controller\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'APP\\Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/model',
        ),
        'APP\\Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'APP\\Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controllers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc6b704d27957c1a7d338b8ba956f93de::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc6b704d27957c1a7d338b8ba956f93de::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc6b704d27957c1a7d338b8ba956f93de::$classMap;

        }, null, ClassLoader::class);
    }
}
