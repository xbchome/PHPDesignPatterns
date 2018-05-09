<?php
/**
 * Created by PhpStorm.
 * User: GQ
 * Date: 2018/5/3
 * Time: 18:43
 */

namespace xbc\strategy;

/**
 * Class ManShowStrategy
 * @package xbc\strategy
 * 男性用户展示策
 */

class ManShowStrategy implements ShowStrategy
{
    public function showCategory()
    {
        // TODO: Implement showCategory() method.
        echo '电脑';
    }

    public function showGoods()
    {
        // TODO: Implement showGoods() method.
        echo '男性商品类目';
    }

}