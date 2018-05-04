<?php
namespace app\index\controller;
use app\index\model\UserModel;
use think\Controller;
use think\Session;

class Base extends Controller {
	protected $userinfo;
	public function _initialize() {
		$um = new UserModel();
		if (cookie('username') != null && cookie('password') != null) {

			$status = $um->where('username', cookie('username'))->where('password', md5(cookie('password')))->find();
			if (!empty($status)) {
				$userid = $status['id'];
				$username = $status['username'];
				$nickName = $status['nickName'];
				$status['loginTime'] = time();
				$status->save();
				Session::set('userid', $userid, 'user_');
				Session::set('username', $username, 'user_');
				Session::set('nickName', $nickName, 'user_');
			}

		}
		$this->userinfo = $um->where('id', session('userid', '', 'user_'))->find();
		if (Session::has('username', 'user_') && Session::has('userid', 'user_')) {
			return;
		} else {
			return $this->error('请先登录！', url('/tologin'), 30);
		}
	}
}
?>
