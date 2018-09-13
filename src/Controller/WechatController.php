<?php
/**
 * Created by PhpStorm.
 * User: elliot
 * Date: 13/09/2018
 * Time: 00:12
 */

namespace App\Controller;


class WechatController  extends AppController
{
    public function initialize()
    {
        parent::initialize(); // TODO: Change the autogenerated stub

        $this->loadComponent('MyWechat');
    }

    public function index(){
        $this->MyWechat->index();
    }

    /**
     * 接入微信公众号
     */
    public function join(){
        $this->MyWechat->join();
    }
}
