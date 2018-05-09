<?php
/**
 * Created by PhpStorm.
 * User: GQ
 * Date: 2018/5/9
 * Time: 11:48
 */
define('DASEDIR',__DIR__);
include DASEDIR.'/xbc/Loader.php';
spl_autoload_register("xbc\\Loader::aoutload");


$user1 = new \xbc\observer\User();
$user1->setName('麦总');
$user1->attach(new \xbc\observer\EmailObserver());
$user1->attach(new \xbc\observer\SMS());
$user1->detach(new \xbc\observer\EmailObserver());
$user1->notify();



