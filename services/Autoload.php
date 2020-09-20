<?php
namespace App\services;

class Autoload
{
    public function load($className)
    {
        $file = str_replace(
                ['App\\', '\\'],
                [dirname(__DIR__) . '/', '/'],
                $className
            );
        $file .= '.php';
        if (file_exists($file)) {
            include $file;
        }
    }
}
