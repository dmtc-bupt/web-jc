<div class="main">
	<div class="mainleft">
		<div class="lefttop">
			<h3><?=$allcategory[$detail['category']]['title']?></h3>
		</div>
		<div class="leftmiddle">
			<ul class="aboutnav">
				<?php $category = x6cmstp_categorypath('download',5,$detail['category']);?>
				<?php foreach ($category as $item): ?>
				<li><a href="<?=site_url('download/k'.$item['id'])?>" <?php if ($item['id'] == $detail['category']): ?>class="contacton"<?php endif; ?> title="<?=$item['title']?>"><?=$item['title']?></a></li>
				<?php endforeach; ?>
			</ul>
		</div>
		<div class="leftbottom"></div>
	</div>
	<div class="mainright">
		<div class="righttop">
			当前位置：<a href="<?=base_url()?>">首页</a> > 
			<?php $category = x6cmstp_categorypath('download',4,$detail['category']);?>
			<?php foreach ($category as $item): ?>
			<a href="<?=site_url('download/k'.$item['id'])?>"><?=$item['title']?></a><?php if($item['id']!=$detail['category']):?> > <?php endif;?>
			<?php endforeach; ?>
		</div>
		<div class="rightmiddle">
			<div class="aboutcontent">
				<h1 style="text-align:left;">问题：<?=$detail['title']?></h1>
				<div class="news_ctn"><?=$detail['content']?></div>
				<div class="context">
					<ul>
					<?php $download = x6cmstp_predownload($detail['id']);?>
					<?php if ($download): ?><li>上一篇：<a href="<?=site_url('download/detail/'.$download['id'])?>"><?=$download['title']?></a></li><?php endif; ?>
					<?php $download = x6cmstp_nextdownload($detail['id']);?>
					<?php if ($download): ?><li>下一篇：<a href="<?=site_url('download/detail/'.$download['id'])?>"><?=$download['title']?></a></li><?php endif; ?>
					</ul>
				</div>
			</div>
		</div>
		<div class="rightbottom"></div>
	</div>
</div>