<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd3ce426d63e385ec2732a70a0e2184f3
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'mainController\\' => 15,
        ),
        'c' => 
        array (
            'contactFormHandler\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'mainController\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'contactFormHandler\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd3ce426d63e385ec2732a70a0e2184f3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd3ce426d63e385ec2732a70a0e2184f3::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitd3ce426d63e385ec2732a70a0e2184f3::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
