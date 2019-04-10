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
<!--breadcrumbs start-->
<div class="breadcrumbs" style="margin-top: 0px;padding-top: 30px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-8">
                <ol class="breadcrumb pull-left">
                    <li>
                        <i class="glyphicon glyphicon-home"></i><a href="/yan/Index/index">
                        主页
                    </a>
                    </li>

                    <li class="active">
                        关于我们
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs end-->
<div class="container" >
    <div class="index-box-about" id="guanyu">
        <div class="box-title">
            <span class="box-title-line"></span>
            <h4>About us</h4>
            <h2>关于<strong>我们</strong></h2>
            <div class="fadeIn"><?php echo ($aboutus['content']); ?></div>
        </div>
    </div>
    <div class="index-box-about">
        <div class="box-title">
            <span class="box-title-line"></span>
            <h4>Expert team</h4>
            <h2>研究院<strong>专家团队</strong></h2>
        </div>
    </div>

    <div class="media">
        <hr/>
        <?php if(is_array($experts)): $i = 0; $__LIST__ = $experts;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$exp): $mod = ($i % 2 );++$i;?><div class="media-left media-middle" style="width: 30%">
                <a href="#">
                    <img  src="<?php echo ($exp['thumb_path']); ?>" alt="..." >
                </a>
            </div>
            <div class="media-body wow fadeInDown delay-06s">
                <h3 class="media-heading" ><?php echo ($exp['name']); ?></h3>
                <hr  style="border:1px #002d53 solid;"/>
                <?php echo ($exp['content']); ?>
            </div>
            <hr/><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>

</div>
<div class="index-box-about">
    <div class="box-title">
        <span class="box-title-line"></span>
        <h4>Certificate</h4>
        <h2>资质<strong>证书</strong></h2>
    </div>
</div>
<div class="row property " style="vertical-align: middle">
    <div class="father">
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$xin): $mod = ($i % 2 );++$i;?><div class="son">
                <img src="<?php echo ($xin["pic_path"]); ?>" class="img-responsive img-rounded" alt="Responsive image" style="width:269px;height: 185px;padding-bottom: 20px">
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <div class="clearfix"></div>
    <div class="father">
        <?php if(is_array($list1)): $i = 0; $__LIST__ = $list1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$zi): $mod = ($i % 2 );++$i;?><div class="son">
                <center><img src="<?php echo ($zi["pic_path"]); ?>" class="img-responsive img-rounded" alt="Responsive image" style="width:256px;height: 382px;padding-bottom: 20px"></center>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>

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