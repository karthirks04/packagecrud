<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfb4287c178852f18b330129f9fc19d8f
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Laraveldaily\\laravelpermissioneditor\\' => 37,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Laraveldaily\\laravelpermissioneditor\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfb4287c178852f18b330129f9fc19d8f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfb4287c178852f18b330129f9fc19d8f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfb4287c178852f18b330129f9fc19d8f::$classMap;

        }, null, ClassLoader::class);
    }
}