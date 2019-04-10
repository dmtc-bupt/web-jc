<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>管理后台</title>

    <!-- 整合boostrap-->
    <link rel="stylesheet" type="text/css" href="/Public/static/css/bootstrap-3.3.5.min.css" />
    <link rel="stylesheet" type="text/css" href="/Public/static/css/style-append.css" />

    <!-- end -->
    <script type="text/javascript" src="/Public/static/js/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="/Public/static/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/Public/static/js/core.min.js" charset="UTF-8"></script>
<!--end -->
</head>
<body class="gray-body">
    <div class="pnav">
        <ul class="hnav">
            <li class="current"><a href="javascript:void(0);" class="logo"><b>CJ</b>Admin</a></li>
        </ul>
        <div class="settings">
            <i class="glyphicon glyphicon-user"><?php $admin=session('admin_auth');echo $admin['username']; ?></i>&nbsp;&nbsp;<span class="ge">&nbsp;</span>&nbsp;&nbsp;<a href="<?php echo U('/admin/account/logout');?>"><i class="glyphicon glyphicon-off"></i> 退出</a>
        </div>
    </div>
    <div class="lf" id="leftmenu"><div class="navs" id="navslide"></div></div>
<script type="text/javascript">
    $(function(){
       
        var winHeight = getWindowHeight();
        var navHeight = $(".pnav").height();//上侧功能栏类名pnav
        $("#leftmenu,#wrapper").css({"height":parseInt(winHeight-navHeight)+'px'});
        $.ajax({
            type:"post",
            data:{},
            dataType:"json",
            url:"<?php echo U('/admin/auth/menu');?>",
            success:function(ret){
                var menuHtml = "";
                if(ret.msg=='succ'){
                    var menu = ret.list;
                    if(menu.length>0){
                        for(var i in menu){
                            //左侧导航
                            if(menu[i].id==1){
                                var leftmenu = menu[i].childs;
                                break;
                            }
                        }
                    }
                    if(leftmenu.length>0){
                        for(var j in leftmenu){
                            menuHtml += createMenu(leftmenu[j]);
                        }
                    }
                }
                $("#navslide").html(menuHtml);
                $("#navslide dl").eq(0).find("dd").addClass("in").find("li").eq(0).addClass("active-menu");
            }
        });
        $(document).on("click","#navslide dl li > a",function(){
            $("#navslide li").removeClass("active-menu");
            $(this).parent().addClass("active-menu");
        });
    });
    function createMenu(menu){
        var html ='<dl class="panel">';
        html +='<dt data-toggle="collapse" data-parent="#navslide" data-target="#collapse'+menu.id+'">';
        html +=' <i class="'+menu.icon+'"></i> '+menu.name+'<span class="glyphicon glyphicon-menu-down"></span>';
        html +='</dt>';
        html +='<dd id="collapse'+menu.id+'" class="panel-collapse collapse">';
        
        if(typeof menu.childs !='undefiend'){
            html +='    <ul>';
            var childs = menu.childs;
            for(var k in childs){
                var item = childs[k];
                html +='<li data-parent="'+item.menu_active+'" data-active="'+item.menu_secoud_active+'"><a target="main-frame" href="/admin/'+item.url+'"><span class="glyphicon glyphicon-menu-right"></span> '+item['name']+' </a></li>';
            }
            html +='  </ul>';
        }
        
        html +='</dd>';
        html +='</dl>';
        return html;
    }
</script>
    <div id="wrapper" style="overflow: hidden;">
        <iframe name="main-frame" src="/admin/main/index.html" width="100%" height="100%" frameborder="0"></iframe>
    </div>
    </include>
	<footer>
		
	</footer>
</body>
</html>