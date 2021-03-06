$(function(){
	setGameMethod();//初始化玩法
	$('.gamecontrol > div ').on('click',function(){
		//给投注图案添加点击事件
		tuanCurrent($(this));
		addTouzhu($(this).attr('number'),getYaZhuBtn());
});
	$('.zaixian').on('mouseover',function(){
		// 给在线人数框添加滚动类
		$(this).addClass('scroll');
});
	$('.zaixian').on('mouseout',function(){
		//去除在线人数框滚动效果
		$(this).removeClass('scroll');
});
	$('.kaijiang').on('mouseover',function(){
		$(this).addClass('scroll');
	});
	$('.kaijiang').on('mouseout',function(){
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
	//计时器逻辑实现
$(document).ready(function(){
			console.log(cDate());
	});
	$('#wfbtn > button').on('click',function(){
		if(!$(this).hasClass('btn-danger')) {
			$(this).removeClass('btn-success');
			$(this).addClass('btn-danger');
			$(this).siblings().removeClass('btn-danger');
			$(this).siblings().addClass('btn-success');
		}
	});
$('.countdown').downCount({
		date: cDate().sj,
		offset:+8,
		qi:cDate().qi
	},function() {
		window.location.reload();
	});
});
