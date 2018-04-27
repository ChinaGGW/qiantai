<?php
namespace app\index\controller;
use think\Controller;
use app\index\controller\Base;
use think\Request;
class Index extends Controller
{
    public function index() {
        return $this->fetch();
    }
    public function twoMethod() {
    	return $this->fetch();
    }
    public function getGameInfo() {
    	return $this->fetch('gameinfo');
    }
    public function getUserInfo() {
    	return $this->fetch('userinfo');
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
