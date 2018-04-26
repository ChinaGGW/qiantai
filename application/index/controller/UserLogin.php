<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\UserModel;
use think\Request;
class UserLogin extends Controller {
	public function viewLogin() {
		return $this->fetch('login');
	}
	public function toRegister(Request $request) {
		$data = $request->post();
		print_r($data);
	}
	public function doLogin(Request $request) {
		$data = $request->post();
	}
}
?>