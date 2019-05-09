
<div class="sub_banner" style="background:url(<?=base_url("data/template/default/framework/images/sub_banner.jpg")?>) no-repeat center top;">
</div>

<!--banner-->
<div class="content_wrap">
<div class="content">
    	<div class="left clearfix png">
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
			当前位置：<a href="<?=base_url()?>">首页</a> > 搜索
            </div>
			<ul class="contentlist">
				
				<?php $i=1; foreach ($list as $key => $item): ?>
				<li>
					<dl><?=$i?></dl>
					<dt><a href="<?=site_url('article/detail/'.$item['id'])?>" target="_blank"><?=$item['title']?></a></dt>
					<dd>类别：<a href=""><?=$allcategory[$item['category']]['title']?></a> 发布：<?=date('Y/m/d',$item['puttime'])?> 浏览：<?=$item['hits']?></dd>
					<p><a href="<?=site_url('article/detail/'.$item['id'])?>" target="_blank"><?=$item['description']?></a></p>
				</li>
				<?php $i++; endforeach; ?>
			</ul>
        <div class="contentpages">
		<?=isset($pagestr)?$pagestr:''?>
        </div>
     </div>
</div>
</div>
