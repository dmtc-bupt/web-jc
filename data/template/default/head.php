<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
<title><?=$config['seo_title']?> - <?=$config['site_shortname']?> </title>
<meta name="keywords" content="<?=$config['seo_keywords']?>" />
<meta name="description" content="<?=$config['seo_description']?>" />
<link href="<?=base_url('data/template/'.$config['site_template'].'/framework/css/base.css')?>" rel="stylesheet" type="text/css" />

<SCRIPT type=text/javascript src="<?=base_url('data/template/'.$config['site_template'].'/framework/js/jquery.1.4.2.js')?>"></SCRIPT>
<SCRIPT type=text/javascript src="<?=base_url('data/template/'.$config['site_template'].'/framework/js/jquery.slide.js')?>"></SCRIPT>
<SCRIPT type=text/javascript src="<?=base_url('data/template/'.$config['site_template'].'/framework/js/js.js')?>"></SCRIPT>
<SCRIPT type=text/javascript src="<?=base_url('data/template/'.$config['site_template'].'/framework/js/jquery.lazyload.js')?>"></SCRIPT>
<SCRIPT type=text/javascript charset=utf-8>
/*首页banner图片切换*/
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
</SCRIPT>
<SCRIPT language=JavaScript>
<!--Hide
function killErrors() {
return true;
}
window.onerror = killErrors;
-->
</SCRIPT>
<SCRIPT type=text/javascript>
$(function (){
		
	/* banner图片左右滚动 */
	$(".w_ctr .JQ-slide").Slide({
		effect:"scroolX",
		speed:"normal",
		timer:5000
	});
	
	
});
</SCRIPT>
<!--[if lt IE 7]>
<script type="text/javascript" src="<?=base_url('data/template/'.$config['site_template'].'/framework/js/DD_belatedPNG_0.0.8a-min.js')?>" charset="utf-8"></script>
<script>
	DD_belatedPNG.fix('.png');
    document.execCommand("BackgroundImageCache",false,true);
</script>
<![endif]-->
<SCRIPT type=text/javascript src="<?=base_url('data/template/'.$config['site_template'].'/framework/js/jcarousellite_1.0.1c4.js')?>"></SCRIPT>

</head>
<body>
<div class="header">
	<div id="header">
    	<div class="logo">
        	<img src="<?=base_url('data/template/'.$config['site_template'].'/framework/images/logo.gif')?>" />
        </div>
    	<div class="search">
			<form name=search method="post" action="<?=site_url('search/keywords')?>">
				<input type="text" class="seachword" value="输入关键字" name="keyword" onclick="if(this.value=='输入关键字') this.value=''" />
    <input name="seachsubmit" type="image" src="<?=base_url('data/template/'.$config['site_template'].'/framework/images/seachbuttom.gif')?>" class="seachsubmit" />
			</form>

        </div>
</div>    	
<DIV id=mainNav class=clearfix>

<UL id=CateListView class="menu clearfix">
  <LI><A href="<?=base_url()?>" class="lia">首 页</A></LI>
  
  
  <LI><A href="<?=site_url('page/2')?>" class="lia">中心简介</A>
  <?php $navigation = x6cmstp_pagecategory();?>
  
      <DIV id=sub_nav>
	<?php foreach ($navigation as $item): ?>
		<A class="lib" href="<?=site_url('page/'.$item['id'])?>"><?=$item['title']?></A>
		<?php endforeach; ?>
      </DIV>
  </LI>
  
  
  <?php $navigation = x6cmstp_indexcategory(0);?>
  
	<?php foreach ($navigation as $item): ?>
  <LI><A href="<?=site_url($item['class'])?>" class="lia"><?=$item['title']?></A>
      <DIV id=sub_nav>
		<?php $nav= x6cmstp_indexcategory($item['id']);?>
		<?php foreach ($nav as $item1): ?>
		<A class="lib" href="<?=site_url($item1['class'].'/k'.$item1['id'])?>"><?=$item1['title']?></A>
		<?php endforeach; ?>
      </DIV>
  </LI>
	<?php endforeach; ?>
</UL></DIV>
  <SCRIPT>
 ECS_TREE_VIEW()
</SCRIPT>
	</div>
<!--header-->


