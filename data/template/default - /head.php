<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$config['seo_title']?> - <?=$config['site_name']?> </title>
<meta name="keywords" content="<?=$config['seo_keywords']?>" />
<meta name="description" content="<?=$config['seo_description']?>" />
<meta name="autor" content="<?=lang('system_author')?>" />
<script type="text/javascript" src="<?=base_url('data/template/'.$config['site_template'].'/js/jquery-1.8.2.min.js')?>"></script>
<script type="text/javascript" src="<?=base_url('data/template/'.$config['site_template'].'/js/public.js')?>"></script>
<link rel="stylesheet" type="text/css" href="<?=base_url('data/template/'.$config['site_template'].'/css/style.css')?>" />
<link rel="shortcut icon" href="<?=base_url('data/template/'.$config['site_template'].'/images/favicon.ico')?>" />
</head>
<body>
<div class="header">
	<div class="logo">
		<a href=""><img src="<?=base_url('data/template/'.$config['site_template'].'/images/logo.png')?>"></a>	
	</div>
	<div class="headerr">
		<ul class="nav_top">
		<?php $navigation = x6cmstp_navigation(39);?>
		<?php foreach ($navigation as $item): ?>
		<li><a href="<?=$item['url']?>"><?=$item['title']?></a></li>
		<?php endforeach; ?>
		</ul>
		<div class="search">
			<form name=search method="post" action="<?=site_url('search/keywords')?>">
				<input type="text" class="text" value="输入关键字" name="keyword" onclick="if(this.value=='输入关键字') this.value=''" />
 				<input class="btn" type="submit" title="搜索" value="搜 索">
			</form>
		</div>
	</div>
	<div class="nav">
		<ul>
		<?php $navigation = x6cmstp_navigation(18);?>
		<?php foreach ($navigation as $item): ?>
		<li><a href="<?=$item['url']?>"><?=$item['title']?></a></li>
		<?php endforeach; ?>
		</ul>
	</div>
</div>




  <?php $navigation = x6cmstp_indexcategory(0);?>
  
	<?php foreach ($navigation as $item): ?>
  <LI><A href="<?=site_url($item['class'])?>" class="lia"><?=$item['title']?></A>
      <DIV id=sub_nav>
		<?php $nav= x6cmstp_indexcategory($item['id']);?>
		<?php foreach ($nav as $item1): ?>
		<A class="lib" href="<?=site_url($item1['class'].'/k'.$item1['id'])?>"><?=$item1['title']?></A>
		<?php endforeach; ?>
      </DIV>
  </LI>
	<?php endforeach; ?>