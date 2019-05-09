<div class="main">
	<div class="mainleft">
		<div class="lefttop">
			<h3><?=$allcategory[$categoryid]['title']?></h3>
		</div>
		<div class="leftmiddle">
			<ul class="aboutnav">
				<?php $category = x6cmstp_categorypath('download',5,$categoryid);?>
				<?php foreach ($category as $item): ?>
				<li><a href="<?=site_url('download/k'.$item['id'])?>" <?php if ($item['id'] == $categoryid): ?>class="contacton"<?php endif; ?> title="<?=$item['title']?>"><?=$item['title']?></a></li>
				<?php endforeach; ?>
			</ul>
		</div>
		<div class="leftbottom"></div>
	</div>
	<div class="mainright">
		<div class="righttop">
			当前位置：<a href="<?=base_url()?>">首页</a> > 
			<?php $category = x6cmstp_categorypath('download',4,$categoryid);?>
			<?php foreach ($category as $item): ?>
			<a href="<?=site_url('download/k'.$item['id'])?>"><?=$item['title']?></a><?php if($item['id']!=$categoryid):?> > <?php endif;?>
			<?php endforeach; ?>
		</div>
		<div class="rightmiddle">
			<ul class="centerlist">
				<?php foreach ($list as $key => $item): ?>
				<li>[<a href="<?=site_url('download/k'.$item['category'])?>"><?=$allcategory[$item['category']]['title']?></a>] <a href="<?=site_url('download/detail/'.$item['id'])?>" target="_blank"><?=$item['title']?></a><span><?=date('Y-m-d',$item['puttime'])?></span></li>
				<?php endforeach; ?>
			</ul>
			<div class="page"><?=isset($pagestr)?$pagestr:''?></div>
		</div>
		<div class="rightbottom"></div>
	</div>
</div>