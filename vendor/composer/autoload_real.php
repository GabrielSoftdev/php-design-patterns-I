<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit58f9403cb3f3857d45f1244002007245
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

        spl_autoload_register(array('ComposerAutoloaderInit58f9403cb3f3857d45f1244002007245', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit58f9403cb3f3857d45f1244002007245', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit58f9403cb3f3857d45f1244002007245::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
