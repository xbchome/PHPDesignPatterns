<?php
/**
 * Created by PhpStorm.
 * User: GQ
 * Date: 2018/5/9
 * Time: 11:26
 */

namespace xbc\observer;


class EmailObserver implements Observer
{
    public function update($value = null)
    {
        // TODO: Implement update() method.
        echo $value.'你发送了邮件<br>';
    }
}