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


<!-- 轮播图 -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    </ol>
  
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="/Public/picture/lab_image/1.jpg" alt="轮播图">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item">
        <img src="/Public/picture/lab_image/2.jpg" alt="...">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item">
        <img src="/Public/picture/lab_image/3.jpg" alt="...">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item">
        <img src="/Public/picture/lab_image/4.jpg" alt="...">
        <div class="carousel-caption">
        </div>
      </div>
    </div>
  
    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- 内容区域 -->
<div class="container-fluid" id="content-area">
    <div class="row">
        <div class="col-xs-12 col-md-2" id="download-left">
            <ul class="list-group">
                <li class="list-group-item" id="list-group-title">资料下载<span class="glyphicon glyphicon-chevron-right"></span></li>
                <li class="list-group-item">
                    <span class="list-left-title">首届华东六省首届华东六省首届华东六省首届华东六省首届华东六省</span>
                    <span class="list-left-date">2019-03-12</span>
                </li>
                <li class="list-group-item">
                    <span class="list-left-title">首届华东六省首届华东六省首届华东六省首届华东六省首届华东六省</span>
                    <span class="list-left-date">2019-03-12</span>
                </li>
                <li class="list-group-item">
                    <span class="list-left-title">首届华东六省首届华东六省首届华东六省首届华东六省首届华东六省</span>
                    <span class="list-left-date">2019-03-12</span>
                </li>
                <li class="list-group-item">
                    <span class="list-left-title">首届华东六省首届华东六省首届华东六省首届华东六省首届华东六省</span>
                    <span class="list-left-date">2019-03-12</span>
                </li>
                <li class="list-group-item">
                    <span class="list-left-title">首届华东六省首届华东六省首届华东六省首届华东六省首届华东六省</span>
                    <span class="list-left-date">2019-03-12</span>
                </li>
                <li class="list-group-item">
                    <span class="list-left-title">首届华东六省首届华东六省首届华东六省首届华东六省首届华东六省</span>
                    <span class="list-left-date">2019-03-12</span>
                </li>
                <li class="list-group-item">
                    <span class="list-left-title">首届华东六省首届华东六省首届华东六省首届华东六省首届华东六省</span>
                    <span class="list-left-date">2019-03-12</span>
                </li>
                <li class="list-group-item">
                    <span class="list-left-title">首届华东六省首届华东六省首届华东六省首届华东六省首届华东六省</span>
                    <span class="list-left-date">2019-03-12</span>
                </li>
                <li class="list-group-item">
                    <span class="list-left-title">首届华东六省首届华东六省首届华东六省首届华东六省首届华东六省</span>
                    <span class="list-left-date">2019-03-12</span>
                </li>
                <li class="list-group-item">
                    <span class="list-left-title">首届华东六省首届华东六省首届华东六省首届华东六省首届华东六省</span>
                    <span class="list-left-date">2019-03-12</span>
                </li>
                <li class="list-group-item">
                    <span class="list-left-title">首届华东六省首届华东六省首届华东六省首届华东六省首届华东六省</span>
                    <span class="list-left-date">2019-03-12</span>
                </li>
                <li class="list-group-item">
                    <span class="list-left-title">首届华东六省首届华东六省首届华东六省首届华东六省首届华东六省</span>
                    <span class="list-left-date">2019-03-12</span>
                </li>
              </ul>
        </div>
        <div class="col-xs-12 col-md-8" id="information-news">
            <div class="infomation-title">
                <span class="glyphicon glyphicon-leaf"></span>
                <span class="infomation-title-text">新闻中心</span>
            </div>
            <hr />
            <div class="row">
                <div class="col-xs-4 col-md-4">
                    <div id="carousel-introduce" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                          <li data-target="#carousel-introduce" data-slide-to="0" class="active"></li>
                          <li data-target="#carousel-introduce" data-slide-to="1"></li>
                          <li data-target="#carousel-introduce" data-slide-to="2"></li>
                          <li data-target="#carousel-introduce" data-slide-to="3"></li>
                        </ol>
                      
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                          <div class="item active">
                            <img src="/Public/picture/lab_image/20130301082708_76145.jpg" alt="轮播图">
                            <div class="carousel-caption">
                            </div>
                          </div>
                          <div class="item">
                            <img src="/Public/picture/lab_image/20130301082708_76145.jpg" alt="...">
                            <div class="carousel-caption">
                            </div>
                          </div>
                          <div class="item">
                            <img src="/Public/picture/lab_image/20130301082708_76145.jpg" alt="...">
                            <div class="carousel-caption">
                            </div>
                          </div>
                          <div class="item">
                            <img src="/Public/picture/lab_image/20130301082708_76145.jpg" alt="...">
                            <div class="carousel-caption">
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-8 col-md-8" id="information-news-details">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <span class="list-left-title">首届华东六省首届华东六省首届华东六省首届华东六省首届华东六省</span>
                            <span class="list-left-date">2019-03-12</span>
                        </li>
                        <li class="list-group-item">
                            <span class="list-left-title">首届华东六省首届华东六省首届华东六省首届华东六省首届华东六省</span>
                            <span class="list-left-date">2019-03-12</span>
                        </li>
                        <li class="list-group-item">
                            <span class="list-left-title">首届华东六省首届华东六省首届华东六省首届华东六省首届华东六省</span>
                            <span class="list-left-date">2019-03-12</span>
                        </li>
                        <li class="list-group-item">
                            <span class="list-left-title">首届华东六省首届华东六省首届华东六省首届华东六省首届华东六省</span>
                            <span class="list-left-date">2019-03-12</span>
                        </li>
                        <li class="list-group-item">
                            <span class="list-left-title">首届华东六省首届华东六省首届华东六省首届华东六省首届华东六省</span>
                            <span class="list-left-date">2019-03-12</span>
                        </li>
                      </ul>
                </div>
            </div>
            <div class="row" id="center-content">
                <div class="col-xs-6 col-md-6">
                    <div class="infomation-title" style="overflow: hidden;">
                        <div style="float: left;">
                            <span class="glyphicon glyphicon-leaf"></span>
                            <span class="infomation-title-text">质检服务</span>
                        </div>
                        <div style="float: right;width: 70%;">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="请输入检索关键字...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">搜索</button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <ul class="list-group">
                        <li class="list-group-item">
                            <span class="list-left-title">首届华东六省首届华东六省首届华东六省首届华东六省首届华东六省</span>
                            <span class="list-left-date">2019-03-12</span>
                        </li>
                        <li class="list-group-item">
                            <span class="list-left-title">首届华东六省首届华东六省首届华东六省首届华东六省首届华东六省</span>
                            <span class="list-left-date">2019-03-12</span>
                        </li>
                        <li class="list-group-item">
                            <span class="list-left-title">首届华东六省首届华东六省首届华东六省首届华东六省首届华东六省</span>
                            <span class="list-left-date">2019-03-12</span>
                        </li>
                        <li class="list-group-item">
                            <span class="list-left-title">首届华东六省首届华东六省首届华东六省首届华东六省首届华东六省</span>
                            <span class="list-left-date">2019-03-12</span>
                        </li>
                      </ul>
                </div>
                <div class="col-xs-6 col-md-6">
                    <div class="infomation-title">
                        <span class="glyphicon glyphicon-leaf"></span>
                        <span class="infomation-title-text">标准化工作</span>
                    </div>
                    <hr />
                    <ul class="list-group">
                        <li class="list-group-item">
                            <span class="list-left-title">首届华东六省首届华东六省首届华东六省首届华东六省首届华东六省</span>
                            <span class="list-left-date">2019-03-12</span>
                        </li>
                        <li class="list-group-item">
                            <span class="list-left-title">首届华东六省首届华东六省首届华东六省首届华东六省首届华东六省</span>
                            <span class="list-left-date">2019-03-12</span>
                        </li>
                        <li class="list-group-item">
                            <span class="list-left-title">首届华东六省首届华东六省首届华东六省首届华东六省首届华东六省</span>
                            <span class="list-left-date">2019-03-12</span>
                        </li>
                        <li class="list-group-item">
                            <span class="list-left-title">首届华东六省首届华东六省首届华东六省首届华东六省首届华东六省</span>
                            <span class="list-left-date">2019-03-12</span>
                        </li>
                      </ul>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-2">
            <div class="infomation-title">
                <span class="glyphicon glyphicon-leaf"></span>
                <span class="infomation-title-text">报告查询</span>
            </div>
            <hr />
            <form role="form">
                <div class="form-group">
                    <label for="department">受检单位</label>
                    <input type="text" class="form-control" id="department" 
                            placeholder="请输入单位名称">
                    <label for="centerNum">中心编号</label>
                    <input type="text" class="form-control" id="centerNum" 
                            placeholder="请输入中心编号">
                    <label for="code">验证码</label>
                    <input type="text" class="form-control" id="code" 
                            placeholder="请输入验证码">
                </div>
                <button type="submit" class="btn btn-primary">提交</button>
            </form>
            <hr />
            <div class="row">
                <div class="col-xs-12 col-md-12" id="contactor-login">
                    <button class="btn btn-primary"><i class="glyphicon glyphicon-user"></i>联络员登录</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 实验室风采 -->
<div class="container-fluid" id="lab-sence">
    <div class="row">
        <div class="col-xs-12 col-md-12">
            <div class="infomation-title">
                <span class="glyphicon glyphicon-leaf"></span>
                <span class="infomation-title-text">实验室风采</span>
            </div>
            <hr />
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="thumbnail">
                            <img src="/Public/picture/lab_image/20130301082708_76145.jpg" type="button" data-toggle="modal" data-target="#imgPreModal" data-whatever="/Public/picture/lab_image/20130301082708_76145.jpg" alt="...">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="thumbnail">
                            <img src="/Public/picture/lab_image/20130301082708_76145.jpg" alt="...">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="thumbnail">
                            <img src="/Public/picture/lab_image/20130301082708_76145.jpg" alt="...">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="thumbnail">
                            <img src="/Public/picture/lab_image/20130301082708_76145.jpg" alt="...">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="thumbnail">
                            <img src="/Public/picture/lab_image/20130301082708_76145.jpg" alt="...">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="thumbnail">
                            <img src="/Public/picture/lab_image/20130301082708_76145.jpg" alt="...">
                        </div>
                    </div>
                </div>
                <!-- <div class="swiper-pagination"></div> -->
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="imgPreModal" role="dialog" aria-labelledby="imgPreModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="imgPreModalLabel">实验室风采</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <img style="width: 100%" class="showPreImg" src="" />
                    </div>
                    <div class="col-xs-12 col-md-12">
                        <p>这是一段描述</p>
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