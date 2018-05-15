<?php
/**
 * Created by PhpStorm.
 * User: GQ
 * Date: 2018/5/14
 * Time: 9:59
 */

    define('APP_PATH',__DIR__);  // 定义跟目录常量
    include 'src/Loader.php';  // 加载自动加载类
    spl_autoload_register("src\\Loader::autoload");

    $db = (new \src\factory\SimpleFactory())->createDb();
    $db->connect();