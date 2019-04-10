<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta width='div' />
    <title>官方网站-建筑材料干混砂浆产品质量监督检验测试中心</title>

    <!--高德地图API-->
    <script type="text/javascript" src="https://webapi.amap.com/maps?v=1.4.12&key=e6ae0ce52d025128d86829abd641f04b"></script>
    <link href="/Public/static/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/Public/static/css/swiper.min.css">
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
                <a class="navbar-brand" href="/Home/index">
                    <img src="/Public/picture/logo.png" alt="" />
                    <div class="navbar-header-right">
                        <p>(国家)建筑材料工业技术监督研究中心</p>
                        <p>建筑材料干混砂浆产品质量监督检验测试中心</p>
                    </div>
                </a>
            </div>
        
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="/Home/Information/introduction" class="dropdown-toggle" data-toggle="dropdown" role="button" data-hover="dropdown" aria-haspopup="true" aria-expanded="false">中心简介 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/Home/Information/basic">中心概况</a></li>
                            <li><a href="/Home/Information/structure">机构设置</a></li>
                            <li><a href="/Home/Information/certificate">资质证书</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="/Home/Information/news" class="dropdown-toggle" data-toggle="dropdown" role="button" data-hover="dropdown" aria-haspopup="true" aria-expanded="false">新闻中心 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/Home/Information/news">通知公告</a></li>
                            <li><a href="/Home/Information/notice">行业新闻</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="/Home/Information/process" class="dropdown-toggle" data-toggle="dropdown" role="button" data-hover="dropdown" aria-haspopup="true" aria-expanded="false">质检服务 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/Home/Information/process">检测流程</a></li>
                            <li><a href="/Home/Information/scope">质检范围</a></li>
                            <li><a href="/Home/Information/query">报告查询</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="/Home/Information/project" class="dropdown-toggle" data-toggle="dropdown" role="button" data-hover="dropdown" aria-haspopup="true" aria-expanded="false">标准化工作 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/Home/Information/project">标准立项</a></li>
                            <li><a href="/Home/Information/issued">标准发布</a></li>
                            <li><a href="/Home/Information/dynamic">标准动态</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                            <a href="/Home/Information/file" class="dropdown-toggle" data-toggle="dropdown" role="button" data-hover="dropdown" aria-haspopup="true" aria-expanded="false">资料下载 <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="/Home/Information/file">标准资料</a></li>
                                <li><a href="/Home/Information/file2">检测资料</a></li>
                            </ul>
                    </li>
                    <li class="dropdown" id="contact-us"><a href="/Home/Information/contact">联系我们</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>


    <div class="picContainer">
        <img src="/Public/picture/about.png" alt="中心简介">
        <a  id="fix-title" href="">中心简介</a>
    </div>
    <div class="container-two" id="container-content">
        <div class="row">
            <div class="col-xs-2 col-md-2 left-menu">
                <ul>
                    <li><a href="/Home/Information/basic">中心概况</a></li>
                    <li><a href="/Home/Information/structure">机构设置</a></li>
                    <li><a href="/Home/Information/certificate">资质证书</a></li>
                </ul>
            </div>
            <div class="col-xs-10 col-md-10 right-content">
                <div class="breadcrumbs">
                    <div class="row">
                        <div class="col-lg-8 col-sm-8">
                            <ol class="breadcrumb pull-left">
                                <li>
                                    <i class="glyphicon glyphicon-home"></i><a href="/home/Index/index">
                                    主页
                                </a>
                                </li>
                                <li>
                                    <?php if($type == 1): ?><a href="/home/Information/information">
                                        中心简介
                                    </a>
                                        <?php else: ?>
                                        <a href="/home/Information/information#dynamic">
                                            资质证书
                                        </a><?php endif; ?>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="row" id="right-content-details">
                    <div class="col-xs-12 col-md-6">
                        <div class="thumbnail">
                            <img src="/Public/picture/cert-1" alt="...">
                            <div class="caption">
                                <span>中国国家认证认可监督管理委员会颁发</span>
                                <span>资质认定计量认证证书</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="thumbnail">
                            <img src="/Public/picture/cert-2" alt="...">
                            <div class="caption">
                                <span>中国建筑材料联合会颁发授权证书</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-12" id="cert-pic">
                            <div class="thumbnail" style="clear:both;overflow:hidden;">
                                <img src="/Public/picture/cert-3" alt="...">
                                <img src="/Public/picture/cert-4" alt="...">
                                <div class="caption" style="float:left;">
                                    <span>中国建筑材料联合会颁发授权证书</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="container" ><div class="hr"><span class="hr-inner"></span></div></div>
<!--footer start-->
<footer class="footer">
  <div class="container">
      <div class="row">
          <div class="col-xs-4 col-md-4 footer-info">
            <p><i class="glyphicon glyphicon-lock"></i>备案号: <?php echo ($footer["record"]); ?></p>
            <p><i class="glyphicon glyphicon-envelope"></i> Email : <?php echo ($footer["email"]); ?></p>
          </div>
          <div class="col-xs-4 col-md-4 footer-info">
            <p><i class="glyphicon glyphicon-home"></i>地址: <?php echo ($footer["address"]); ?></p>
            <p><i class="glyphicon glyphicon-phone-alt"></i>联系电话 : <?php echo ($footer["telephone"]); ?> </p>
          </div>
          <div class="col-xs-4 col-md-4 footer-img">
            <img src="/Public/picture/footerCode.png" alt="">
          </div>
        </div>
  </div>
  <!--small footer start-->
  <div class="footer-small">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-xs-12">
            <div class="copyright"> <p>Copyright © 2013-2018 BUPT All Rights Reserved. </p>
            </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!--<script type="text/javascript" src="http://webapi.amap.com/maps?v=1.4.5&key=6cdce0833c160c7358e0700085a42ec5"></script>-->
<script type="text/javascript" src="https://webapi.amap.com/maps?v=1.4.13&key=1f342e37b7e51d824cdcd9a940a3d37a"></script>
<script type="text/javascript" >
    // var map = new AMap.Map('container', {
    //     resizeEnable: true,
    //     center: [116.59706,39.917001],
    //     zoom: 15
    // });
    //地图初始化时，在地图上添加一个marker标记,鼠标点击marker可弹出自定义的信息窗体
    var map = new AMap.Map("gaodemap", {
        resizeEnable: true,
        center: [116.597735,39.917448],
        zoom: 15
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
        map: map,
        position: [116.597735,39.917448]
    })
    map.add(marker);
    marker.on('click',onMarkerClick);//绑定click事件



    addMarker();
    //添加marker标记
    function addMarker() {
        map.clearMap();
        var marker = new AMap.Marker({
            map: map,
            position: [116.597735,39.917448]
        });
        //鼠标点击marker弹出自定义的信息窗体
        AMap.event.addListener(marker, 'click', function() {
            infoWindow.open(map, marker.getPosition());
        });
    }
    //构建信息窗体中显示的内容
    var info = [];
    info.push("<div style=\"padding:0px 0px 0px 4px;\"><b style='color: #CF6942;font-size: 20px;'>建筑材料工业干混砂浆产品质量监督检验测试中心</b>");
    info.push("<strong style='font-size: 16px;'>电话 :</strong> \n" + "<b style='font-size: 16px;'>010-51164723 010-51164718</b> ");
    info.push("<div style='font-size: 16px;'><strong>地址 :</strong>北京市朝阳区管庄东里中国建材院内北楼</div></div>");
    infoWindow = new AMap.InfoWindow({
        content: info.join("<br/>")  //使用默认信息窗体框样式，显示信息内容
    });
    infoWindow.open(map, map.getCenter());
    //关闭信息窗体
    function closeInfoWindow() {
        map.clearInfoWindow();
    }

</script>
<script type="text/javascript" src="http://webapi.amap.com/demos/js/liteToolbar.js"></script>
<script type="text/javascript" src="/Public/static/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="/Public/static/js/bootstrap.min.js"></script>
<script src="/Public/static/js/swiper.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 3,
      spaceBetween: 30,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      freeMode: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
</script>
<script type="text/javascript" src="/Public/static/js/main.js"></script>
<script src="https://cdn.bootcss.com/bootstrap-hover-dropdown/2.2.1/bootstrap-hover-dropdown.min.js"></script>
</body>
</html>