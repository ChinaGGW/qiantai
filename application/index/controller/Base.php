<?php
namespace app\index\controller;
use think\Controller;
use think\Session;
class Base extends Controller {
	public function _initialize() {
		if(Session::has('username') && Session::has('userid')) {
			return ;
		} else {
			return $this->error('请先登录！',url('/tologin'),30);
	}
}
}
?>