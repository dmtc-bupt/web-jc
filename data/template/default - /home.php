<script type="text/javascript" src="<?=base_url('data/template/'.$config['site_template'].'/js/jquery.KinSlideshow-1.2.1.min.js')?>"></script>
<script type="text/javascript">
$(function(){
	$("#KinSlideshow").KinSlideshow();
})
</script>
<div class="main">
	<div class="banner"> 
	<!--slider start-->
	<div class="bslide">
		<div class="boslide">
			<div class="slide">
				<div id="KinSlideshow" style="visibility:hidden;">
				<?php $slide = x6cmstp_slide(42,5);?>
				<?php foreach ($slide as $item): ?>
				<a href="<?=$item['url']?>" target="_blank"><img src="<?=base_url($item['thumb'])?>" alt="<?=$item['title']?>" width="640" height="250" /></a>
				<?php endforeach; ?>
				</div>
			</div>
		</div>	
	</div>
	<!--slider end-->
	</div>
	<div class="news">
		<span class="head"><span>新闻动态</span><a href="<?=site_url('article')?>"  class="fr">更多</a></span>
		 <ul>
			<?php $article = x6cmstp_article(0,7);?>
			<?php foreach ($article as $item): ?>
			<li><a href="<?=site_url('article/detail/'.$item['id'])?>" <?php if (isset($item['color'])&&$item['color']!=''): ?>style="color:<?=$item['color']?>;"<?php endif; ?>><?=$item['title']?></a></li>
			<?php endforeach; ?>
		 </ul>
	</div>
	<div class="main_left">
		<div class="ask">
			<div class="ask_title"><span><a href="<?=site_url('article')?>">更多</a></span><h3>常见问答</h3></div>
			<div class="ask_content">
				<div class="ask_first">
					<?=x6cmstp_fragment('index_cpjs')?>
				</div>
				<div class="ask_list">
					<ul>	
					</ul>	
				</div>
			</div>
		</div>
		<div class="anli">
			<div class="anli_title">
				<span><a href="<?=site_url('product/k56')?>">更多</a></span>
				<h3>优惠套餐</h3>
			</div>
			<div class=anli_content>
				<ul>
				<?php $product = x6cmstp_serverce(56,4);?>
				<?php foreach ($product as $item): ?>
				<li><a href="<?=site_url('product/detail/'.$item['id'])?>">
						<img src="<?=get_image_url($item['thumb'])?>" width=90 height=70></A>
						<span><?=$item['title']?></span>
					</li>
				<?php endforeach; ?>
				</ul>
			</div>
		</div>
	</div>
	<div class="main_right">
		<div class="ask_title"><span><a href="<?=site_url('product/k36')?>">更多</a></span><h3>产品服务</h3></div>
		<div class=product_content>
			<ul class=product_list>
			<?php $product = x6cmstp_serverce(36,4);?>
			<?php foreach ($product as $item): ?>
	        <li>
				<div class=product_img><a href="<?=site_url('product/detail/'.$item['id'])?>"><img src="<?=get_image_url($item['thumb'])?>" width=85 height=68></A><span><?=$item['title']?><span></div>
				<div class=product_summary>
				<h3><a href="<?=site_url('product/detail/'.$item['id'])?>">⇒<?=$item['title']?></a></h3><?=$item['description']?> 
				</div>
			</li>
			<?php endforeach; ?>
			</ul>
		</div>
	</div>
	<div class="tag">聚合标签：
		<?php $tags = x6cmstp_tags(20);?>
		<?php foreach ($tags as $item): ?>
		<a href="<?=site_url('search/tags/'.$item['url'])?>" class="font<?=rand(1,10)?>"><?=$item['title']?></a>
		<?php endforeach; ?>
	</div>
	<div class="friendlink">
		<?php $friendlink = x6cmstp_friendlink(21);?>
		<?php foreach ($friendlink as $item): ?>
		<a href="<?=$item['url']?>" target="_blank" title="<?=$item['description']?>"><?=$item['title']?></a>
		<?php endforeach; ?>
	</div>
</div>