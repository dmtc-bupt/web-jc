$(function(){
	var current = 0;
	var box = $('.banner_ico');
	var li = $('.banner_ico li');
	//var p = $('.banner_p li');
	li.each(function(i){
		$(this).data('index', i);
	});
	box.bind('mousemove',function(){		//小ico  绑定mouseover事件
		//alert (0);
		clearInterval(autoID);		//移动到小ico列表时 清除自动图片切换
	});
	li.bind('mouseover', function(){		//小ico  绑定click事件	用来切换图片
		//alert (1);
		var i = $(this).data('index');
		current = i;		//定义小ico列表序号
		$(this).addClass('ico_now');		//对应的显示下面的小文字
		$(this).siblings().removeClass('ico_now');		//相邻的小文字消失
		$('.banner_list').fadeOut(1000).eq(i).fadeIn(1000);		//大的banner图片切换
		//p.hide().eq(i).show();		//下面相应的P链接切换
	});
	box.bind('mouseout',function(){		//小ico  绑定mouseout事件
		autoID = setInterval(trig,4000);		//恢复图片自动切换
	});
	function trig(){	//定义图片自动切换方法
		current = current+1 < 8 ? current+1 : 0;		//序号累加、当序号大于8时使它为0
		//current += ((current + 1) < 8) ? 1 : 0;		
		//alert (current);
		li.eq(current).trigger('mouseover');	//定义模拟点击事件
	};
	var autoID = setInterval(trig,4000);		//每隔4秒调用自动点击方法
	//timedMsg();
});

/*首页banner图片切换*/
/*function timedMsg()
{
var t=setTimeout("DD_belatedPNG.fix('.png_later')",5000)
}*/