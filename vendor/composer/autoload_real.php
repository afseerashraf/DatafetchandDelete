<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit1c439f111e5c89f8283a409f9cf4d390
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

        spl_autoload_register(array('ComposerAutoloaderInit1c439f111e5c89f8283a409f9cf4d390', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit1c439f111e5c89f8283a409f9cf4d390', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit1c439f111e5c89f8283a409f9cf4d390::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}