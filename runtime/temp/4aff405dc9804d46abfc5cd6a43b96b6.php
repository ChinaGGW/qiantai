<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:67:"F:\www\qiantai\public/../application/index\view\index\userinfo.html";i:1524793949;s:56:"F:\www\qiantai\application\index\view\common\header.html";i:1524642287;s:56:"F:\www\qiantai\application\index\view\common\footer.html";i:1524638968;}*/ ?>
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
</head>
<body>
<!-- 页面容器 -->
	<div class="box">
	<!-- 顶部导航栏开始 -->
		<div name="navigator" class="navigator">
		<div name='left-nav' class="left-nav">
		<div name='logo' class="logo"><a href="<?php echo url('/userinfo'); ?>"><img src="/static/images/timg.jpg" alt=""></a></div>
		<div name='username' class="username"><a href="<?php echo url('/userinfo'); ?>">阿狸是小松鼠</a></div>
		<div name='money' class="money"><a href="<?php echo url('/userinfo'); ?>">余额：123456.00</a></div>
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
		<div name='gerenzhongxin' class="gerenzhongxin">
			<div name='leftiframe' class="leftiframe">
				<div>
					<div><img src="/static/images/timg.jpg" alt=""></div>
					<div>我不是打老虎</div>
				</div>
				<div>
					<div><span>账号：</span><span>ceshi123</span></div>
					<div><span>QQ：</span><span>10000</span></div>
					<div><span>余额：</span><span>123456.9</span></div>
					<div><span>未结余额：</span><span>1234.99</span></div>
					<div><span>最近登录：</span><span>2018-12-04</span></div>
					<div><span>我的上级代理：</span><span>小松鼠是阿狸</span></div>
					<div><button>查看我的下级</button><button>充值</button><button>提现</button><button>退出</button></div>
				</div>
			</div>
			<div name='rightiframe' class="rightiframe">此区域为左侧信息栏通用功能实现框，包括充值记录查询，提现记录、盈亏统计、登陆历史、上下级代理情况、下注记录的展示，由于暂无后台不予展示。			</div>
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