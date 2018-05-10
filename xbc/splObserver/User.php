<?php
/**
 * Created by PhpStorm.
 * User: GQ
 * Date: 2018/5/9
 * Time: 18:25
 */

namespace xbc\splObserver;


use SplObserver;

/**
 * Class User
 * @package xbc\splObserver
 * 被观察者 也是事件的发布者
 */
class User implements \SplSubject
{
    public $name = '';
    public $password ;

    private $observers = null;
    public function __construct($name,$password)
    {
        $this->name = $name;
        $this->password = $password;
        $this->observers = new \SplObjectStorage();
    }

    /**
     * @param SplObserver $observer
     * 注册观察者
     */
    public function attach(SplObserver $observer)
    {
        // TODO: Implement attach() method.
         $this->observers->attach($observer);
    }

    /**
     * @param SplObserver $observer
     * 删除观察者
     */
    public function detach(SplObserver $observer)
    {
        // TODO: Implement detach() method.
        $this->observers->detach($observer);
    }

    /**
     *
     */
    public function notify()
    {
        $data = [
            'email' => 'test@qq.com',
            'username' => $this->name,
            'password'  => $this->password
        ];
        // TODO: Implement notify() method.
        foreach ($this->observers as $obj) {
            $obj->update($this,$data);
        }
    }

    public function updatePassword()
    {
        echo '已注册';
    }

}