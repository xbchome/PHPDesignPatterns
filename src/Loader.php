<?php
/**
 * Created by PhpStorm.
 * User: GQ
 * Date: 2018/5/14
 * Time: 9:56
 */
namespace src;

class Loader
{
    static function autoload($class)
    {
        require APP_PATH.'/'.$class.'.php';
    }
}