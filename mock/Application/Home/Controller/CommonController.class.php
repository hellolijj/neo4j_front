<?php
namespace Home\Controller;
use Think\Controller;

class CommonController extends Controller {


    /**
     * @param string $message 错误信息
     */
    public function errorReturn($message = '') {

        $this->ajaxReturn(['status' => 405, 'message' => $message]);
    }

    /**
     * @param string $message 成功返回
     */
    public function successReturn($message = '', $data = '') {

        $this->ajaxReturn(['status' => 200, 'message' => $message, 'data' => $data, 'time' => time()], 'json');
    }


}