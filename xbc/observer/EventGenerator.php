<?php
/**
 * Created by PhpStorm.
 * User: GQ
 * Date: 2018/5/9
 * Time: 10:58
 */

namespace xbc\observer;


abstract class EventGenerator
{
    protected $observers = [];  // 观察者集合

   // 添加观察者方法

    public function attach(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    /**
     * @param Observer $observer
     *
     */
    public function detach(Observer $observer)
    {

        foreach ($this->observers as $key => $value) {
            if ($value == $observer) {
                unset($this->observers[$key]);
            }
        }
    }

    public function notify()
    {
        foreach ($this->observers as $v) {
            $v->update();
        }
    }

}