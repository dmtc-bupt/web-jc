<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom"	xmlns:sy="http://purl.org/rss/1.0/modules/syndication/">

<channel>
	<title><?=$config['seo_title']?> - <?=$config['site_name']?></title>
	<link><?=base_url()?></link>
	<description><?=$config['site_name']?><?=$config['seo_title']?></description>
	<language>zh-cn</language>
	<ttl>1440</ttl>
	<copyright>© 2012 <?=$config['site_name']?>  Inc. Powered by <?=lang('system_name')?> <?=lang('system_version')?></copyright>
	<pubDate><?=date(DATE_RFC822,$list[0]['puttime'])?></pubDate>
	<?php $category = x6cmstp_category('article');?>
	<?php foreach ($category as $item): ?>
	<category><?=$item['title']?></category>
	<?php endforeach; ?>
	<?php foreach ($list as $key => $item): ?>
	<item>
		<title><?=$item['title']?></title>
		<link><?=site_url('article/detail/'.$item['id'])?></link>
		<author><?=$item['copyfrom']?></author>
		<category><?=$category[$item['category']]['title']?></category>
		<pubDate><?=date(DATE_RFC822,$item['puttime'])?></pubDate>
		<description><?=$item['description']?></description>
	</item>
	<?php endforeach; ?>
</channel>
</rss>