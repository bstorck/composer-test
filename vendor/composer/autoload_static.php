<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1d3bc020f030541ac555c4cc8a7cd8b1
{
    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HelloWorld' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit1d3bc020f030541ac555c4cc8a7cd8b1::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
