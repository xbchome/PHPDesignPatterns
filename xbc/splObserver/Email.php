<?php
/**
 * Created by PhpStorm.
 * User: GQ
 * Date: 2018/5/9
 * Time: 18:14
 */

namespace xbc\splObserver;


use SplSubject;

/**
 *
 * Class User
 * @package xbc\splObserver
 */
class Email implements \SplObserver
{
    public function update(SplSubject $subject)
    {
        // TODO: Implement update() method.
//        if (func_num_args() === 2) {
//            $userInfo = func_get_arg(1);
//            echo "向 {$userInfo['email']} 发送电子邮件成功。内容是：你好 {$userInfo['username']}" .
//                "你的新密码是 {$userInfo['password']}，请妥善保管", PHP_EOL;
//        }
        echo "{$subject->name}您已经注册完成";
    }
}