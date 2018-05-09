<?php
/**
 * Created by PhpStorm.
 * User: GQ
 * Date: 2018/4/23
 * Time: 14:26
 */
namespace  xbc;
class Loader
{
    static function aoutload ($class)
    {
       require DASEDIR.'/'.$class.'.php';
    }
}