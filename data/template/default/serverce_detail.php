
<div class="sub_banner" style="background:url(<?=base_url($config['thumb'])?>) no-repeat center top;">
</div>
<!--banner-->
<div class="content_wrap">
<div class="content">
    	<div class="left clearfix png">
            <div class="sub_title sub_ti">
                <?=$allcategory[$detail['category']]['title']?>
            </div>
            <ul class="subnav">
				<?php $category = x6cmstp_categorypath('serverce',5,$detail['category']);?>
			<?php foreach ($category as $item): ?>
			<li><a href="<?=site_url('serverce/k'.$item['id'])?>" <?php if ($item['id'] == $categoryid): ?>class="contacton"<?php endif; ?> title="<?=$item['title']?>"><?=$item['title']?></a></li>
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
     	<div class="ur_here png">当前位置：<a href="<?=base_url()?>">首页</a> > 
			<?php $category = x6cmstp_categorypath('serverce',4,$detail['category']);?>
			<?php foreach ($category as $item): ?>
			<a href="<?=site_url('serverce/k'.$item['id'])?>"><?=$item['title']?></a><?php if($item['id']!=$categoryid):?> > <?php endif;?>
			<?php endforeach; ?> </div>
        <div class="texttitle">
            <h4><?=$detail['title']?></h4>
            <h5>来源：<?=$detail['copyfrom']?> | 浏览量：<?=$detail['hits']?> | 发布时间:<?=date('Y-m-d H:i:s',$detail['puttime'])?></h5>
        </div>
        <div class="textcontent">
        	<?=$detail['content']?>
            		<br />
            		<br />
				<div class="context">
					<ul>
					<?php $serverce = x6cmstp_preserverce($detail['id']);?>
					<?php if ($serverce): ?><li>上一篇：<a href="<?=site_url('serverce/detail/'.$serverce['id'])?>"><?=$serverce['title']?></a></li><?php endif; ?>
					<?php $serverce = x6cmstp_nextserverce($detail['id']);?>
					<?php if ($serverce): ?><li>下一篇：<a href="<?=site_url('serverce/detail/'.$serverce['id'])?>"><?=$serverce['title']?></a></li><?php endif; ?>
					</ul>
				</div>

        </div>
	</div>
</div>
</div>
<!--indexcontent-->


