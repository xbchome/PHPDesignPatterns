<?php
/**
 * Created by PhpStorm.
 * User: GQ
 * Date: 2018/5/15
 * Time: 15:10
 */
namespace src\singleton;
class Db
{
    public $name;
    private static $connect;
    /**
     * Db constructor.
     * 单例模式必须私有化构造函数
     */
    private function __construct()
    {

    }

    /**
     * @return Db
     * 获取对象的唯一方式
     */
    public static function getInstance()
    {
        if(self::$connect)  // 判断是否存在对象
        {
            return self::$connect;  // 如果不存在就实例化一个
        }else {
            self::$connect = new self();
            return self::$connect;  // 如果存在就直接返回
        }
    }

    /**
     * 禁止克隆
     */
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }



    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

}