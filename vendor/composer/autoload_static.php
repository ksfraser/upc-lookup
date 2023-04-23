<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit367fcc0679107f744c3f5cf19b4ee082
{
    public static $prefixLengthsPsr4 = array (
        'k' => 
        array (
            'ksfraser\\origin\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ksfraser\\origin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit367fcc0679107f744c3f5cf19b4ee082::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit367fcc0679107f744c3f5cf19b4ee082::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
