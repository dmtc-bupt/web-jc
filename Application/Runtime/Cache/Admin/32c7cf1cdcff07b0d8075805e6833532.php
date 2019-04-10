<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>后台首页</title>
    <link href="/Public/css/sui.css" rel="stylesheet" />
    <link rel="shortcut icon" href="/Public/static/images/favicon.ico">

    <!-- 整合boostrap-->
    <link rel="stylesheet" type="text/css" href="/Public/static/css/bootstrap-3.3.5.min.css" />
    <!-- end -->


    <link href="/Public/css/sui-append.css" rel="stylesheet" />
    <link href="/Public/css/custom.css" rel="stylesheet" />
    <!-- 删除旧的-
    <script src="/Public/script/jquery.min.js"></script>
    -->
    <!-- 新增新版 -->
    <script type="text/javascript" src="/Public/static/js/jquery-2.1.3.min.js"></script>
    <!-- end -->
    <!--<script src="/Public/script/sui.min.js"></script>
    <script src="/Public/script/require.js"></script>


<!-- 新增部分 整合boostrap-->
<link rel="stylesheet" type="text/css" href="/Public/static/css/jquery-confirm.min.css" />
<link rel="stylesheet" type="text/css" href="/Public/static/css/bootstrap-datetimepicker.css" />
<link rel="stylesheet" type="text/css" href="/Public/static/css/style-append.css" />
<script type="text/javascript" src="/Public/static/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/Public/static/js/bootstrap-transition.js"></script>
<script type="text/javascript" src="/Public/static/js/bootstrap-modal.js"></script>
<script type="text/javascript" src="/Public/static/js/jquery.placeholder.js"></script>
<script type="text/javascript" src="/Public/static/js/bootstrap-datetimepicker.min.3.0.js" charset="UTF-8"></script>
<script type="text/javascript" src="/Public/static/js/bootstrap-datetimepicker.zh-CN.js" charset="UTF-8"></script>
<script type="text/javascript" src="/Public/static/js/jquery-confirm.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="/Public/static/js/core.min.js" charset="UTF-8"></script>
    <script type="text/javascript" src="/Public/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" src="/Public/ueditor/ueditor.all.min.js"></script>
    <!-- <script type="text/javascript" src="/Public/ueditor/ueditor.config.js"></script>

     <script type="text/javascript" src="/Public/ueditor/ueditor.all.min.js"></script>

     <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->

    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->

    <script type="text/javascript" src="/Public/ueditor/lang/zh-cn/zh-cn.js"></script>
    <!--end -->
    <script type="text/javascript">
        UE.getEditor('content',{

            //content为要编辑的textarea的id
            toolbars: [
                ['anchor', //锚点
                'undo', //撤销
                'redo', //重做
                'bold', //加粗
                'indent', //首行缩进
                'italic', //斜体
                'underline', //下划线
                'strikethrough', //删除线
                'subscript', //下标
                'fontborder', //字符边框
                'superscript', //上标
                'formatmatch', //格式刷
                'blockquote', //引用
                'pasteplain', //纯文本粘贴模式
                'selectall', //全选
                'print', //打印
                'preview', //预览
                'horizontal', //分隔线
                'removeformat', //清除格式
                'time', //时间
                'date', //日期
                'unlink', //取消链接
                'insertrow', //前插入行
                'insertcol', //前插入列
                'mergeright', //右合并单元格
                'mergedown', //下合并单元格
                'deleterow', //删除行
                'deletecol', //删除列
                'splittorows', //拆分成行
                'splittocols', //拆分成列
                'splittocells', //完全拆分单元格
                'deletecaption', //删除表格标题
                'inserttitle', //插入标题
                'mergecells', //合并多个单元格
                'deletetable', //删除表格
                'cleardoc', //清空文档
                'insertparagraphbeforetable', //"表格前插入行"
                'fontfamily', //字体
                'fontsize', //字号
                'paragraph', //段落格式
                'edittable', //表格属性
                'edittd', //单元格属性
                'link', //超链接
                'emotion', //表情
                'spechars', //特殊字符
                'searchreplace', //查询替换
                'justifyleft', //居左对齐
                'justifyright', //居右对齐
                'justifycenter', //居中对齐
                'justifyjustify', //两端对齐
                'forecolor', //字体颜色
                'backcolor', //背景色
                'insertorderedlist', //有序列表
                'insertunorderedlist', //无序列表
                'fullscreen', //全屏
                'directionalityltr', //从左向右输入
                'directionalityrtl', //从右向左输入
                'rowspacingtop', //段前距
                'rowspacingbottom', //段后距
                'lineheight', //行间距
                'edittip ', //编辑提示
                     'simpleupload', //单图上传
                    'insertimage', //多图上传
                  'insertvideo', //视频
                    'imageleft', //左浮动
                    'imageright', //右浮动
                    'attachment', //附件
                    'imagecenter', //居中
                'customstyle', //自定义标题
                'autotypeset', //自动排版
                'touppercase', //字母大写
                'tolowercase', //字母小写
                'inserttable', //插入表格
                'drafts' // 从草稿箱加载
                ]
            ],
            iframeCssUrl: '/Public/ueditor/themes/iframe.css',
            initialFrameWidth: 900,   //初始化宽度

            initialFrameHeight: 500,

            autoSyncData:true,
            //初始化高度
            serverUrl :"<?php echo U('Admin/Uploader/ueditor');?>"
        });


    </script>
   <style type="text/css">

    body {
    font-size: 16px;
    font-family:"Microsoft YaHei",Arial, Helvetica, sans-serif
    }
    *,
    *:before,
    *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -ms-box-sizing: border-box;
    box-sizing: border-box;
    }

    .crop-picker-wrap {
    position: relative;
    width: 100px;
    height: 30px;
    overflow: hidden;
    }
    .crop-picker {
    width: 100%;
    height: 100%;
    line-height: 1;

    -webkit-appearance: none;
    margin: 0;
    border: none;
    border-radius: 5px;
    padding: 9px 0;
    background-color: #1ab2ff;

    color: #fff;
    cursor: pointer;
    }
    .crop-picker-file {
    position: absolute;
    top: 0;
    right: 0;
    height: 100%;
    opacity: 0;
    cursor: pointer;
    filter: alpha(opacity=0);
    }

    .crop-wrapper {
    display: inline-block;
    min-width: 750px;
    margin: 10px 0;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 0 5px 2px #ccc;
    }

    .crop-container {
    font-size: 0;
    }

    .crop-container img[src=""] {
    visibility: hidden;
    }

    .crop-area-wrapper,
    .crop-preview-wrapper {
    display: inline-block;
    vertical-align: top;
    }
    .crop-area-wrapper {
    width: 500px;
    height: 400px;
    }
    .crop-preview-wrapper {
    width: 200px;
    height: 200px;
    margin-left: 28px;
    overflow: hidden;
    }
    .crop-preview-container {
    position: relative;
    overflow: hidden;
    }
    .crop-operate {
    text-align: center;
    margin: 10px 0;
    }
    .crop-save,
    .crop-cancel {
    display: inline-block;
    vertical-align: middle;

    width: 150px;
    height: 50px;
    line-height: 50px;

    -webkit-appearance: none;
    margin: 0 5px;
    border: none;
    border-radius: 5px;
    background-color: #1ab2ff;

    color: #fff;
    cursor: pointer;
    }
    .crop-hidden {
    display: none;
    }
    </style>
</head>
<?php if(session('admin_auth')){ ?>
<body style="background: transparent;">

<?php }else{ ?>
<body>
    <div class="navigator clearfix">
        <div class="container">
            
        </div>  
    </div>
<?php } ?>
<div id="page-wrapper">
	<ol class="breadcrumb" id="bread-crumb"></ol>
<script type="text/javascript">
	var menu_active = "<?php echo ($menu_active); ?>";
	var menu_secoud_active = "<?php echo ($menu_secoud_active); ?>";
	var menu = $(window.parent.document).find("#navslide");
	menu.find("li").each(function(){
		var parent = $(this).data("parent");
		var active = $(this).data("active");
            if(parent==menu_active){
                var parentObj = $(this).parent().parent();
                
                if(active==menu_secoud_active){
                    var parentnav = parentObj.parent().find("dt").text();
                    var curnav = $(this).text();
                    var breadcrumbHtml = '<li class="glyphicon glyphicon-home">&nbsp;'+$.trim(parentnav)+'</li><li class="active">'+$.trim(curnav)+'</li>';
                    $("#bread-crumb").html(breadcrumbHtml);
                }
            }
        });
</script>
	<div id="page-inner" class="container">
			<ul id="ztree" class="ztree"></ul>
			<div class="clearfix"></div>
			<div class="search-form">
				<button type="button" class="btn btn-primary btn-sm" onclick="doAddRole()">确定保存</button>
			</div>
	</div>
</div>
<script src="/Public/static/js/jquery.ztree.core.min.js"></script>
<script type="text/javascript" src="/Public/static/js/jquery.ztree.excheck.min.js"></script>
<script type="text/javascript" src="/Public/static/js/jquery.ztree.exedit.min.js"></script>
<SCRIPT type="text/javascript">
	var zNodes =[];
	var checkedNodes = [];
	var rid = "<?php echo ($roleid); ?>";		
    function initZtree(){
		if(typeof rid=='undefined') return;
		var setting = {
			view: {
				addHoverDom: false,
		        removeHoverDom: false,
		        selectedMulti: false
		    },
		    check: {
		    	enable: true
			},
            data: {
                simpleData: {
                    enable: true
                }
            }
        };
		$.ajax({
			type:"post",
			url:"<?php echo U('/admin/auth/getNodes');?>",
			dataType:"json",
			data:{"id":rid},
			success:function(ret){
				var navs = ret.list;
				if(navs.length>0){
					for(var i in navs){
						if(navs[i].parentid==0){
							var node = {"id":navs[i].id,"pId":0,"name":navs[i].name,"open":false,"checked":navs[i].checked ? true:false};
							var childs = navs[i].childs;
							if(childs.length>0){
								node['open'] = true;
								zNodes.push(node);
								for(var j in childs){
									var child_node = {"id":childs[j].id,"pId":childs[j].parentid,"name":childs[j].name,"open":false,"checked":childs[j].checked ? true:false,"isHidden":childs[j].hidden ? true:false};
									if(child_node.checked){
										child_node['open'] = true;
									}
									zNodes.push(child_node);
									if( typeof childs[j].childs!='undefined'){
										var subchilds = childs[j].childs;
										if(subchilds.length>0){
											for(var k in subchilds){
												zNodes.push({"id":subchilds[k].id,"pId":subchilds[k].parentid,"name":subchilds[k].name,"checked":subchilds[k].checked ? true:false});
											}
										}
									}
								}
							}
							
						}
					}
					$.fn.zTree.init($("#ztree"), setting, zNodes);	        
				}
			}
		});
	}
	
	function doAddRole(){
		var moduleTree = $.fn.zTree.getZTreeObj("ztree");
		var moduleNodes = moduleTree.getCheckedNodes(true);
		for(var i=0;i<moduleNodes.length;i++){
			var node = moduleNodes[i];
			if(node.id >0){
				if(node.checked == true){
					checkedNodes.push(node.id);
				}
			}
		}
		$.ajax({
			type:"post",
			url:"<?php echo U('/admin/auth/doEditRole');?>",
			dataType:"json",
			data:{"id":rid,"nodes":checkedNodes},
			success:function(ret){

				if(ret.msg=='succ'){
					var _options = {
						"text":"修改成功",
						"flag":'success',
						"action":function(){
							window.location.reload();
						}
					};
			        doAlertDialog(_options); 
				}else{
					var _options = {"text":ret.msg,"flag":"error"};
			        doAlertDialog(_options);  
				}
			}
		});
	}
	initZtree();
	</SCRIPT>
	<footer>
		
	</footer>
</body>
</html>