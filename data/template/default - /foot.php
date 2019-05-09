<div class="footer">
	<p>备案号：<?=$config['site_beian']?></p>
	<p>© 2012 <?=$config['site_name']?>  Inc. Powered by <a href="<?=lang('system_link')?>" target="_blank"><?=lang('system_name')?></a> <?=lang('system_version')?></p>
</div>
<script type="text/javascript">
$(document).ready(function(){
	$(".keful").mouseover(function(){
		$(".keful").hide();
		$(".kefur").show();
	});
	$(".kefucolose").click(function(){
		$(".kefur").hide();
		$(".keful").show();
	});
});
</script>
<div class="kefu">
<div class="keful"></div>
<div class="kefur">
	<div class="kefutop"><div class="kefucolose"></div></div>
	<div class="kefumiddle"><ul>
		<?php $kefu = x6cmstp_kefu();?>
		<?php foreach ($kefu as $item): ?>
			<?php if($item['category']==44):?>
			<li><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?=$item['title']?>&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:<?=$item['title']?>:45" alt="<?=$item['description']?>" title="<?=$item['description']?>"></a>
			 <a href="http://wpa.qq.com/msgrd?v=3&uin=<?=$item['title']?>&site=qq&menu=yes" class="txt"><?=$item['description']?></a></li>
			 <?php endif;?>
			 <?php if($item['category']==58):?>
			<li><a target="_blank" href="http://www.taobao.com/webww/ww.php?ver=3&touid=<?=urlencode($item['title'])?>
&siteid=cntaobao&status=1&charset=utf-8"><img border="0" src="http://amos.alicdn.com/online.aw?v=2&uid=<?=urlencode($item['title'])?>
&site=cntaobao&s=1&charset=utf-8" alt="<?=$item['description']?>" /></a></li>
			 <?php endif;?>
			 <?php if($item['category']==50):?>
			<li><a href="mailto:<?=$item['title']?>"><img border=0 align=absMiddle src="<?=base_url('data/template/'.$config['site_template'].'/images/email.gif')?>"></a>
			 <a href="mailto:<?=$item['title']?>" class="txt"><?=$item['description']?></a></li>
			 <?php endif;?>
			 <?php if($item['category']==59):?>
			 <li class="txt"><?=$item['description']?></li>
			 <?php endif;?>
		<?php endforeach; ?>
		</ul>
	</div>
	<div class="kefubottom"></div>
</div>
</div>
<?=$config['tongji']?>
</body>
</html>