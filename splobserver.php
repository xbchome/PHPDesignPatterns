<?php
/**
 * Created by PhpStorm.
 * User: GQ
 * Date: 2018/5/9
 * Time: 18:40
 */

define('DASEDIR',__DIR__);
include DASEDIR.'/xbc/Loader.php';
spl_autoload_register("xbc\\Loader::aoutload");

$user = new \xbc\splObserver\User('麦总','1234');

$user->attach(new \xbc\splObserver\Email());
$user->notify();
