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
                "create_time" => "2018-12-22 13:24",
                "contents_img" => [
                    "http://www.pptok.com/wp-content/uploads/2012/08/xunguang-4.jpg",
                    "http://5b0988e595225.cdn.sohucs.com/images/20181219/aec27193b3834a1694f535ba307995ad.jpeg"
                ],
                "comments" => 2,
                "stars" => 8
            ],
        ];

        $this->successReturn("", ["dynamic_lists" => $data]);


    }


    public function create() {
        $this->successReturn("", [232,24]);
    }



}