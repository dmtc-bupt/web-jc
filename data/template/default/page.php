<div class="sub_banner" style="background:url(<?=base_url('data/template/'.$config['site_template'].'/framework/images/sub_banner.jpg')?>) no-repeat center top;">
</div>
<!--banner-->
<div class="content_wrap">
<div class="content">
    	<div class="left clearfix png">
            <div class="sub_title sub_ti">
                公司简介
            </div>
            <ul class="subnav">
  <?php $navigation = x6cmstp_pagecategory();?>
  
			<?php foreach ($navigation as $item): ?>
			<li><a href="<?=site_url('page/'.$item['id'])?>" <?php if ($item['id'] == $categoryid): ?>class="contacton"<?php endif; ?> title="<?=$item['title']?>"><?=$item['title']?></a></li>
			<?php endforeach; ?>
            </ul>
            <div class="sub_title" style="background-position:10px -30px;">
                检测服务
            </div>
            <ul class="subnav">
		<?php $nav= x6cmstp_indexcategory(35);?>
		<?php foreach ($nav as $item): ?>
                 <li><a href="<?=site_url($item['class'].'/k'.$item['id'])?>"><?=$item['title']?></a></li>
		<?php endforeach; ?>
            </ul>
            <div class="sub_title" style="background-position:10px -58px;">
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
     <div class="right clearfix png">
     	<div class="ur_here png">当前位置：<a href="<?=base_url()?>">首页</a> > <a href="<?=site_url('page/'.$detail['id'])?>"><?=$detail['title']?></a></div>
        <div class="texttitle">
            <h4><?=$detail['title']?></h4>
            <h5>来源：<?=$config['site_shortname']?></h5>
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

        </div>
	</div>
</div>
</div>
<!--indexcontent-->