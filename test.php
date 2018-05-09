<?php
/**
 * Created by PhpStorm.
 * User: GQ
 * Date: 2018/4/27
 * Time: 17:34
 */
header('Content-type:text/html;charset=utf-8');
//print_r(openssl_get_cipher_methods());
substr('angsdsgsdg',0);
echo jieMi();
echo '<br>';
echo base64_encode('I/CxpyS1YAtTELwH4VTVNH9q8P1A3Vxayv5I5EsCV7E=');
die();
$j;
echo $e=jM();
echo PHP_EOL;
var_dump(jieMi($e,$j));
die;
$ivs = openssl_get_cipher_methods();
foreach ($ivs as $v) {
    echo PHP_EOL;
    print_r(openssl_cipher_iv_length($v));
}


function jM()
{
    global $j;
    $plaintext = 'anbaaaaaaaaaaaaaaaa哈哈李白';
    $ivlen = openssl_cipher_iv_length($cipher='AES-128-CBC');
    $iv = openssl_random_pseudo_bytes($ivlen);
    $j = $iv;
    $ciphertext = openssl_encrypt($plaintext,$cipher,$key='ksks',$options=0,$iv);
    return $ciphertext;
}

function jieMi($p='iFMXru3XsAdytpGJ9938J7NOCewZjuMJjPAyBI9R4/o=',$iv='1234567896541234')
{
    $plaintext = $p;
    $cipher='AES-128-CBC';
    $iv = $iv;
//    $ivlen = openssl_cipher_iv_length($cipher='AES-128-CBC');
//    $iv = openssl_random_pseudo_bytes($ivlen);
    $ciphertext = openssl_decrypt($plaintext,$cipher,$key='1234567896547896',$options=0,$iv);
    return $ciphertext;
}
