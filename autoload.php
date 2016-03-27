<?php

/*
//Это если PHP ниже 5.3
class Autoloader
{
    private static $_lastLoadedFilename;

    public static function loadPackages($className)
    {
        $pathParts = explode('\\', $className);
        self::$_lastLoadedFilename = __DIR__ . DIRECTORY_SEPARATOR .implode(DIRECTORY_SEPARATOR, $pathParts) . '.php';
        require_once(self::$_lastLoadedFilename);
    }

    public static function loadPackagesAndLog($className)
    {
        self::loadPackages($className);
        printf("Class %s was loaded from %sn", $className, self::$_lastLoadedFilename);
    }
}

spl_autoload_register(array('Autoloader', 'loadPackagesAndLog'));
*/

spl_autoload_extensions(".php");
spl_autoload_register();