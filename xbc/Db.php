<?php
/**
 * Created by PhpStorm.
 * User: GQ
 * Date: 2018/4/23
 * Time: 15:15
 */

namespace xbc;

/**
 * Class Db
 * @package xbc
 * 链式操作
 */
class Db
{
    function where($were)
    {
        return $this;
    }

    public function select()
    {
        return $this;
    }

    public function dele()
    {
        return $this;
    }
}