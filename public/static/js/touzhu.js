$(function(){
	setGameMethod();//初始化玩法
	$('.gamecontrol > div ').on('click',function(){
		//给投注图案添加点击事件
		tuanCurrent($(this));
		addTouzhu($(this).attr('number'));
		
});
	$('.zaixian').on('mouseover',function(){
		// 给在线人数框添加滚动类
		$(this).addClass('scroll');
});
	$('.zaixian').on('mouseout',function(){
		//去除在线人数框滚动效果
		$(this).removeClass('scroll');
});
	$('.choumaimg').on('click',function(){
		// 给筹码框添加选中状态
		if(choumaCurrent($(this))){
			$(this).removeClass('choumacurrent');
		} else {
			$(this).addClass('choumacurrent');
			$(this).siblings().removeClass('choumacurrent');
		}
	});
	$('#xiazhubtn').on('click',function(){
		if(!getTouzhu()){
			layer.msg('请选择图案',{time:1300});
			return;
		}
		// 投注按钮点击事件(如果有选中筹码，则else 若无则提示输入下注金额)
		if(!getChouma()){
			layer.prompt({'title':'请输入投注金额'},function(money,index){
				//如果没有选中筹码，则提示输入金额
				layer.close(index);
				var cont = '您的投注金额为：<span style="color:red;font-weight:bold;">'+money+'</span>元。'+'下注号码为：<span style="color:red;font-weight:bold;">'+getTouzhu()+'</span>';
				layer.confirm(cont,{btn:['下注','取消']},function(touzhunum,index){
					//判断用户点击按钮，此处应该写ajax请求发送下注数据
					layer.msg('下注成功');
						var money = getChouma();
						var userid = 1;
						var qihao = '2018-06-12';
					$.ajax({
            			url:"#",
            			data:{'money':money,'userid':userid,'haoma':getTouzhu(),'qihao':qihao},
            			type:"Post",
            			dataType:"json",
            			success:function(data){
               			layer.msg(data.msg);
            			},
            			error:function(data){
                		$.messager.alert('错误',data.msg);
            		}
        			});
				},function(){
					layer.msg('已取消下注');
				});
		});
		} else {
			var cont = '您的投注金额为：<span style="color:red;font-weight:bold;">'+getChouma()+'</span>元。'+'下注号码为：<span style="color:red;font-weight:bold;">'+getTouzhu()+'</span>';
			layer.confirm(cont,{btn:['下注','取消']},function(){
				//此处写下注请求AJAX
				layer.msg('下注成功');
				var money = getChouma();
				var userid = 1;
				var qihao = '2018-06-12';
				$.ajax({
            			url:"/xiazhu",
            			data:{'money':money,'userid':userid,'haoma':getTouzhu(),'qihao':qihao},
            			type:"Post",
            			dataType:"json",
            			success:function(data){
               			layer.msg(data.msg);
            			},
            			error:function(data){
                		$.messager.alert('错误',data.msg);
            		}
        			});
			},function(){
				layer.msg('已取消下注');
			});
			
		}
		
		// console.log(getChouma());
	});
	//上庄按钮被点击
	$('#shangzhuang').on('click',function(){
		//此处应当先判断是否符合上庄条件
		layer.load();
		var u = '/qiangzhuang';
		$.ajax({  
            			url:u,
            			data:{},
            			type:"Post",
            			dataType:"json",
            			success:function(data){
            				setTimeout(function(){
               				layer.closeAll('loading');
							layer.msg('功能未开发！');
            				},600);
               			
            			},
            			error:function(data){
            				setTimeout(function(){
            					layer.closeAll('loading');
                				layer.msg('功能未开发！');
            				},600);	
            		}
        		});
	});
	// $('#baozi').on('click',function(){
	// 	var wanfa = $('#wanfa').val();
	// 	layer.open({
 //  		type: 1,
 //  		title: '投注豹子',
 //  		skin: 'layui-layer-rim', //加上边框
 //  		area: ['500px', '500px'], //宽高
 //  		content: '<div name="baocontrol" class="baocontrol"><div number="1"><div class="number">1</div><img src="/static/images/one.png" alt="点击下注"></div><div number="2"><div class="number">2</div><img src="/static/images/two.png" alt="点击下注"></div><div number="3"><div class="number">3</div><img src="/static/images/three.png" alt="点击下注"></div><div number="4"><div class="number">4</div><img src="/static/images/four.png" alt="点击下注"></div><div number="5"><div class="number">5</div><img src="/static/images/five.png" alt="点击下注"></div><div number="6"><div class="number">6</div><img src="/static/images/six.png" alt="点击下注"></div></div><input id="baozimoney" placeholder="请输入下注金额"/><button class="btn btn-danger" id="baozizhu">确定下注</button>'
	// 	});
	// 	$('.baocontrol > div').on('click',function(){
	// 	//给投注图案添加点击事件
	// 	$(this).addClass('baozicurrent');
	// 	$(this).siblings().removeClass('baozicurrent');
	// });
		// $('#baozizhu').on('click',function(){//豹子投注按钮点击事件
		// 	var num = $('.baozicurrent > .number').text();//定义当前选中的豹子号
		// 	if($('#baozimoney').val()){//判断是否输入正确的金额
		// 		if(num){//判断是否选中了对应图案
		// 			var money = $('#baozimoney').val();
		// 			var haoma = '';
		// 			var userid = 1;
		// 			var qihao = '2018-06-12';
		// 			if(wanfa == 2){//判断玩法 复制给号码
		// 				haoma = num + ',' + num;
		// 			}else if(wanfa == 3) {
		// 				haoma = num + ',' + num + ','+num;
		// 			}
		// 			$.ajax({
  //           			url:"/baozixiazhu",
  //           			data:{'money':money,'userid':userid,'haoma':haoma,'qihao':qihao,'wanfa':wanfa},
  //           			type:"Post",
  //           			dataType:"json",
  //           			success:function(data){
  //              			layer.msg(data.msg);
  //           			},
  //           			error:function(data){
  //               		$.messager.alert('错误',data.msg);
  //           		}
  //       			});

		// 		} else {
		// 		layer.msg('请先选择下注图案！',{time:900});
		// 		}
		// 		} else {
		// 		layer.msg('下注金额不能为空！',{time:900});
		// 	}
	// 	// });
	// });
	//计时器逻辑实现
	getQiHao();
	function getQiHao() {//获取当前期号和开奖时间
		$.ajax({
		          	url:"/getqihao",
            		type:"get",
            		dataType:"json",
            		success:function(data){
               		layer.msg(data.msg);
            		},
            		error:function(data){
                
           		}
        			});
	}
	$('.countdown').downCount({
		date: '4/28/2019 11:02:00',
		offset:+8
	},function() {
		alert('几时结束');
	});
});
