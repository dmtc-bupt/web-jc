<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $image=D('home_image')->where("id not in (select max(id) from home_image)")->order('id desc')->select();
        $picture=D('home_image')->where("id in (select max(id) from home_image)")->find();
        $num=D('home_image')->count();
        //主页传输内容包括：中心简介、新闻中心、质检服务、联系我们、实验室风采、页脚
        $contact=D('contact_us')->find();
        $news=D('news')->where("id in (select max(id) from news)")-> where("content != ''")->order('save_time desc')->limit(4)->select();
        $intro=D('center_introduction')->find();
        $lab=D('lab_image')->order('id desc')->select();
        $inspection=D('inspection_scope')->where("id in (select max(id) from inspection_scope)")->where("content !=''")->limit(4)->order('save_time desc')->select();
        $footer=D('footer')->find();
        $body=array(
            "image"=>$image,
            "num"=>$num,
            'picture'=>$picture,
            'contact'=>$contact,
            'intro'=>$intro,
            'news'=>$news,
            'lab_picture'=>$lab,
            'inspection'=>$inspection,
            'footer'=>$footer,
        );
//        show_bug($body);
        $this->assign($body);
        $this->display();

    }
}