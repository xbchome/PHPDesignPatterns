<?php
/**
 * Created by PhpStorm.
 * User: GQ
 * Date: 2018/5/3
 * Time: 18:36
 */

namespace xbc\strategy;

/**
 * Interface ShowStrategy
 * @package xbc\strategy
 * 商品展示策略接口
 */

interface ShowStrategy
{
    // 显示商品类别
    public function showCategory();
    // 显示商品
    public function showGoods();
}