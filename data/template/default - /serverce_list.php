
<div class="sub_banner">
<img src="<?=base_url($config['thumb'])?>" />
</div>
<!--banner-->

<div class="content_wrap">
<div class="content clearfix">
    	<div class="left clearfix">
            <div class="sub_title">
                <?=$allcategory[$categoryid]['title']?>
            </div>
            <ul class="subnav">
				<?php $category = x6cmstp_categorypath('article',5,$detail['category']);?>
			<?php foreach ($category as $item): ?>
			<li><a href="<?=site_url('article/k'.$item['id'])?>" <?php if ($item['id'] == $categoryid): ?>class="contacton"<?php endif; ?> title="<?=$item['title']?>"><?=$item['title']?></a></li>
			<?php endforeach; ?>
            </ul>
            <div class="sub_title" style="background-position:20px -32px;">
                产品与服务
            </div>
            <ul class="subnav">
		<?php $nav= x6cmstp_indexcategory(35);?>
		<?php foreach ($nav as $item): ?>
                 <li><a href="<?=site_url($item['class'].'/k'.$item['id'])?>"><?=$item['title']?></a></li>
		<?php endforeach; ?>
            </ul>
            <div class="sub_title" style="background-position:20px -64px;">
                联系我们
            </div>
            <ul class="subnav">
                 <ol><?=$config['site_name']?></ol>
                 <ol>电话：<?=$config['site_phone']?></ol>
                 <ol>传真：<?=$config['site_fax']?></ol>
                 <ol>Email：<?=$config['site_email']?></ol>
                 <ol><?=$config['site_addr']?></ol>
            </ul>
        </div>
     <div class="right clearfix">
     	<div class="ur_here">当前位置：<a href="<?=base_url()?>">首页</a> > 
			<?php $category = x6cmstp_categorypath('article',4,$detail['category']);?>
			<?php foreach ($category as $item): ?>
			<a href="<?=site_url('article/k'.$item['id'])?>"><?=$item['title']?></a><?php if($item['id']!=$categoryid):?> > <?php endif;?>
			<?php endforeach; ?> </div>
        <div class="texttitle">
            <h4><?=$detail['title']?></h4>
            <h5>来源：<?=$detail['copyfrom']?> | 浏览量：<?=$detail['hits']?> | 发布时间:<?=date('Y-m-d H:i:s',$detail['puttime'])?></h5>
        </div>
        <div class="textcontent">
        	<?=$detail['content']?>
					<?php $tags = x6cmstp_articletag($detail['id']);?>
					<?php if($tags):?>
					<br>
					<p>标签：
					<?php foreach ($tags as $item): ?>
					<a href="<?=site_url('search/tags/'.$item['url'])?>" ><?=$item['title']?></a>、
					<?php endforeach; ?>
					</p>
					<?php endif;?>
            		<br />
            		<br />
					<ul>
					<?php $article = x6cmstp_prearticle($detail['id']);?>
					<?php if ($article): ?><li>上一篇：<a href="<?=site_url('article/detail/'.$article['id'])?>"><?=$article['title']?></a></li><?php endif; ?>
					<?php $article = x6cmstp_nextarticle($detail['id']);?>
					<?php if ($article): ?><li>下一篇：<a href="<?=site_url('article/detail/'.$article['id'])?>"><?=$article['title']?></a></li><?php endif; ?>
					</ul>
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
</div>
</div>
<!--indexcontent-->













<div class="main">
	<div class="mainleft">
		<div class="lefttop">
			<h3><?=$allcategory[$categoryid]['title']?></h3>
		</div>
		<div class="leftmiddle">
			<ul class="aboutnav">
				<?php $category = x6cmstp_categorypath('serverce',5,$categoryid);?>
				<?php foreach ($category as $item): ?>
				<li><a href="<?=site_url('serverce/k'.$item['id'])?>" <?php if ($item['id'] == $categoryid): ?>class="contacton"<?php endif; ?> title="<?=$item['title']?>"><?=$item['title']?></a></li>
				<?php endforeach; ?>
			</ul>
		</div>
		<div class="leftbottom"></div>
	</div>
	<div class="mainright">
		<div class="righttop">
			当前位置：<a href="<?=base_url()?>">首页</a> > 
			<?php $category = x6cmstp_categorypath('serverce',4,$categoryid);?>
			<?php foreach ($category as $item): ?>
			<a href="<?=site_url('serverce/k'.$item['id'])?>"><?=$item['title']?></a><?php if($item['id']!=$categoryid):?> > <?php endif;?>
			<?php endforeach; ?>
		</div>
		<div class="rightmiddle">
			<ul class="newsa">
				<?php foreach ($list as $key => $item): ?>
				<li>
					<div class=centerimg><A href="<?=site_url('serverce/k'.$item['category'])?>"><img src="<?=get_image_url($item['thumb'])?>" width="85" height="68"></a></div>
					<div class=centercontent><b>[<a href="<?=site_url('serverce/k'.$item['category'])?>"><?=$allcategory[$item['category']]['title']?></a>] <a href="<?=site_url('serverce/detail/'.$item['id'])?>" target="_blank"><?=$item['title']?></a></b>
					<p><?=$item['description']?> [<a style="COLOR: #747474" href="<?=site_url('serverce/detail/'.$item['id'])?>">全文</a>]</p>
					</div>
				</li>
				<?php endforeach; ?>
			</ul>
			<div class="page"><?=isset($pagestr)?$pagestr:''?></div>
		</div>
		<div class="rightbottom"></div>
	</div>
</div>