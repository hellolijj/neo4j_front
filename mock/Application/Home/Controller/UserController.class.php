<?php

namespace Home\Controller;

class UserController extends  CommonController {


    public function register() {
        if (IS_POST) {
            $this->errorReturn("post格式");
        } else {
            $this->errorReturn("post格式");
        }
    }

    public function login() {
        if (IS_POST) {
            $user_id = trim(I('user_id'));
            $user = '{
                "userid": "hello_lijj@qq.com",
                "avatar": "",
                "username": "软院小哥哥",
                "sex":"男",
                "desc": "我是软院的小哥哥"
              }';
            $user_arr = json_decode($user);
            $this->successReturn("", $user_arr);

        } else {
            $this->errorReturn("post格式");
        }

    }

    /**
     * 
     */
    public function friend_list() {

        $friend_list = [
            [
                'userid' => 1,
                'avatar' => './res/static/images/info-img.png',
                'username' => '美工程序员'
            ],
            [
                'userid' => 2,
                'avatar' => 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1546516813041&di=41b6bb70a3c4f64d9e021db2f25c15c3&imgtype=0&src=http%3A%2F%2Fimg5.duitang.com%2Fuploads%2Fitem%2F201512%2F17%2F20151217174617_yvzHQ.jpeg',
                'username' => '里斯'
            ],
            [
                'userid' => 3,
                'avatar' => 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1546516822050&di=aa3044686168b25d2803ab074b35980f&imgtype=jpg&src=http%3A%2F%2Fimg1.imgtn.bdimg.com%2Fit%2Fu%3D1959417461%2C2899351494%26fm%3D214%26gp%3D0.jpg',
                'username' => '张安'
            ],
        ];
        

        $this->successReturn("", $friend_list);

    }

    public function friend_delete() {
        $this->successReturn("", []);
    }

    public function friend_add() {
        $this->successReturn("", []);
    }





}