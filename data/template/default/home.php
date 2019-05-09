
<DIV class=MainBox>
<DIV class=bannerBox>

				<?php $slide = x6cmstp_slide(73,5);$i=1;?>
				<?php foreach ($slide as $item): ?>
<a href="<?=$item['url']?>">
<DIV style="<?php if($i==1) echo 'DISPLAY: block;'?>background:url(<?=base_url($item['thumb'])?>) no-repeat center top" class="banner_list"></DIV></A>
				<?php $i++; endforeach; ?>
<DIV class=banner_ico_warpper>
<UL class=banner_ico>
  <LI style="DISPLAY: block" class="list_1 ico_now">
  <DIV class=pp><A class=png href="#" 
  target=_blank></A></DIV></LI>
  <LI class=list_2>
  <DIV class=pp><A class=png 
  href="#" 
  target=_blank></A></DIV></LI>
  <LI class=list_3>
  <DIV class=pp><A class=png 
  href="#" 
  target=_blank></A></DIV></LI>
  <LI class=list_4>
  <DIV class=pp><A class=png 
  href="#" 
  target=_blank></A></DIV></LI>
  </UL>
  </DIV></DIV>
<!--banner-->

<div id="indexcontent">
<div class="indexcontent">
    	<div class="indexcom png">
            <div class="title">
                <h2>中心概况</h2>
                <h3></h3>
            </div>
            <p><?php $page=x6cmstp_getpage(2)?>
            <p><a href="<?=site_url('page/2')?>" target="_blank">
                <img src="<?=base_url('data/template/'.$config['site_template'].'/framework/images/comint.jpg')?>" /></a>
                <a href="<?=site_url('page/2')?>" target="_blank"><?=$page['description']?>……</a>
            </p>
        </div>
    	<div class="indexcom com2  png">
            <div class="title">
                <h2>新闻中心</h2>
                <h3><a href="<?=site_url('article')?>">更多</a></h3>
            </div>
			<?php $article = x6cmstp_picarticle();
			?>
            <div class="firstnews">
            <img src="<?=base_url($article[0]['thumb'])?>" />
            <p><a href="<?=site_url('article/detail/'.$article[0]['id'])?>" target="_blank"><?=$article[0]['title']?></a>    
            <span class="puttime"><?=date('Y-m-d',$article[0]['puttime'])?></span></p>
            </div>
			<?php $article = x6cmstp_article(0,3);
			?>
                <ul>
			<?php foreach ($article as $item): ?>
			<li><span class="puttime"><?=date('Y-m-d',$item['puttime'])?></span><a href="<?=site_url('article/detail/'.$item['id'])?>" <?php if (isset($item['color'])&&$item['color']!=''): ?>style="color:<?=$item['color']?>;"<?php endif; ?>><?=$item['title']?></a></li>
			<?php endforeach; ?>
                </ul>
        </div>
    	<div class="indexcom com3  png">
            <div class="title">
                <h2>报告查询</h2>
                <h3></h3>
            </div>
            <dl class="login">
            <p><b>报告真伪查询</b></p>
            <form action="<?=site_url('downloads')?>" method="post">
            <dd>受检单位 <input type="text" name="sjdw" class="log" /></dd>
            <dd>中心编号 <input type="text" name="zxbh" class="log" /></dd>
            <dt><input type="image" src="<?=base_url('data/template/'.$config['site_template'].'/framework/images/login.gif')?>" name="zxbh" /></dt>
            </form>
            </dl>
            <p><b>真伪电话查询</b></p>
          <div class="linkus">
            <dt><strong>电话：</strong><?=$config['site_zwtel']?></dt>
            </div>
        </div>
</div>
</div>
<!--indexcontent-->
<SCRIPT type=text/javascript src="<?=base_url('data/template/'.$config['site_template'].'/framework/js/jquery.marquee.js')?>"></SCRIPT>
<div id="footernav">
<div class="footernav">
	<div class="footnav">
    	<div class="bt"><span style="float:left">设备展示</span><a href="<?=site_url('device')?>">更多</a></div>
        
        
			<div class="marquee level" direction="left" speed="30" step="1" pause="1000">
				<ul>
			<?php $article = x6cmstp_device(0,16);?>
			<?php foreach ($article as $item): ?>
            <li><a href="<?=site_url('device')?>" <?php if (isset($item['color'])&&$item['color']!=''): ?>style="color:<?=$item['color']?>;"<?php endif; ?>  target="_blank"><img src="<?=$item['thumb']?>" /><br /><?=$item['title']?></a></li>
			<?php endforeach; ?>
				</ul>
			</div>
        
    </div>
	<div class="footnav fo">
    	<div class="bt"><span style="float:left">检测项目</span><a href="<?=site_url('serverce')?>">更多</a></div>
			<?php $article = x6cmstp_serverce(61,12);?>
			<?php foreach ($article as $item): ?>
			<h5><a href="<?=site_url('serverce/detail/'.$item['id'])?>" <?php if (isset($item['color'])&&$item['color']!=''): ?>style="color:<?=$item['color']?>;"<?php endif; ?> target="_blank"><font color="#0066CC">&diams; </font><?=$item['title']?></a></h5>
			<?php endforeach; ?>
    </div>
</div>
</div>
<?php

if (!file_exists($counterFile)) {
  exec( "echo 0 > $counterFile");
}
Counter(base_url('ter.txt'))
?>

<!--footernav-->
<div class="indexfoot">