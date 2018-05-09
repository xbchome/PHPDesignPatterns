<?php
/**
 * Created by PhpStorm.
 * User: GQ
 * Date: 2018/5/9
 * Time: 11:43
 */

namespace xbc\observer;


class User extends EventGenerator
{
    public $name = '';
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * 重写静态类的方法
     */
    public function notify()
    {
        foreach ($this->observers as $v) {
            $v->update($this->name);
        }
    }


}