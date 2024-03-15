<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitfc12a29f4bbd7a44992a257d6d9b129f
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitfc12a29f4bbd7a44992a257d6d9b129f', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitfc12a29f4bbd7a44992a257d6d9b129f', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitfc12a29f4bbd7a44992a257d6d9b129f::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}