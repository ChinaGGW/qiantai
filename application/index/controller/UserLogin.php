<?php
namespace app\index\controller;
use app\index\model\UserModel;
use think\Controller;
use think\Request;
use think\Session;

class UserLogin extends Controller {
	/**
	 * [viewLogin 展示登陆界面]
	 * @return [type] [description]
	 */
	public function viewLogin() {
		return $this->fetch('login');
	}
	/**
	 * [toRegister 注册逻辑]
	 * @param  Request $request [description]
	 * @return [type]           [description]
	 */
	public function toRegister(Request $request) {
		$data = $request->post();
		//print_r($data);
		if (!captcha_check($data['captcha'])) {
			$msg = ['code' => '#captcha', 'msg' => '验证码不正确'];
			return json_encode($msg);
		};
		$um = new UserModel();
		$state = $um->where('username', $data['username'])->find();
		if ($state) {
			$msg = ['code' => '[name="username"]', 'msg' => '名称已被占用'];
			return json_encode($msg);
		}
		unset($data['captcha']);
		unset($data['repassword']);
		$data['password'] = md5($data['pwd']);
		unset($data['pwd']);
		$um->save($data);
		if ($um->id !== false) {
			$msg = ['code' => '#zhucebtn', 'msg' => '注册成功！'];
			return json_encode($msg);
		} else {
			$msg = ['code' => '#zhucebtn', 'msg' => '服务器错误'];
			return json_encode($msg);
		}

	}
	/**
	 * [doLogin 登陆逻辑]
	 * @param  Request $request [description]
	 * @return [type]           [description]
	 */
	public function doLogin(Request $request) {
		$data = $request->post();
		$um = new UserModel();
		$uname = $data['user'];
		$password = md5($data['password']);
		if ($uname == '' || $password == '') {
			$msg = ['code' => 0, 'msg' => '用户名或密码不能为空i！'];
			return json_encode($msg);
		}
		$status = $um->where('username', $uname)->where('password', $password)->find();
		if ($status) {
			if ($data['rember']) {
				setcookie('username', $uname, time() + 10000);
				setcookie('password', $data['password'], time() + 10000);
			}
			$userid = $status['id'];
			$username = $status['username'];
			$nickName = $status['nickName'];
			$status['loginTime'] = time();
			$status->save();
			Session::set('userid', $userid, 'user_');
			Session::set('username', $username, 'user_');
			Session::set('nickName', $nickName, 'user_');
			$msg = ['code' => 1, 'msg' => 'success'];
			return json_encode($msg);
		} else {
			$msg = ['code' => 0, 'msg' => '用户名或密码错误i！'];
			return json_encode($msg);
		}
	}
	/**
	 * [logOut 用户退出]
	 * @return [type] [description]
	 */
	public function logOut() {
		Session::clear('user_');
		setcookie('username', '', time() - 1);
		setcookie('password', '', time() - 1);
		return $this->error('退出成功！', url('/tologin'), 30);
	}
}
?>
