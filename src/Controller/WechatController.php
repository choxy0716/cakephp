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
//        $getData = "get:".$_GET;
//        $file = fopen(__DIR__.'/Component/wechat.log', 'w') or die("unable to open the file!");
//        fwrite($file, $getData);
//        fclose($file);
//        $this->loadComponent('ProtoWechat');
//        $this->ProtoWechat->checkSignature();
    }
}
