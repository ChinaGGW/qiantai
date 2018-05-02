<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:64:"F:\www\qiantai\public/../application/index\view\index\index.html";i:1525247599;s:56:"F:\www\qiantai\application\index\view\common\header.html";i:1524898671;s:56:"F:\www\qiantai\application\index\view\common\footer.html";i:1524638968;}*/ ?>
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
	<!-- 倒计时+上期开始 -->
			<input type="hidden" id="wanfa" value='3'>
		<div name='daojishi' class="daojishi">
			<div name='jishiqi' class="jishiqi">
				<div><p>2018-06-12-034期</p></div>
				  <ul class="countdown">
        <li class="seperator"></li>
        <li> <span class="minutes">00</span>
            <p class="minutes_ref">分</p>
        </li>
        <li class="seperator">:</li>
        <li> <span class="seconds">00</span>
            <p class="seconds_ref">秒</p>
        </li>
    </ul>
			</div>
			<div name='zhuangjia' class="zhuangjia">
				<div><img src="/static/images/4.png" alt=""><div><p>我是小老虎</p><p>15万</p></div></div>
				<div>奖池累计：45,898,994</div>
				<div><button class="btn btn-primary btn-success btn-lg" id="shangzhuang">我要上庄</button></div>
			</div>
			<div name='shangqi' class="shangqi">
				<div name='' class="" id="shangqifont">上期开奖号为：</div>
				<div><img src="/static/images/4.png" alt=""></div>
				<div><img src="/static/images/4.png" alt=""></div>
				<div><img src="/static/images/4.png" alt=""></div>
			</div>
		</div>
	<!-- 倒计时+上期结束 -->
	<!-- 投注图案开始 -->
	<div name='touzhukuang' class="touzhukuang"></div>
<!-- 投注图案结束 -->
		<!-- 游戏面板开始 -->
		<div name="content" class="content">
		<!-- 在线人数开始 -->
			<div name='xinxi' class='xinxi'>
				<p>当前在线<b>49</b>人</p>
				<div name='zaixian' class="zaixian  scroll_content">
				<div class="people"><img src="/static/images/timg.jpg" alt=""><div><p>我是小桑树</p><p>&nbsp;&nbsp;&nbsp;·&nbsp;&nbsp;河北</p><p>147.5万</p></div></div>
				<div class="people"><img src="/static/images/timg.jpg" alt=""><div><p>得到小玉树</p><p>&nbsp;&nbsp;&nbsp;·&nbsp;&nbsp;天津</p><p>147</p></div></div>
				<div class="people"><img src="/static/images/timg.jpg" alt=""><div><p>~小槐树</p><p>&nbsp;&nbsp;&nbsp;·&nbsp;&nbsp;北京</p><p>147万</p></div></div>
				<div class="people"><img src="/static/images/timg.jpg" alt=""><div><p>em小柳树</p><p>&nbsp;&nbsp;&nbsp;·&nbsp;&nbsp;河南</p><p>7.5万</p></div></div>
				<div class="people"><img src="/static/images/timg.jpg" alt=""><div><p>小杨树</p><p>&nbsp;&nbsp;&nbsp;·&nbsp;&nbsp;上海</p><p>47.5万</p></div></div>
				<div class="people"><img src="/static/images/timg.jpg" alt=""><div><p>小松树</p><p>&nbsp;&nbsp;&nbsp;·&nbsp;&nbsp;广州</p><p>14.5万</p></div></div>
				<div class="people"><img src="/static/images/timg.jpg" alt=""><div><p>是小怪物</p><p>&nbsp;&nbsp;&nbsp;·&nbsp;&nbsp;云南</p><p>17.2万</p></div></div>
				<div class="people"><img src="/static/images/timg.jpg" alt=""><div><p>小桑树是我</p><p>&nbsp;&nbsp;&nbsp;·&nbsp;&nbsp;新疆</p><p>11.9万</p></div></div>
				<div class="people"><img src="/static/images/timg.jpg" alt=""><div><p>小桑树是我</p><p>&nbsp;&nbsp;&nbsp;·&nbsp;&nbsp;新疆</p><p>11.9万</p></div></div>
				<div class="people"><img src="/static/images/timg.jpg" alt=""><div><p>小桑树是我</p><p>&nbsp;&nbsp;&nbsp;·&nbsp;&nbsp;新疆</p><p>11.9万</p></div></div>
				<div class="people"><img src="/static/images/timg.jpg" alt=""><div><p>小桑树是我</p><p>&nbsp;&nbsp;&nbsp;·&nbsp;&nbsp;新疆</p><p>11.9万</p></div></div>
				<div class="people"><img src="/static/images/timg.jpg" alt=""><div><p>小桑树是我</p><p>&nbsp;&nbsp;&nbsp;·&nbsp;&nbsp;新疆</p><p>11.9万</p></div></div>
				<div class="people"><img src="/static/images/timg.jpg" alt=""><div><p>我是小桑树</p><p>&nbsp;&nbsp;&nbsp;·&nbsp;&nbsp;河北</p><p>147.5万</p></div></div>
				<div class="people"><img src="/static/images/timg.jpg" alt=""><div><p>得到小玉树</p><p>&nbsp;&nbsp;&nbsp;·&nbsp;&nbsp;天津</p><p>147</p></div></div>
				<div class="people"><img src="/static/images/timg.jpg" alt=""><div><p>~小槐树</p><p>&nbsp;&nbsp;&nbsp;·&nbsp;&nbsp;北京</p><p>147万</p></div></div>
				<div class="people"><img src="/static/images/timg.jpg" alt=""><div><p>em小柳树</p><p>&nbsp;&nbsp;&nbsp;·&nbsp;&nbsp;河南</p><p>7.5万</p></div></div>
				<div class="people"><img src="/static/images/timg.jpg" alt=""><div><p>小杨树</p><p>&nbsp;&nbsp;&nbsp;·&nbsp;&nbsp;上海</p><p>47.5万</p></div></div>
				<div class="people"><img src="/static/images/timg.jpg" alt=""><div><p>小松树</p><p>&nbsp;&nbsp;&nbsp;·&nbsp;&nbsp;广州</p><p>14.5万</p></div></div>
				<div class="people"><img src="/static/images/timg.jpg" alt=""><div><p>是小怪物</p><p>&nbsp;&nbsp;&nbsp;·&nbsp;&nbsp;云南</p><p>17.2万</p></div></div>
				<div class="people"><img src="/static/images/timg.jpg" alt=""><div><p>小桑树是我</p><p>&nbsp;&nbsp;&nbsp;·&nbsp;&nbsp;新疆</p><p>11.9万</p></div></div>
				<div class="people"><img src="/static/images/timg.jpg" alt=""><div><p>小桑树是我</p><p>&nbsp;&nbsp;&nbsp;·&nbsp;&nbsp;新疆</p><p>11.9万</p></div></div>
				<div class="people"><img src="/static/images/timg.jpg" alt=""><div><p>小桑树是我</p><p>&nbsp;&nbsp;&nbsp;·&nbsp;&nbsp;新疆</p><p>11.9万</p></div></div>
				<div class="people"><img src="/static/images/timg.jpg" alt=""><div><p>小桑树是我</p><p>&nbsp;&nbsp;&nbsp;·&nbsp;&nbsp;新疆</p><p>11.9万</p></div></div>
				<div class="people"><img src="/static/images/timg.jpg" alt=""><div><p>小桑树是我</p><p>&nbsp;&nbsp;&nbsp;·&nbsp;&nbsp;新疆</p><p>11.9万</p></div></div>
				</div>
			</div>
		<!-- 在线人数结束 -->
		<!-- -->
			<div name='yazhuma' class='yazhuma'>
				<div class="choumaimg choumacurrent" money='10'><img src="/static/images/10.png" alt=""></div>
				<div class="choumaimg" money='50'><img src="/static/images/50.png" alt=""></div>
				<div class="choumaimg" money='100'><img src="/static/images/100.png" alt=""></div>
				<div class="choumaimg" money='500'><img src="/static/images/500.png" alt=""></div>
				<div class="choumaimg" money='1000'><img src="/static/images/1000.png" alt=""></div>
				<div class="choumaimg" money='10000'><img src="/static/images/10000.png" alt=""></div>
				<div><button class="btn btn-warning " id="xiazhubtn">投注</button></div>
			</div>
		<!--  -->
		<!-- 游戏面板开始 -->
			<div name='gamecontrol' class='gamecontrol'>
				<div number='1' class=""><span>14.02万</span><div class="number">1</div><img src="/static/images/one.png" alt="点击下注"></div>
				<div number='2'><span>14.1万</span><div class="number">2</div><img src="/static/images/two.png" alt="点击下注"></div>
				<div number='3'><span>14.02万</span><div class="number">3</div><img src="/static/images/three.png" alt="点击下注"></div>
				<div number='4'><span>14.02万</span><div class="number">4</div><img src="/static/images/four.png" alt="点击下注"></div>
				<div number='5' class=""><span>14.02万</span><div class="number">5</div><img src="/static/images/five.png" alt="点击下注"></div>
				<div number='6'><span>14.02万</span><div class="number">6</div><img src="/static/images/six.png" alt="点击下注"></div>
			</div>
		<!-- 游戏面板结束 -->
		<!-- 历史结算栏开始 -->
			<div name='lishikj' class="lishikj">
				<div name='biaoti' class="biaoti"><img src="/static/images/lishijiesuan.png" alt=""></div>
				<div name='kaijiang' class="kaijiang scroll_content">
					<div name='jiang1' class="jiang">
						<div name='qihao' class="qihao" id="qihao"><p>&nbsp;&nbsp;&nbsp;&nbsp;20180622期开奖</p></div>
						<div class="jiang-logo"><img src="/static/images/4.png" alt=""></div>
						<div class="jiang-logo"><img src="/static/images/1.png" alt=""></div>
						<div class="jiang-logo"><img src="/static/images/3.png" alt=""></div>
					</div>
					<div name='jiang2' class="jiang">
					<div name='qihao' class="qihao" id="qihao"><p>&nbsp;&nbsp;&nbsp;&nbsp;20180622期开奖</p></div>
						<div class="jiang-logo"><img src="/static/images/3.png" alt=""></div>
						<div class="jiang-logo"><img src="/static/images/4.png" alt=""></div>
						<div class="jiang-logo"><img src="/static/images/5.png" alt=""></div>
					</div>
					<div name='jiang3' class="jiang">
					<div name='qihao' class="qihao" id="qihao"><p>&nbsp;&nbsp;&nbsp;&nbsp;20180622期开奖</p></div>
						<div class="jiang-logo"><img src="/static/images/6.png" alt=""></div>
						<div class="jiang-logo"><img src="/static/images/4.png" alt=""></div>
						<div class="jiang-logo"><img src="/static/images/4.png" alt=""></div>
					</div>
					<div name='jiang3' class="jiang">
					<div name='qihao' class="qihao" id="qihao"><p>&nbsp;&nbsp;&nbsp;&nbsp;20180622期开奖</p></div>
							<div class="jiang-logo"><img src="/static/images/6.png" alt=""></div>
						<div class="jiang-logo"><img src="/static/images/4.png" alt=""></div>
						<div class="jiang-logo"><img src="/static/images/4.png" alt=""></div>
					</div>
					<div name='jiang3' class="jiang">
					<div name='qihao' class="qihao" id="qihao"><p>&nbsp;&nbsp;&nbsp;&nbsp;20180622期开奖</p></div>
						<div class="jiang-logo"><img src="/static/images/6.png" alt=""></div>
						<div class="jiang-logo"><img src="/static/images/4.png" alt=""></div>
						<div class="jiang-logo"><img src="/static/images/4.png" alt=""></div>
					</div>
						<div name='jiang3' class="jiang">
					<div name='qihao' class="qihao" id="qihao"><p>&nbsp;&nbsp;&nbsp;&nbsp;20180622期开奖</p></div>
						<div class="jiang-logo"><img src="/static/images/6.png" alt=""></div>
						<div class="jiang-logo"><img src="/static/images/4.png" alt=""></div>
						<div class="jiang-logo"><img src="/static/images/4.png" alt=""></div>
					</div>
						<div name='jiang3' class="jiang">
					<div name='qihao' class="qihao" id="qihao"><p>&nbsp;&nbsp;&nbsp;&nbsp;20180622期开奖</p></div>
							<div class="jiang-logo"><img src="/static/images/6.png" alt=""></div>
						<div class="jiang-logo"><img src="/static/images/4.png" alt=""></div>
						<div class="jiang-logo"><img src="/static/images/4.png" alt=""></div>
					</div>
						<div name='jiang3' class="jiang">
					<div name='qihao' class="qihao" id="qihao"><p>&nbsp;&nbsp;&nbsp;&nbsp;20180622期开奖</p></div>
							<div class="jiang-logo"><img src="/static/images/6.png" alt=""></div>
						<div class="jiang-logo"><img src="/static/images/4.png" alt=""></div>
						<div class="jiang-logo"><img src="/static/images/4.png" alt=""></div>
					</div>
						<div name='jiang3' class="jiang">
					<div name='qihao' class="qihao" id="qihao"><p>&nbsp;&nbsp;&nbsp;&nbsp;20180622期开奖</p></div>
							<div class="jiang-logo"><img src="/static/images/6.png" alt=""></div>
						<div class="jiang-logo"><img src="/static/images/4.png" alt=""></div>
						<div class="jiang-logo"><img src="/static/images/4.png" alt=""></div>
					</div>
						<div name='jiang3' class="jiang">
					<div name='qihao' class="qihao" id="qihao"><p>&nbsp;&nbsp;&nbsp;&nbsp;20180622期开奖</p></div>
							<div class="jiang-logo"><img src="/static/images/6.png" alt=""></div>
						<div class="jiang-logo"><img src="/static/images/4.png" alt=""></div>
						<div class="jiang-logo"><img src="/static/images/4.png" alt=""></div>
					</div>
						<div name='jiang3' class="jiang">
					<div name='qihao' class="qihao" id="qihao"><p>&nbsp;&nbsp;&nbsp;&nbsp;20180622期开奖</p></div>
						<div class="jiang-logo"><img src="/static/images/6.png" alt=""></div>
						<div class="jiang-logo"><img src="/static/images/4.png" alt=""></div>
						<div class="jiang-logo"><img src="/static/images/4.png" alt=""></div>
					</div>
						<div name='jiang3' class="jiang">
					<div name='qihao' class="qihao" id="qihao"><p>&nbsp;&nbsp;&nbsp;&nbsp;20180622期开奖</p></div>
						<div class="jiang-logo"><img src="/static/images/6.png" alt=""></div>
						<div class="jiang-logo"><img src="/static/images/4.png" alt=""></div>
						<div class="jiang-logo"><img src="/static/images/4.png" alt=""></div>
					</div>
					<div name='jiang3' class="jiang">
					<div name='qihao' class="qihao" id="qihao"><p>&nbsp;&nbsp;&nbsp;&nbsp;20180622期开奖</p></div>
						<div class="jiang-logo"><img src="/static/images/6.png" alt=""></div>
						<div class="jiang-logo"><img src="/static/images/4.png" alt=""></div>
						<div class="jiang-logo"><img src="/static/images/4.png" alt=""></div>
					</div>
					<div name='jiang3' class="jiang">
					<div name='qihao' class="qihao" id="qihao"><p>&nbsp;&nbsp;&nbsp;&nbsp;20180622期开奖</p></div>
						<div class="jiang-logo"><img src="/static/images/6.png" alt=""></div>
						<div class="jiang-logo"><img src="/static/images/4.png" alt=""></div>
						<div class="jiang-logo"><img src="/static/images/4.png" alt=""></div>
					</div>
				</div>
			</div>
		<!-- 历史结算栏结束 -->
		</div>
		<!-- 游戏面板结束 -->
	
	</div>
<!-- 页面容器结束 -->
<div class="xiazhuwanfa" id="xiazhuwanfa"></div>
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