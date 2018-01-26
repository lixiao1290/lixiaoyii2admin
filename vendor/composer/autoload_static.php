<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5c08f9e828c281d6324ad8ed185d5464
{
    public static $files = array (
        '2cffec82183ee1cea088009cef9a6fc3' => __DIR__ . '/..' . '/ezyang/htmlpurifier/library/HTMLPurifier.composer.php',
    );

    public static $prefixLengthsPsr4 = array (
        'y' => 
        array (
            'yii\\composer\\' => 13,
            'yii\\codeception\\' => 16,
            'yii\\' => 4,
        ),
        'l' => 
        array (
            'lixiao\\admin\\' => 13,
        ),
        'c' => 
        array (
            'cebe\\markdown\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'yii\\composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-composer',
        ),
        'yii\\codeception\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-codeception',
        ),
        'yii\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2',
        ),
        'lixiao\\admin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'cebe\\markdown\\' => 
        array (
            0 => __DIR__ . '/..' . '/cebe/markdown',
        ),
    );

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HTMLPurifier' => 
            array (
                0 => __DIR__ . '/..' . '/ezyang/htmlpurifier/library',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5c08f9e828c281d6324ad8ed185d5464::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5c08f9e828c281d6324ad8ed185d5464::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit5c08f9e828c281d6324ad8ed185d5464::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
