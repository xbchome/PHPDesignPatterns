<?php
/**
 * Created by PhpStorm.
 * User: GQ
 * Date: 2018/5/2
 * Time: 14:07
 */
header('Content-type:text/html;charset=utf-8');
define('DASEDIR',__DIR__);
//var_dump(DASEDIR);

include DASEDIR.'/xbc/Loader.php';
spl_autoload_register('xbc\\Loader::aoutload');
$db = new \xbc\Db();
 $aes = new \xbc\Aes();
// echo $p = $aes->encryptAES('name=1&typa=adnina&libai=nannan&xbc=想不出');
 echo '<br>.ss';
 var_dump($aes->decryptAES('OCgklXdtTX/J9rsC2OHL+X/E7XoedVl2DBVzNiUUWU0='));