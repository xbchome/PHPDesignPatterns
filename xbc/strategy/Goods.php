<?php
/**
 * Created by PhpStorm.
 * User: GQ
 * Date: 2018/5/4
 * Time: 8:43
 */

namespace xbc\strategy;


class Goods
{
    public $obj;
    public function __construct(ShowStrategy $showStrategy)
    {
        $this->obj = $showStrategy;
    }

    public function show()
    {
        $this->obj->showGoods();
        echo '<br>';
        $this->obj->showCategory();
    }
}