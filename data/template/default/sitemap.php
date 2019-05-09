<div class="main">
	<div class="mainleft">
		<div class="lefttop">
			<h3>产品服务</h3>
		</div>
		<div class="leftmiddle">
			<ul class="aboutnav">
				<?php $category = x6cmstp_category('product');?>
				<?php foreach ($category as $item): ?>
				<li><a href="<?=site_url('product/k'.$item['id'])?>" title="<?=$item['title']?>"><?=$item['title']?></a></li>
				<?php endforeach; ?>
			</ul>
		</div>
		<div class="leftbottom"></div>
	</div>
	<div class="mainright">
		<div class="righttop">
			当前位置：<a href="<?=base_url()?>">首页</a> > <a href="<?=site_url('sitemap')?>">网站地图</a>
		</div>
		<div class="rightmiddle">
			<div class="view_title" style="text-align:left;"><h2>新闻中心</h2></div>
			<div class="view_con">
				<ul style="text-indent:50px;">
					<?php $category = x6cmstp_category('article');?>
					<?php foreach ($category as $item): ?>
					<li><a href="<?=site_url('article/k'.$item['id'])?>" title="<?=$item['title']?>"><?=$item['title']?></a></li>
					<?php endforeach; ?>
				</ul>
			</div>
			<div class="view_title" style="text-align:left;"><h2>问答中心</h2></div>
			<div class="view_con">
				<ul style="text-indent:50px;">
					<?php $category = x6cmstp_category('ask');?>
					<?php foreach ($category as $item): ?>
					<li><a href="<?=site_url('ask/k'.$item['id'])?>" title="<?=$item['title']?>"><?=$item['title']?></a></li>
					<?php endforeach; ?>
				</ul>
			</div>
			<div class="view_title" style="text-align:left;"><h2>求职招聘</h2></div>
			<div class="view_con">
				<ul style="text-indent:50px;">
					<?php $category = x6cmstp_category('zhaopin');?>
					<?php foreach ($category as $item): ?>
					<li><a href="<?=site_url('zhaopin/k'.$item['id'])?>" title="<?=$item['title']?>"><?=$item['title']?></a></li>
					<?php endforeach; ?>
				</ul>
			</div>
			<div class="view_title" style="text-align:left;"><h2>关于我们</h2></div>
			<div class="view_con">
				<ul style="text-indent:50px;">
					<li><a href="<?=site_url('page/1')?>" title="摄影师">关于我们</a></li>
					<li><a href="<?=site_url('page/2')?>" title="摄影师">联系我们</a></li>
				</ul>
			</div>
		</div>
		<div class="rightbottom"></div>
	</div>
</div>