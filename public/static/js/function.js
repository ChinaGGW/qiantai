// 写入一个投注图案
function addTouzhu(i) {
	var a = '<div number="'+i+'"><img src="/static/images/'+i+'.png" alt=""></div>';
	if($('#wanfa').val() == 2) {
			if($('.touzhukuang > div').length < 2) {
				if($('.touzhukuang > div').length == 0) {
				$('.touzhukuang').append('<button class="btn btn-danger" id="qingkong" onClick="dropTouzhu()">清空</button>');
			}
			$('.touzhukuang').append(a);
	} else {
		layer.msg('最多下注两个图案');
	}
	} else if($('#wanfa').val() == 3) {
		if($('.touzhukuang > div').length < 3) {
			if($('.touzhukuang > div').length == 0) {
				$('.touzhukuang').append('<button class="btn btn-danger" id="qingkong" onClick="dropTouzhu()">清空</button>');
			}
		$('.touzhukuang').append(a);
	} else {
		layer.msg('最多下注三个图案');
	}
	}
}
//给图案添加点击效果
function tuanCurrent($this) {
	$this.addClass('gameimgcurrent');
	setTimeout(function(){
		$this.removeClass('gameimgcurrent');
	},100);
}
//删除一个已选投注图案
function removeTouzhu(i) {
	$('.touzhukuang > [number='+i+']').remove();
}
//删除所有投注图案
function dropTouzhu() {
	$('.touzhukuang').empty();
}
//获取当前下注信息
function getTouzhu() {
	var t = $('.touzhukuang > div');
	var zhunum = '';
	t.each(function(i,v){
		zhunum += $(this).attr('number')+',';
	});
	return zhunum.substring(0,zhunum.length-1);
}
// 查看当前筹码是否被选中
function choumaCurrent($this) {
	return $this.hasClass('choumacurrent');
}
// 查看当前图案是否被选中
function gameimgCurrent($this) {
	return $this.hasClass('gameimgcurrent');
}
// 获取当前选中的投注图案数量
function gameimgnum() {
	var num = 0;
	var divs = $('.gamecontrol > div');
	divs.each(function(index,val){
		if($(val).hasClass('gameimgcurrent')){
			num++;
		}
	});
	return num;
}
// 获取当前玩法
function getGameMethod() {
	return $('#wanfa').val();
}
// 设置当前玩法CSS类
function setGameMethod() {
	if($('#wanfa').val() == 2){
		$('#gameTwo').addClass('gamecurrent');
	} else if($('#wanfa').val() == 3) {
		$('#gameThree').addClass('gamecurrent');
	}
}
// 获取当前选中筹码值
function getChouma() {
	var s = $('.choumaimg');
	var money = 0;
	s.each(function(i,v){
		if($(v).hasClass('choumacurrent')) {
			money = $(this).attr('money');
		
		}
	});
		return money;
}
// 获取选中的投注图案信息
function getTouZhu() {
	var a = $('.gamecontrol > div');
	var zhu = '';
	a.each(function(i,v){

	});
}