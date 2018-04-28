<?php
namespace app\index\controller;
use think\Controller;
use app\index\controller\Base;
use think\Request;
use think\Session;

class Index extends Base
{
    public function index() {
        return $this->fetch('index',['userinfo'=>$this->userinfo]);
    }
    public function twoMethod() {
    	return $this->fetch('twoMethod',['userinfo'=>$this->userinfo]);
    }
    public function getGameInfo() {
    	return $this->fetch('gameinfo',['userinfo'=>$this->userinfo]);
    }
    public function getUserInfo() {
    	return $this->fetch('userinfo',['userinfo'=>$this->userinfo]);
    }
    public function qiangZhuang() {

    }
    public function xiaZhu(Request $request) {
        $data = $request->post();
        return json_encode($data);
    }
    // public function baoZiXiaZhu(Request $request) {
    //     $data = $request->post();
    //     return json_encode($data);
    // }
    public function getQiHao() {
        
    }
}
