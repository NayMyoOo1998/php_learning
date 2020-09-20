<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitadfe950c9c357a97017958290cb01134
{
    public static $classMap = array (
        'App\\Controllers\\PageController' => __DIR__ . '/../..' . '/app/controller/PageController.php',
        'App\\core\\App' => __DIR__ . '/../..' . '/core/App.php',
        'App\\core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'App\\core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
        'ComposerAutoloaderInitadfe950c9c357a97017958290cb01134' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInitadfe950c9c357a97017958290cb01134' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'QueryBilder' => __DIR__ . '/../..' . '/core/database/QueryBilder.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitadfe950c9c357a97017958290cb01134::$classMap;

        }, null, ClassLoader::class);
    }
}
