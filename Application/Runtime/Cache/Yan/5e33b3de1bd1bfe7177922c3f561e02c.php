<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>诺迪克光电产业研究院</title>
    <link rel="stylesheet" href="/Public/yanjiu/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Public/yanjiu/css/font-awesome.min.css">
    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="/Public/yanjiu/css/bootstrap-theme.css" media="screen">
    <link rel="stylesheet" href="/Public/yanjiu/css/style.css">
    <link rel="stylesheet" href="/Public/yanjiu/css/yanjiu.css">
    <!--技术服务弹出框-->
    <link rel="stylesheet" href="/Public/yanjiu/css/lightbox.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="/Public/yanjiu/js/html5shiv.js"></script>
    <script src="/Public/yanjiu/js/respond.min.js"></script>

    <![endif]-->
    <link rel="stylesheet" href="/Public/static/css/animate.css">
    <!-- 地图 -->

    <link rel="stylesheet" href="http://cache.amap.com/lbs/static/main1119.css"/>
    <script src="http://cache.amap.com/lbs/static/es5.min.js"></script>
    <style type="text/css">
        .container{
            width: 1200px;!important;
        }
    </style>
</head>
<body>
<!-- Fixed navbar -->

<div class="navbar navbar-inverse ">
    <div class="container">
        <div class="navbar-header">
            <!-- Button for smallest screens -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            <a class="navbar-brand" href="#">诺迪克光电产业研究院
                <!--<img src="/Public/yanjiu/images/logo.png" alt="Techro HTML5 template">-->
            </a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav pull-right">
                <li class="active"><a  href="/yan/index/index" >首页</a></li>
                <li><a href="/yan/information/aboutUs">关于我们</a></li>
                <li><a href="/yan/information/information" >动态资讯</a></li>
                <li><a href="/yan/information/production" >技术服务</a></li>
                <li><a href="/yan/information/recruitment" >招贤纳士</a></li>
                <li><a href="/yan/contact/contact">联系我们</a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>
<!-- /.navbar -->
<!-- Sequence Modern Slider -->

<div id="myCarousel" class="carousel slide" data-ride="carousel"  data-interval="3000">
    <!-- 轮播（Carousel）指标 -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <?php for ($i = 1 ; $i<$num ; $i++){ ?>
        <li data-target="#myCarousel" data-slide-to="<?php echo ($i); ?>"></li>
        <?php } ?>
    </ol>
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


<div class="container" >
    <div class="index-box-about" id="guanyu">
        <div class="box-title">
            <span class="box-title-line"></span>
            <h4>About us</h4>
            <h2>关于<strong>我们</strong></h2>
            <div class="fadeIn"><?php echo ($aboutus['content']); ?></div>
        </div>
    </div>

</div>

<!--动态资讯-->
<div class="container" id="zixun">
    <div class="index-box-about">
        <div class="box-title">
            <span class="box-title-line"></span>
            <h4>news</h4>
            <h2>动态<strong>资讯</strong></h2>
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
                <a href="<?php echo U('/yan/Information/informationDetail');?>?type=1&id=<?php echo ($news_box1['id']); ?>" ><h4 style="width:470px;text-overflow:ellipsis; white-space:nowrap; overflow:hidden; "><?php echo ($news_box1["title"]); ?></h4></a>
            </div>
        </div>
        <a href="<?php echo U('/yan/Information/informationDetail');?>?type=1&id=<?php echo ($news_box1['id']); ?>" ><h4 style="width:480px;text-overflow:ellipsis; white-space:nowrap; overflow:hidden; "><?php echo ($news_box1["title"]); ?></h4></a>
        <div class="boxhidden">
            <p style="font-size: 15px;max-height: 42.5px;"><?php echo ($news_box1["content"]); ?></p>
        </div>
    </div>
    <div class="item-right">
        <section class="tab wow fadeInRight">
            <div class="news-other-box">
                <span class="col-sm-3"><span class="label label-primary" style=" font-size: 20px;" > 动态资讯</span></span>
                <a href="/yan/Information/information"><span style="font-size: 14px;">More>></span></a>
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
                                    <a href="<?php echo U('/yan/Information/informationDetail');?>?type=1&id=<?php echo ($vo['id']); ?>"><span style="font-size: 15px;"><?php echo ($vo["title"]); ?></span></a>
                                </td>
                                <td style="font-size: 15px;"><?php echo (date(Y年m月d日,strtotime($vo["save_time"]))); ?></td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</div>

<div class="container"  style="padding-top: 30px;"></div>
<!--footer start-->
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="address wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
        <h1 style="padding-left: 18px">
             联系 信息</h1>
        <address>
          <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">
            <p><i class="fa fa-home pr-10"></i>地址: <?php echo ($rs["address"]); ?></p></div>
          <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">
            <p><i class="fa fa-mobile pr-10"></i>联系电话 : <?php echo ($rs["telephone"]); ?></p></div>

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
        <div class="col-md-4 col-xs-">
          <div class="copyright"> <p>友情链接：<a href="/home/index/index" target="_blank" style="color: #fff;">超晶科技</a></p>
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

<script src="/Public/static/js/jquery-1.8.3.min.js">
</script>
<script src="/Public/static/js/bootstrap.min.js">
</script>
<script src="/Public/static/js/wow.min.js">
</script>
<script src="/Public/static/assets/owlcarousel/owl.carousel.js">
</script>

<script src="/Public/static/js/link-hover.js">
</script>
<script src="/Public/yanjiu/js/lightbox-plus-jquery.min.js">
</script>
<script src="/Public/yanjiu/js/easyResponsiveTabs.js">
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true   // 100% fit in a container
        });
    });
</script>
<!--//script for portfolio-->
<script src="/Public/static/js/jquery.easing.min.js">
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
                $("footer").removeClass("fixed-footer1");

            }
        }
        footerPosition();
        $(window).resize(footerPosition);
    });
    //地图初始化时，在地图上添加一个marker标记,鼠标点击marker可弹出自定义的信息窗体
    var map = new AMap.Map("gaodemap", {
        resizeEnable: true,
        center: [121.183118,30.0707],
        zoom: 15
    });
    addMarker();
    //添加marker标记
    function addMarker() {
        map.clearMap();
        var marker = new AMap.Marker({
            map: map,
            position: [121.183118,30.0707],
        });
        //鼠标点击marker弹出自定义的信息窗体
        AMap.event.addListener(marker, 'click', function() {
            infoWindow.open(map, marker.getPosition());
        });
    }
    //构建信息窗体中显示的内容
    var info = [];
    info.push("<div style=\"padding:0px 0px 0px 4px;\"><b style='color: #002d53;font-size: 20px;'>诺迪克光电产业研究院</b>");
    info.push("<strong style='font-size: 16px;'>电话 :</strong> \n" + "<b style='font-size: 15px;'>0574-62829926</b> ");
    info.push("<div style='font-size: 15px;'><strong>地址 :</strong>浙江省宁波市余姚市经济开发区科创中心大厦17层</div></div>");
    infoWindow = new AMap.InfoWindow({
        content: info.join("<br/>"),  //使用默认信息窗体框样式，显示信息内容
        size:new AMap.Size(350,150)
    });
    infoWindow.open(map, map.getCenter());
    //关闭信息窗体
    function closeInfoWindow() {
        map.clearInfoWindow();
    }

</script>


<script>

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