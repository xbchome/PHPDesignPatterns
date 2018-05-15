<?php
/**
 * Created by PhpStorm.
 * User: GQ
 * Date: 2018/5/14
 * Time: 10:32
 */

namespace src\factory;
use src\database\Db;

class SimpleFactory
{
    public function createDb():Db
    {
        return new Db();
    }
}