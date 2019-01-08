<?php
namespace Home\Controller;
use Think\Controller;

class DynamicController extends CommonController {

    public function getList() {

        $data = [
            [
                'userid' => "hello_lijj@qq.com",
                'avatar' => "../res/static/images/info-img.png",
                'username' =>  "软件小哥哥",
                "contents" => "今天天气很好呀",
                "create_time" => "2018-12-22 13:24"
            ],
            [
                'userid' => "hello_lijj@qq.com",
                'avatar' => "../res/static/images/info-img.png",
                'username' =>  "软件小哥哥",
                "contents" => "今天天气很好呀",
                "create_time" => "2018-12-22 13:24"
            ],
            [
                'userid' => "hello_lijj@qq.com",
                'avatar' => "../res/static/images/info-img.png",
                'username' =>  "软件小哥哥",
                "contents" => "今天天气很好呀",
                "create_time" => "2018-12-22 13:24"
            ],
        ];

        $this->successReturn("", ["dynamic_lists" => $data]);


    }


    public function create() {
        $this->successReturn("", [232,24]);
    }



}