<?php
/**
 * Created by PhpStorm.
 * User: GQ
 * Date: 2018/4/23
 * Time: 16:58
 */
namespace xbc\adpter;
interface Datebase
{
    public function connect();

    public function query();

    public function close();
}