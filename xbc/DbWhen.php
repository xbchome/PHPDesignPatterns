<?php
/**
 * Created by PhpStorm.
 * User: GQ
 * Date: 2018/4/23
 * Time: 16:11
 */

namespace xbc;


class DbWhen
{
    private static $db;
    /**
     * DbWhen constructor.
     *  单例模式 就是让一个类的只能有一个对象
     *
     */
    private function __construct()
    {

    }

    static function getInstance()
    {
        if(self::$db)
        {
            return self::$db;
        }
       return self::$db = new self();
    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    public function test()
    {
        echo 'test.....db';
    }

}