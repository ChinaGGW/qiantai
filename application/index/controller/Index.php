<?php
namespace app\index\controller;
use think\Controller;
use app\index\controller\Base;
use think\Request;
use think\Session;
use app\index\model\DataTimeModel;

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
    public function getQiHao(Request $request) {
        if(!$request->isAjax()){
            die();
        }
        $dm = new DataTimeModel();
        $y = date('Y');
        $yue = date('m');
        $d = date('d');
        $h = date('H');
        $m = substr(date('i'),0,1)+1;
        $s = substr($m,0,1); 
        if($s) {
            $str = $h.':'.$m.'%';
            $res = $dm->where('actionTime','like',$str)->find();
            $qihao = $y.'-'.$yue.'-'.$d.'-'.$res->actionNo;
            $kjsj = $res->actionTime;
            $data = ['qihao'=>$qihao,'kjsj'=>$kjsj];
           return json_encode($data);
        } else {
            $str = $h.':'.'%';
            $res = $dm->where('actionTime','like',$str)->limit(0,1)->find();
            halt($dm->getLastSql());
        }
        echo $h.'时'.$m.'分'.'分钟第一位'.$s;
    }
}
