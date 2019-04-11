<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $image=D('home_image')->order('id desc')->select();
        $num=D('home_image')->count();
        //主页传输内容包括：中心简介、新闻中心、质检服务、联系我们、实验室风采、页脚
        $contact=D('contact_us')->find();
        $news=D('news')->where("id in (select max(id) from news)")-> where("content != ''")->order('save_time desc')->limit(5)->select();
        $standard = D('standard')->order('save_time desc')->limit(4)->select();
        $lab=D('lab_image')->order('id desc')->select();
        $file =D('file_download')->order('id desc')->select();
        $footer=D('footer')->find();
        $body=array(
            "image"=>$image,
            "num"=>$num,
            'contact'=>$contact,
            'news'=>$news,
            'file'=>$file,
            'lab_picture'=>$lab,
            'standard'=>$standard,
            'footer'=>$footer,
        );
//        show_bug($body);
        $this->assign($body);
        $this->display();

    }
}