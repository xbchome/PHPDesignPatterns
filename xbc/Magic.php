<?php
/**
 * Created by PhpStorm.
 * User: GQ
 * Date: 2018/4/23
 * Time: 15:19
 */

namespace xbc;


class Magic
{
    /**
     * Magic constructor.
     * 构造函数
     */
    public function __construct()
    {

    }

    /**
     * @param $name
     * @param $value
     * __set 方法的调用时机； 当对象设置私有属性或者调用一个不存在的属性是触发
     */
    public function __set($name, $value)
    {
        // TODO: Implement __set() method.
        echo $name.''.$value;
    }

    public function __get($name)
    {
        // TODO: Implement __get() method.
    }

    /**
     * @param $name  方法名
     * @param $arguments  方法的参数
     * 当对象调用一个不存在的方法时调用
     */
    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
        echo '你调用的'.$name .'方法不存在' ;
        var_dump($arguments);
    }
}