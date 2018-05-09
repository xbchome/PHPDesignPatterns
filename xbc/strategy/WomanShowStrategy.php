<?php
/**
 * Created by PhpStorm.
 * User: GQ
 * Date: 2018/5/3
 * Time: 18:50
 */

namespace xbc\strategy;

/**
 * Class WomanShowStrategy
 * @package xbc\strategy
 *
 */

class WomanShowStrategy implements ShowStrategy
{
    public function showGoods()
    {
        // TODO: Implement showGoods() method.
        echo '口红';
    }

    public function showCategory()
    {
        // TODO: Implement showCategory() method.
        echo '女性商品类目';

    }

}