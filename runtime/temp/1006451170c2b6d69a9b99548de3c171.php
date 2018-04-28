<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:67:"F:\www\qiantai\public/../application/index\view\index\gameinfo.html";i:1524641723;s:56:"F:\www\qiantai\application\index\view\common\header.html";i:1524898671;s:56:"F:\www\qiantai\application\index\view\common\footer.html";i:1524638968;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>两骰玩法</title>
	<link rel="stylesheet" href="/static/css/index.css">
	<link rel="stylesheet" href="/static/css/asset.css">
	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src='/static/js/jquery.js'></script>
	<script src="/static/js/function.js"></script>
	<script src='/static/js/touzhu.js'></script>
	<script src="/static/js/layer.js"></script>
	<script src="/static/js/jquery.downCount.js"></script>
</head>
<body>
<!-- 页面容器 -->
	<div class="box">
	<!-- 顶部导航栏开始 -->
		<div name="navigator" class="navigator">
		<div name='left-nav' class="left-nav">
		<div name='logo' class="logo"><a href="<?php echo url('/userinfo'); ?>"><img src="/static/images/timg.jpg" alt=""></a></div>
		<div name='username' class="username"><a href="<?php echo url('/userinfo'); ?>"><?php echo $userinfo->nickName; ?></a></div>
		<div name='money' class="money"><a href="<?php echo url('/userinfo'); ?>">余额：<?php echo $userinfo->coin; ?></a></div>
		<div><a href="<?php echo url('/logout'); ?>">退出</a></div>
		</div>
		<div>
		<button class="btn btn-success btn-primary btn-lg" id="gameTwo" onclick="javascript:window.location='<?php echo url('/two'); ?>'">两骰</button>&nbsp;/&nbsp;<button class="btn btn-primary btn-success btn-lg" id="gameThree" onclick="javascript:window.location='<?php echo url('/'); ?>'">三骰</button>
		</div>
		<div name='right-nav' class="right-nav">
		<div><a href="<?php echo url('/'); ?>"><img src="" alt="">首页</a></div>
		<div><a href="<?php echo url('/gameinfo'); ?>"><img src="" alt="">玩法简介</a></div>
		<div><a href="<?php echo url('/userinfo'); ?>"><img src="" alt="">个人中心</a></div>
		<div><a href="" onclick="javascript:alert('功能添加中！');"><img src="" alt="">在线客服</a></div>
		</div>
		</div>
	<!-- 顶部导航栏结束 -->
	<!-- 游戏面板开始 -->
		<div name="content" class="content">
		<div name='gameinfo' class="gameinfo">
			<div>鱼虾蟹玩法简介</div>
			<div><div>双骰玩法</div><div>三骰玩法</div></div>
			<div>广告位！</div>
		</div>
		<!-- 个人中心结束 -->
	</div>
	</div>
<!-- 页面容器结束 -->
<!-- 公共页脚开始 -->
		<div name='footer' class="footer">
			<p>鱼虾蟹娱乐城</p>
			<p> &nbsp;&nbsp;&nbsp;&nbsp;</p>
			<p>抵制不良游戏 拒绝盗版游戏</p>
			<p>注意自我保护 谨防受骗上当</p>
			<p>适度游戏益脑 沉迷游戏伤身</p>
			<p>合理安排时间 享受健康生活</p>
			<p> &nbsp;&nbsp;&nbsp;&nbsp;</p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;</p>
			<p>版权所有 © 鱼虾蟹 | 鱼虾蟹娱乐城，您身边的娱乐专家。 京ICP备09162504号-2</p>
		</div>
		<!-- 公共页脚结束 -->
</body>
</html>