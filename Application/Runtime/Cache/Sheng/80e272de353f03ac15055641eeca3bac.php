<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>-->

    <title>
        浙江超晶晟锐光电有限公司
    </title>

    <!-- Bootstrap core CSS -->
    <link href="/Public/shengrui/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Public/static/css/theme.css" rel="stylesheet">
    <link href="/Public/static/css/bootstrap-reset.css" rel="stylesheet">
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet">-->

    <!--external css-->
    <link href="/Public/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="/Public/static/css/flexslider.css"/>
    <link href="/Public/assets/bxslider/jquery.bxslider.css" rel="stylesheet" />
    <link rel="stylesheet" href="/Public/static/css/animate.css">
    <link rel="stylesheet" href="/Public/assets/owlcarousel/owl.carousel.css">
    <link rel="stylesheet" href="/Public/assets/owlcarousel/owl.theme.css">

    <link href="/Public/static/css/superfish.css" rel="stylesheet" media="screen">

    <!-- 地图 -->

    <link rel="stylesheet" href="http://cache.amap.com/lbs/static/main1119.css"/>
    <script src="http://cache.amap.com/lbs/static/es5.min.js"></script>

    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href=" /Public/static/css/component.css">
    <link href="/Public/shengrui/css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/Public/static/css/parallax-slider/parallax-slider.css" />
    <script type="text/javascript" src="/Public/static/js/parallax-slider/modernizr.custom.28468.js">
    </script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="/Public/static/js/html5shiv.js">
    </script>
    <script src="//webapi.amap.com/ui/1.0/main.js?v=1.0.11"></script>
    <script src="/Public/static/js/respond.min.js">
    </script>
    <![endif]-->
    <style type="text/css">
        .container {
            width: 1200px !important;
        }
    </style>
</head>

<body>
<div class="container">
<img src="/Public/static/images/srlogo.jpg" style="height: 50px;float: left">
    <div style="float: right;padding-top: 15px"><i class="fa fa-mobile pr-10"></i>联系电话 : <?php echo ($rs["telephone"]); ?></div>
</div>
<!--header start-->
<header class="head-section" style="background-color: #337ab7;">
    <div class="container">
    <div class="navbar navbar-default navbar-static-top ">
        <!-- Button for smallest screens -->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        <div class="navbar-header">

            <a class="navbar-brand" href="#" style="color: #ffffff;font-weight:400;">浙江超晶晟锐光电有限公司
            </a>
        </div>
        <div class="navbar-collapse collapse" >

            <ul class="nav navbar-nav">
                <li>
                    <a class="glyphicon glyphicon-home active" href="/sheng/index/index"></a>
                </li>
                <li>
                    <a  href="/sheng/information/aboutUs">关于我们</a>
                </li>
                <li>
                    <a  href="/sheng/information/information">动态资讯</a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=
                            "dropdown"  href="/sheng/Information/production">产品和解决方案<i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="/sheng/Information/production" style="color: #337ab7" >高性能外延材料与器件</a>
                        </li>
                        <li>
                            <a href="/sheng/Information/production#stage" style="color: #337ab7">专用设备服务</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="/sheng/Information/recruitment">招贤纳士</a>
                </li>
                <li>

                    <a href="/sheng/Contact/contact">联系我们</a>
                </li>
           </ul>
        </div>
        </div>
    </div>
</header>
<!--header end-->

<!-- Sequence Modern Slider -->
<div id="myCarousel" class="carousel slide" data-ride="carousel"  data-interval="3000">
    <!-- 轮播（Carousel）指标 -->
    
    <!-- 轮播（Carousel）项目 -->
    <div class="carousel-inner">

        <div class="item active">
            <img src="<?php echo ($picture['picture']); ?>" style="width: 100%;" alt="First slide">
        </div>
        <?php if(is_array($image)): $i = 0; $__LIST__ = $image;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$one): $mod = ($i % 2 );++$i;?><div class="item">
                <img src="<?php echo ($one["picture"]); ?>" style="width: 100%;" >
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</div>
<div class="container" id="aboutus">
    <div class="index-box-about">
        <div class="box-title">
            <h2>关于<strong>我们</strong></h2>
            <span class="box-title-line"></span>
            <p class="wow fadeIn" data-wow-duration="2s" data-wow-delay=".3s"><?php echo ($aboutus['content']); ?>
            </p>
        </div>
    </div>
</div>

<div class="container">
    <div class="index-box-about">
        <div class="box-title">
            <h2>动态<strong>资讯</strong></h2>
            <span class="box-title-line"></span>
        </div>
    </div>
        <div class="item-left wow fadeInLeft ">
            <div class="news-first-box ">
                <img src="<?php echo ($news_box1['information_images_path']); ?>" alt="相关新闻" style="width: 480px;height: 270px;">
                <div class="news-first-time">
                    <span><?php echo (date(d,strtotime($news_box1["save_time"]))); ?></span>
                    <p><?php echo (date(Y,strtotime($news_box1["save_time"]))); ?>/<?php echo (date(m,strtotime($news_box1["save_time"]))); ?></p>
                </div>
                <div class="news-first-text">
                    <a href="<?php echo U('/sheng/Information/informationDetail');?>?type=1&id=<?php echo ($news_box1['id']); ?>" ><h4 style="width:470px;text-overflow:ellipsis; white-space:nowrap; overflow:hidden; "><?php echo ($news_box1["title"]); ?></h4></a>
                </div>
            </div>
            <a href="<?php echo U('/sheng/Information/informationDetail');?>?type=1&id=<?php echo ($news_box1['id']); ?>" ><h4 style="width:480px;text-overflow:ellipsis; white-space:nowrap; overflow:hidden; "><?php echo ($news_box1["title"]); ?></h4></a>
            <div class="boxhidden">
                <p style="font-size: 15px;max-height: 42.5px;"><?php echo ($news_box1["content"]); ?></p>
            </div>
        </div>
        <div class="item-right">
            <section class="tab wow fadeInRight">
                <ul class="news-other-box">
                    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="row animate-box" data-animate-effect="fadeInRight">
                        <div class="col-lg-2 col-xs-2" id="news-other-time">
                            <span><strong><?php echo (date(d,strtotime($vo["save_time"]))); ?></strong><?php echo (date(Y,strtotime($vo["save_time"]))); ?>-<?php echo (date(m,strtotime($vo["save_time"]))); ?></span>
                        </div>
                        <div class="col-lg-10 col-xs-10">
                            <a href="<?php echo U('/sheng/Information/informationDetail');?>?type=1&id=<?php echo ($vo['id']); ?>">
                                <h4><?php echo ($vo["title"]); ?></h4></a>
                            <p><?php $vo['content'] = strip_tags($vo['content']); echo ($vo["content"]); ?></p>
                        </div>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
                <div style="float: right"><a href="/sheng/Information/information">more>></a></div>
            <!--<div class="news-other-box">
                <span class="col-sm-3"><span class="label label-primary" style=" font-size: 20px;" > 动态资讯</span></span>
                <a href="/sheng/Information/information"><span style="font-size: 14px;">More>></span></a>
                <div>
                    <table class="table" style="table-layout:fixed">
                        <thead>
                        <tr>
                            <th width="75%"></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            <td style="overflow:hidden;white-space:nowrap;text-overflow:ellipsis;">
                                <a href="<?php echo U('/sheng/Information/informationDetail');?>?type=1&id=<?php echo ($vo['id']); ?>"><span style="font-size: 15px;"><?php echo ($vo["title"]); ?></span></a>
                            </td>
                            <td style="font-size: 15px;"><?php echo (date(Y年m月d日,strtotime($vo["save_time"]))); ?></td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>-->
            </section>
        </div>
</div>

<!--container end-->
<div class="container" ><div class="hr"><span class="hr-inner"></span></div></div>
<!--footer start-->
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="address wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
        <h1 style="padding-left: 18px">
             联系 信息</h1>
        <address>
          <div class="col-md-8 col-sm-8 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">
            <p><i class="fa fa-home pr-10"></i>地址: <?php echo ($rs["address"]); ?></p></div>
          <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">
            <p><i class="fa fa-mobile pr-10"></i>联系电话 : <?php echo ($rs["telephone"]); ?> </p></div>
        </address>
      </div>
    </div>
  </div>
  <div style="padding-bottom: 20px"></div>
  <!--small footer start -->
  <div class="footer-small">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright"> <p>Copyright © 2013-2018 BUPT All Rights Reserved. 备案号：闽ICP备15012807号-1</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--small footer end-->
</footer>
<!-- footer end -->
<!-- js placed at the end of the document so the pages load faster
<script src="js/jquery.js">
</script>
-->
<script type="text/javascript" src="http://webapi.amap.com/maps?v=1.4.5&key=6cdce0833c160c7358e0700085a42ec5"></script>
<script type="text/javascript" src="/Public/static/js/jquery.parallax-1.1.3.js">
</script>
<script src="/Public/static/js/jquery-1.8.3.min.js">
</script>
<script src="/Public/static/js/bootstrap.min.js">
</script>
<script type="text/javascript" src="/Public/static/js/hover-dropdown.js">
</script>
<script defer src="/Public/static/js/jquery.flexslider.js">
</script>
<script type="text/javascript" src="/Publicassets/bxslider/jquery.bxslider.js">
</script>

<script src="/Public/static/js/wow.min.js">
</script>
<script src="/Public/static/assets/owlcarousel/owl.carousel.js">
</script>

<script src="/Public/static/js/jquery.easing.min.js">
</script>
<script src="/Public/static/js/link-hover.js">
</script>
<script src="/Public/static/js/superfish.js">
</script>
<script type="text/javascript" src="/Public/static/js/parallax-slider/jquery.cslider.js">
</script>


<!--common script for all pages-->
<script src="js/common-scripts.js">
</script>
<script type="text/javascript">
    //footer位置设置
  $(function(){
        function footerPosition(){
            $("footer").removeClass("fixed-footer");
            var contentHeight = document.body.scrollHeight,//网页正文全文高度
                winHeight = window.innerHeight;//可视窗口高度，不包括浏览器顶部工具栏
            if(!(contentHeight > winHeight)){
                //当网页正文高度小于可视窗口高度时，为footer添加类fixed-footer
                $("footer").addClass("fixed-footer");
                $(".content").height(winHeight);
            } else {
                $("footer").removeClass("fixed-footer");
            }
        }
        footerPosition();
        $(window).resize(footerPosition);
    });
    //地图初始化时，在地图上添加一个marker标记,鼠标点击marker可弹出自定义的信息窗体
    var map = new AMap.Map("gaodemap", {
        resizeEnable: true,
        center: [121.396683,30.004808],
        zoom: 15
    });
    addMarker();
    //添加marker标记
    function addMarker() {
        map.clearMap();
        var marker = new AMap.Marker({
            map: map,
            position: [121.396683,30.004808]
        });
        //鼠标点击marker弹出自定义的信息窗体
        AMap.event.addListener(marker, 'click', function() {
            infoWindow.open(map, marker.getPosition());
        });
    }
    //构建信息窗体中显示的内容
    var info = [];
    info.push("<div style=\"padding:0px 0px 0px 4px;\"><b style='color: #002d53;font-size: 20px;'>浙江超晶晟锐光电有限公司</b>");
    info.push("<strong style='font-size: 16px;'>电话 :</strong> \n" + "<b style='font-size: 16px;'>0574-62829926</b> ");
    info.push("<div style='font-size: 16px;'><strong>地址 :</strong>浙江省余姚市三七市镇二六市村云山中路28号千人计划产业园3号楼 </div></div>");
    infoWindow = new AMap.InfoWindow({
        content: info.join("<br/>")  //使用默认信息窗体框样式，显示信息内容
    });
    infoWindow.open(map, map.getCenter());
    //关闭信息窗体
    function closeInfoWindow() {
        map.clearInfoWindow();
    }

</script>


<script>
    $('a.info').tooltip();

    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider) {
                $('body').removeClass('loading');
            }
        });
    });

    $(document).ready(function() {

        $("#owl-demo").owlCarousel({

            items : 4

        });

    });

    jQuery(document).ready(function(){
        jQuery('ul.superfish').superfish();
    });

    new WOW().init();


</script>
<script type="text/javascript" src="http://webapi.amap.com/demos/js/liteToolbar.js"></script>
</body>
</html>