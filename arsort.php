<?php
/**
 * Created by PhpStorm.
 * User: GQ
 * Date: 2018/5/3
 * Time: 17:01
 */

$datas['url'] = 'https://www.baidu.com';
$datas['noncestr'] ='no';
$datas['timestamp'] = 'smgs';
$datas['jsapi_ticket'] = '1234';
var_dump(ksort($datas));
var_dump($datas);
echo implode ('&',$datas);
//$string = "jsapi_ticket=$jsapiTicket&noncestr=$nonceStr&timestamp=$timestamp&url=$url";