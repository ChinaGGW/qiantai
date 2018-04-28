<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"F:\www\qiantai\public/../application/index\view\user_login\login.html";i:1524720954;}*/ ?>
<!doctype html>
<html>
<head>
<title>鱼虾蟹登录界面</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- font files -->
<!--<link href='//fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>-->
<!--<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>-->
<!-- /font files -->
<!-- css files -->
<link href="/static/css/style.css" rel='stylesheet' type='text/css' media="all" />
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- /css files -->
</head>
<body>
<h1>鱼虾蟹娱乐城</h1>
<div class="form-w3ls">
    <ul class="tab-group cl-effect-4">
        <li class="tab active"><a href="#signin-agile">登录</a></li>
		<li class="tab"><a href="#signup-agile">注册</a></li>        
    </ul>
    <div class="tab-content">
        <div id="signin-agile">   
			<form id="denglu">
				<p class="header">用户名</p>
				<input type="text" name="user" value="" onfocus="this.value = this.value;" onblur="if (this.value == '') {this.value = '用户名不能为空！';}">
				
				<p class="header">密码</p>
				<input type="password" name="password" value="" onfocus="this.value = this.value;" onblur="if (this.value == '') {this.value = '';}">
				
				<input type="checkbox" id="brand" value="">
				<label for="brand"><span></span>记住我</label>
				
				<button type="button" class="sign-in" id="denglubtn">登陆</button>
				
				<ul class="links">
					<li class="pass-w3ls"><a href="#">忘记密码？</a></li>
				</ul>
			</form>
		</div>
		<div id="signup-agile">   
			<form id="zhuce">
				
				<p class="header">用户名</p>
				<input type="text" name="username" value="" onfocus="this.value = this.value;" onblur="valiInfo(1,this.value)">
				
				<p class="header">手机号</p>
				<input type="tel" name="phone" value="" onfocus="this.value = this.value;" onblur="valiInfo(2,this.value)">
				
				<p class="header">邮箱</p>
				<input type="email" name="email" value="" onfocus="this.value = this.value;" onblur="valiInfo(3,this.value)">
				
				<p class="header">密码</p>
				<input type="password" name="pwd" value="" onfocus="this.value = this.value;" onblur="valiInfo(4,this.value)">
				
				<p class="header">确认密码</p>
				<input type="password" name="repassword" value="" onfocus="this.value = this.value;" onblur="valiInfo(5,this.value)">
				
				<button type='button' class="register" id="zhucebtn">注册</button>
			</form>
		</div> 
    </div><!-- tab-content -->
</div> <!-- /form -->	  
<p class="copyright">版权所有 © 鱼虾蟹 | 鱼虾蟹娱乐城，您身边的娱乐专家。 京ICP备09162504号-2</p>
<!-- js files -->
<script src='/static/js/jquery.min.js'></script>
<script src="/static/js/index.js"></script>
<script src="/static/js/layer.js"></script>
<script type="text/javascript">
	function valiInfo(type,value) {
		if(type === 1) {
			if(value == '') {
				layer.msg('用户名不能为空！');
				return false;
			} else {
				//用户名正则，4到16位（字母，数字，下划线）
				var uPattern = /^[a-zA-Z0-9_]{4,16}$/;
				//输出 true
				return !uPattern.test(value) ? layer.tips('<span style="color:red;">用户名必须是4-16位，可以包含字母，数字,下划线。</span>', '[name=username]',{tipsMore: true}):'1';
			}	
		} else if(type === 2) {
			if(value == '') {
				layer.msg('手机号不能为空！');
				return false;
			} else {
				//手机号正则
				var mPattern = /^((13[0-9])|(17[0-9])|(14[5|7])|(15([0-3]|[5-9]))|(18[0,5-9]))\d{8}$/;
				//输出 true
				return !mPattern.test(value) ? layer.tips('<span style="color:red;">请输入合法的手机号！</span>', '[name=phone]',{tipsMore: true}):'1';
			}
		} else if(type === 3) {
			if(value == '') {
				layer.msg('邮箱不能为空！');
				return false;
			} else {
				var ePattern = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
				return !ePattern.test(value) ? layer.tips('<span style="color:red;">请输入合法邮箱！</span>', '[name=email]',{tipsMore: true}):'1';
			}
		} else if(type === 4) {
			if(value == '') {
				layer.msg('密码不能为空！');
				return false;
			} else {
				var pwdPattern = /^.{6,30}$/;
				return !pwdPattern.test(value) ? layer.tips('<span style="color:red;">密码的长度为6-30位任意字符<span>', '[name=pwd]',{tipsMore: true}):'1';
			}
		} else if(type === 5) {
			var pwd = $('[name=pwd]').val();
			//return pwd !== value ? layer.tips('两次密码输入不一致！', '[name=repassword]'):'1';
			if(pwd === value && value != '') {
				return '1';
			} else {
				layer.tips('<span style="color:red;">两次密码输入不一致！</span>', '[name=repassword]',{tipsMore: true});
			}
		}
	};
	$(function(){
		$('#denglubtn').on('click',function() {
			// console.log('login');
			var user  = $('[name=user]').val();//获取用户名输入
			var pwd = $('[name=password]').val();//获取密码输入
			var data  = $('#denglu').serialize();//序列化输入框内容
			var u = '<?php echo url('/dologin'); ?>';//定义登陆URL
			if(user == '' || pwd == '') {
				layer.msg('用户名或密码不能为空！');
				return;
			}
		
			$.ajax({
				url:u,
				type:'post',
				data:data,
				success : function(result) {

				}
			});
		});
		$('#zhucebtn').on('click',function() {
			var data = $('#zhuce').serialize();
			var u = '<?php echo url('/toregister'); ?>';
			var inptinfo = $('#zhuce > input');
			var ablesub = 0;
			inptinfo.each(function(i,v){
				valiInfo(i+1,$(this).val()) === '1' ? ablesub++ : false;
			});
			console.log('tongguo:'+ablesub);
			if(ablesub == 5) {
				layer.load();
				$.ajax({ 
				url:u,
				type:'post',
				data:data,
				success : function(result) {
					layer.closeAll('loading');
				}
			});
			} else {
				layer.tips('<span style="color:red;">请确认以上内容填写无误！</span>', '#zhucebtn',{tipsMore: true});
			}	
		});
	});
</script>
<!-- /js files -->
</body>
</html>
