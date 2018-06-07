<?php
/**
 * Created by PhpStorm.
 * User: GQ
 * Date: 2018/4/23
 * Time: 14:26
 */
use \xbc\Magic;
use \xbc\Register;
define('DASEDIR',__DIR__);
var_dump(DASEDIR);

include DASEDIR.'/xbc/Loader.php';  // 引入自动加载类


spl_autoload_register('xbc\\Loader::aoutload');  // 注册自动加载类

 xbc\Object::test();

  $m =  new Magic();  // new 魔术类
  $m->xbc = 'ss';   //  给一个不存在的属性设置值时
  $m->xbc('xx','ss');  // 调用一个不存在的方法

    $db = \xbc\DbWhen::getInstance();
    \xbc\Register::set('db',$db);
    $dbs = \xbc\Register::get('db');
    $dbs->test();
    Register::_unset('db');
//    Register::get('db');  0123oail
    print_r($db);

    var_dump($_SERVER);


