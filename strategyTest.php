<?php
/**
 * Created by PhpStorm.
 * User: GQ
 * Date: 2018/5/4
 * Time: 8:49
 */
define('DASEDIR',__DIR__);
include DASEDIR.'/xbc/Loader.php';

spl_autoload_register("xbc\\Loader::aoutload");




 $sex = isset($_GET['sex'])?$_GET['sex']:1;

if ($sex ==1) {
    $strategy  = new \xbc\strategy\ManShowStrategy();
}elseif($sex==0)
{
    $strategy = new \xbc\strategy\WomanShowStrategy();
}
 $gd = new \xbc\strategy\Goods($strategy);
$gd->show();