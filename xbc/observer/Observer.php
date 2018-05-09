<?php
/**
 * Created by PhpStorm.
 * User: GQ
 * Date: 2018/5/9
 * Time: 11:22
 */

namespace xbc\observer;


interface Observer
{
    public function update($value  = null);

}