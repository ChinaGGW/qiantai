<?php
namespace app\index\controller;
use think\Controller;
use app\index\controller\Base;
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
}
