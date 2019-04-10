<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>官方网站-建筑材料干混砂浆产品质量监督检验测试中心</title>

    <!--高德地图API-->
    <script type="text/javascript" src="https://webapi.amap.com/maps?v=1.4.12&key=e6ae0ce52d025128d86829abd641f04b"></script>
    <link href="/Public/static/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Public/static/css/reset.css" rel="stylesheet">
    <!-- <link href="/Public/static/css/theme.css" rel="stylesheet"> -->
</head>
<body>
<header class="head-section" style="background-color: #1E50AE;">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/Home/index">建筑材料干混砂浆产品质量监督检验测试中心</a>
            </div>
        
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="/Home/Information/introduction" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">中心简介 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/Home/Information/structure">机构设置</a></li>
                            <li><a href="/Home/Information/certificate">资质证书</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="/Home/Information/news" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">新闻中心 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/Home/Information/news">通知公告</a></li>
                            <li><a href="/Home/Information/news#industry">行业新闻</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="/Home/Information/process" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">质检服务 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/Home/Information/process">质检流程</a></li>
                            <li><a href="/Home/Information/scope">质检范围</a></li>
                            <li><a href="/Home/Information/query">报告查询</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                            <a href="/Home/Information/file" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">资料下载 <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="/Home/Information/file">检测资料</a></li>
                                <li><a href="/Home/Information/file#standard">标准资料</a></li>
                            </ul>
                    </li>
                    <li id="contact-us"><a href="/Home/Information/contact">联系我们</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>


<h2>中心概况</h2>
<div>
    <?php echo ($intro["content"]); ?>
</div>
<div class="container" ><div class="hr"><span class="hr-inner"></span></div></div>
<!--footer start-->
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="address wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
        <address>
          <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">
            <p><i class="fa fa-home pr-10"></i>地址: <?php echo ($rs["address"]); ?></p></div>
          <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">
            <p><i class="fa fa-mobile pr-10"></i>联系电话 : <?php echo ($rs["telephone"]); ?> </p></div>
          <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".7s">
            <p><i class="fa fa-envelope pr-10"></i> Email : <?php echo ($rs["email"]); ?></p></div>
        </address>
      </div>
    </div>
  </div>
  <div style="padding-bottom: 20px"></div>
  <!--small footer start -->
  <div class="footer-small">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-xs-8">
            <div class="copyright"> <p>Copyright © 2013-2018 BUPT All Rights Reserved. 备案号：闽ICP备15012807号-1</p>
            </div>
        </div>
    </div>
    </div>
  </div>
</footer>

<script type="text/javascript" >
    var map = new AMap.Map('container', {
        zoom:15,//级别
        center: [116.59706,39.917001],//中心点坐标
        viewMode:'3D'//使用3D视图
    });
    var infoWindow = new AMap.InfoWindow({ //创建信息窗体
        isCustom: true,  //使用自定义窗体
        content:'<div>建材检测中心</div>', //信息窗体的内容可以是任意html片段
        offset: new AMap.Pixel(16, -45)
    });
    var onMarkerClick  =  function(e) {
        infoWindow.open(map, e.target.getPosition());//打开信息窗体
        //e.target就是被点击的Marker
    }
    var marker = new AMap.Marker({
        position: [116.59706,39.917001]
    })
    map.add(marker);
    marker.on('click',onMarkerClick);//绑定click事件
</script>
<script type="text/javascript" src="/Public/static/js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="/Public/static/js/bootstrap.min.js"></script>
</body>
</html>