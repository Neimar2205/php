<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita41c87cb6dcc9eda8b2e467901fe6061
{
    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInita41c87cb6dcc9eda8b2e467901fe6061::$prefixesPsr0;
            $loader->classMap = ComposerStaticInita41c87cb6dcc9eda8b2e467901fe6061::$classMap;

        }, null, ClassLoader::class);
    }
}
