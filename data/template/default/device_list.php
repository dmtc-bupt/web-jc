<div class="sub_banner" style="background:url(<?=base_url($config['thumb'])?>) no-repeat center top;">
</div>
<!--banner-->
<div class="content_wrap">
<div class="content">
    	<div class="left clearfix png">
            <div class="sub_title sub_ti">
               新闻中心
            </div>
            <ul class="subnav">
		<?php $nav= x6cmstp_indexcategory(1);?>
		<?php foreach ($nav as $item): ?>
                 <li><a href="<?=site_url($item['class'].'/k'.$item['id'])?>"><?=$item['title']?></a></li>
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
     	<div class="ur_here png">
			当前位置：<a href="<?=base_url()?>">首页</a> > 
			<?php $category = x6cmstp_categorypath('device',4,$categoryid);?>
			<?php foreach ($category as $item): ?>
			<a href="<?=site_url('device/k'.$item['id'])?>"><?=$item['title']?></a><?php if($item['id']!=$categoryid):?> > <?php endif;?>
			<?php endforeach; ?></div>
			<ul class="piclist"  id="gallery">
			
<link href="<?=base_url('data/template/'.$config['site_template'].'/framework/css/jquery.lightbox-0.5.css')?>" rel="stylesheet" type="text/css" />	
<SCRIPT type=text/javascript src="<?=base_url('data/template/'.$config['site_template'].'/framework/js/jquery.lightbox-0.5.min.js')?>"></SCRIPT><script type="text/javascript">
    $(function() {
        $('#gallery a').lightBox();
    });
    </script>

				<?php  foreach ($list as $key => $item): ?>
				<li><A href="<?=get_image_url($item['thumb'])?>" title="<?=$item['title']?><br/><?=$item['keywords']?>"><img src="<?=get_image_url($item['thumb'])?>"></a>
					<dt><a href="<?=get_image_url($item['thumb'])?>" target="_blank"><?=$item['title']?></a></dt>
				</li>
				<?php endforeach; ?>
			</ul>
        <div class="contentpages clearfix">
		<?=isset($pagestr)?$pagestr:''?>
        </div>
     </div>
</div>
</div>


