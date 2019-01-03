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

//            $user_arr['userid'] = $user_id;
            $this->successReturn("", $user_arr);

        } else {
            $this->errorReturn("post格式");
        }

    }

    public function login405() {
        $this->errorReturn('Invalid username/password supplied');
    }


    public function logout() {
        $this->successReturn();
    }





}