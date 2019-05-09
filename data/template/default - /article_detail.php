<div class="main">
	<div class="mainleft">
		<div class="lefttop">
			<h3><?=$allcategory[$detail['category']]['title']?></h3>
		</div>
		<div class="leftmiddle">
			<ul class="aboutnav">
				<?php $category = x6cmstp_categorypath('article',5,$detail['category']);?>
				<?php foreach ($category as $item): ?>
				<li><a href="<?=site_url('article/k'.$item['id'])?>" <?php if ($item['id'] == $detail['category']): ?>class="contacton"<?php endif; ?> title="<?=$item['title']?>"><?=$item['title']?></a></li>
				<?php endforeach; ?>
			</ul>
		</div>
		<div class="leftbottom"></div>
	</div>
	<div class="mainright">
		<div class="righttop">
			当前位置：<a href="<?=base_url()?>">首页</a> > 
			<?php $category = x6cmstp_categorypath('article',4,$detail['category']);?>
			<?php foreach ($category as $item): ?>
			<a href="<?=site_url('article/k'.$item['id'])?>"><?=$item['title']?></a><?php if($item['id']!=$detail['category']):?> > <?php endif;?>
			<?php endforeach; ?>
		</div>
		<div class="rightmiddle">
			<div class="aboutcontent">
				<h1><?=$detail['title']?></h1>
				<div class="info_d">来源：<?=$detail['copyfrom']?> | 浏览量：<?=$detail['hits']?> | 发布时间:<?=date('Y-m-d H:i:s',$detail['puttime'])?></div>
				<div class="news_ctn"><?=$detail['content']?>
					<?php $tags = x6cmstp_articletag($detail['id']);?>
					<?php if($tags):?>
					<br>
					<p>标签：
					<?php foreach ($tags as $item): ?>
					<a href="<?=site_url('search/tags/'.$item['url'])?>" ><?=$item['title']?></a>、
					<?php endforeach; ?>
					</p>
					<?php endif;?>
				</div>
				<div class="context">
					<ul>
					<?php $article = x6cmstp_prearticle($detail['id']);?>
					<?php if ($article): ?><li>上一篇：<a href="<?=site_url('article/detail/'.$article['id'])?>"><?=$article['title']?></a></li><?php endif; ?>
					<?php $article = x6cmstp_nextarticle($detail['id']);?>
					<?php if ($article): ?><li>下一篇：<a href="<?=site_url('article/detail/'.$article['id'])?>"><?=$article['title']?></a></li><?php endif; ?>
					</ul>
				</div>
				<?php $article = x6cmstp_relevantarticle($detail['id']);?>
				<?php if($article):?>
				<div class="context">
					相关新闻：
					<ul>
					<?php foreach ($article as $item): ?>
					<li><a href="<?=site_url('article/detail/'.$item['id'])?>" ><?=$item['title']?></a></li>
					<?php endforeach; ?>
					</ul>
				</div>
				<?php endif;?>
			</div>
		</div>
		<div class="rightbottom"></div>
	</div>
</div>