<div class="main">
	<div class="mainleft">
		<div class="lefttop">
			<h3>产品服务</h3>
		</div>
		<div class="leftmiddle">
			<ul class="aboutnav">
			</ul>
		</div>
		<div class="leftbottom"></div>
	</div>
	<div class="mainright">
		<div class="righttop">
			当前位置：<a href="<?=base_url()?>">首页</a> > <a href="<?=site_url('page/'.$detail['id'])?>"><?=$detail['title']?></a>
		</div>
		<div class="rightmiddle">
			<div class="aboutcontent">
				<h1><?=$detail['title']?></h1>
				<div class="news_ctn"><?=$detail['content']?></div>
			</div>
		</div>
		<div class="rightbottom"></div>
	</div>
</div>