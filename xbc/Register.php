<?php
/**
 * Created by PhpStorm.
 * User: GQ
 * Date: 2018/4/23
 * Time: 16:20
 */

namespace xbc;


class Register
{
    // 相当于树干用于 用于挂树叶和果实 也就是存储实例对象
    public static $objects;


    /**
     * @param $objName  要存储的对象的别名
     * @param $obj  要注册的对象
     */
    public static function set($objName,$obj)
    {
        self::$objects[$objName] = $obj;
    }

    /**
     * 从注册树中读取实例
     * @param $objName 对象别名
     */
    public static function get($objName)
    {
        if (isset(self::$objects[$objName])) {
            return self::$objects[$objName];
        }else
        {
            throw new \Exception('没有找到'.$objName.'对象');
        }
    }

    /**
     *销毁注册对象
     */
    public static function _unset($objName)
    {
        unset(self::$objects[$objName]);
    }
}