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

    public static $classMap = array (
        'HelloWorld\\SayHello' => __DIR__ . '/../..' . '/src/HelloWorld/SayHello.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit1d3bc020f030541ac555c4cc8a7cd8b1::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit1d3bc020f030541ac555c4cc8a7cd8b1::$classMap;

        }, null, ClassLoader::class);
    }
}
