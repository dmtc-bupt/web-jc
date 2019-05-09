<div class="main">
	<div class="mainleft">
		<div class="lefttop">
			<h3>产品服务</h3>
		</div>
		<div class="leftmiddle">
			<ul class="aboutnav">
				<?php $product = x6cmstp_product(56);?>
				<?php foreach ($product as $item): ?>
				<li><a href="<?=site_url('product/detail/'.$item['id'])?>" title="<?=$item['title']?>" target="_blank"><?=$item['title']?></a></li>
				<?php endforeach; ?>
			</ul>
		</div>
		<div class="leftbottom"></div>
	</div>
	<div class="mainright">
		<div class="righttop">
			当前位置：<a href="<?=base_url()?>">首页</a> > <a href="<?=site_url('article')?>">搜索</a>
		</div>
		<div class="rightmiddle">
			<ul class="centerlist">
				<?php foreach ($list as $key => $item): ?>
				<li>[<a href="<?=site_url('article/k'.$item['category'])?>"><?=$allcategory[$item['category']]['title']?></a>] <a href="<?=site_url('article/detail/'.$item['id'])?>" target="_blank"><?=$item['title']?></a><span><?=date('Y-m-d',$item['puttime'])?></span></li>
				<?php endforeach; ?>
			</ul>
			<div class="page"><?=isset($pagestr)?$pagestr:''?></div>
		</div>
		<div class="rightbottom"></div>
	</div>
</div>