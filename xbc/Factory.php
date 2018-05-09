<?php
/**
 * Created by PhpStorm.
 * User: GQ
 * Date: 2018/4/23
 * Time: 16:04
 */

namespace xbc;


class Factory
{
    /**
     * @return Db
     *  工厂模式主要用途 创建对象 适用场景 当一
     */
    static function createDatebase()
    {
        $db = new Db();
        return $db;
    }
}