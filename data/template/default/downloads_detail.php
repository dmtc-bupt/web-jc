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
			当前位置：<a href="<?=base_url()?>">首页</a> > 检测结果</div>
	   
        <dl class="loginsearch">
        <h6 align="center">检测结果查询</h6>
            <form action="<?=site_url('downloads')?>" method="post">
            <dd>受检单位：<input type="text" name="sjdw" class="log" /></dd>
            <dd>中心编号：<input type="text" name="zxbh" class="log" /></dd>
            <dd align="right"><input type="image" src="<?=base_url('data/template/'.$config['site_template'].'/framework/images/login.gif')?>" name="zxbh" /></dd>
            </form>
        </dl>
            
         <?php if($data):?>   
        <div class="texttitle">
            <h5>受检单位:<?=$data[0]['title']?></h5>
            <h5>中心编号:<?=$data[0]['keywords']?></h5>
            <h5><?=$data[0]['content']?></h5>
        </div>
        <?php endif?>
     </div>
</div>
</div>


