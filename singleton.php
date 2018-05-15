<?php
/**
 * Created by PhpStorm.
 * User: GQ
 * Date: 2018/5/15
 * Time: 15:53
 */

define('APP_PATH',__DIR__);  // 定义跟目录常量
include 'src/Loader.php';  // 加载自动加载类
spl_autoload_register("src\\Loader::autoload");

$db = \src\singleton\Db::getInstance();

$db->setName('张三');
echo $db->getName();
$db2 = \src\singleton\Db::getInstance();
echo $db2->getName();