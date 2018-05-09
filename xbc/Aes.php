<?php
/**
 * Created by PhpStorm.
 * User: GQ
 * Date: 2018/5/2
 * Time: 13:31
 * AES 加密类
 */

namespace xbc;


class Aes
{
    public  $key ='';
    public $cipher = '';
    public $option = 0;

    /**
     * Aes constructor.
     * @param string $cipher  加密方式
     * @param string $key  秘钥
     */
    public function __construct($cipher='AES-128-CBC',$key='xbc')
    {
        $this->cipher = $cipher;
        $this->key = $key;
    }

    /**
     * @param $plaintext 要加密的字符串
     * @return mixed
     */
    public  function encryptAES($plaintext)
    {
        $ivlen = openssl_cipher_iv_length($this->cipher);  // 获取加密方式的长度
        $iv = openssl_random_pseudo_bytes($ivlen); //生成对应长度的随机字符串
        $ciphertext_raw = openssl_encrypt($plaintext,$this->cipher,$this->key,$this->option,$iv);
//        return  urlencode($ciphertext_raw);
        $ciphertext = base64_encode($iv.$ciphertext_raw);
//        echo 'url前：'.$ciphertext.'<br>';
//        return $ciphertext;
        return urlencode($ciphertext);
    }

    /**
     * @param $ciphertext
     * @return string 返回解密后的字符串
     */
    public function decryptAES($ciphertext)
    {
        $ciphertext = urldecode($ciphertext);
       // echo 'url后：'.$ciphertext.'<br>';
        $c = base64_decode($ciphertext);
        $ivlen = openssl_cipher_iv_length($this->cipher);
        $iv = substr($c,0,$ivlen);
        $cipher_p = substr($c,$ivlen);
        $original_plaintext = openssl_decrypt($cipher_p,$this->cipher,$this->key,$this->option,$iv);
        return $original_plaintext;
    }
}