<?php
/**
 * Created by PhpStorm.
 * User: Khan
 * Date: 2019/2/12
 * Time: 10:38
 */

namespace Home\Controller;
use Think\Controller;

class InformationController extends Controller
{
    public function introduction(){
        $footer=D('footer')->find();
        $intro=D('center_introduction')->find();
        $body=array(
            'intro'=>$intro,
            'footer'=>$footer,
        );
        $this->assign($body);
        $this->display();
    }
    public function structure(){
        $footer=D('footer')->find();
        $structure=D('org_structure')->find();
        $body=array(
            'structure'=>$structure,
            'footer'=>$footer,
        );
        $this->assign($body);
        $this->display();
    }
    public function certificate(){
        $footer=D('footer')->find();
        $certi=D('constitute_certificate')->find();
        $body=array(
            'certi'=>$certi,
            'footer'=>$footer,
        );
        $this->assign($body);
        $this->display();
    }
    public function news(){
        $footer=D('footer')->find();
        //通知公告分页
        $page=I("p",'int');
        if($page<=0) $page=1;
        $pagesize=4;
        $offset=($page-1)*$pagesize;
        $notice =D('news')->where('type=0')->limit("{$offset},{$pagesize}")->order('id desc')->select();
        $count=D('news')->where("type = 0")->count();
        $notice_p =  new \Think\Page($count,$pagesize);
        $notice_p->setConfig('theme',"<ul class='pagination'></li><li>%FIRST%</li><li>%UP_PAGE%</li><li>%LINK_PAGE%</li><li>%DOWN_PAGE%</li><li>%END%</li><li><a> %HEADER%  %NOW_PAGE%/%TOTAL_PAGE% 页</a></ul>");
        $pagination1= $notice_p->show();

        //行业新闻分页
        $page2=I("p2",'int');
        if($page2<=0) $page2=1;
        $pagesize2=4;
        $offset2=($page2-1)*$pagesize2;
        $industry =D('news')->where('type=1')->limit("{$offset2},{$pagesize2}")->order('id desc')->select();
        $count2=D('news')->where("type = 1")->count();
        $industry_p =  new \Think\Page($count2,$pagesize2,'','p2');
        $industry_p->setConfig('theme',"<ul class='pagination'></li><li>%FIRST%</li><li>%UP_PAGE%</li><li>%LINK_PAGE%</li><li>%DOWN_PAGE%</li><li>%END%</li><li><a> %HEADER%  %NOW_PAGE%/%TOTAL_PAGE% 页</a></ul>");
        $pagination2= $industry_p->show();

        $body=array(
            'notice'=>$notice,
            'pagination1'=>$pagination1,
            'industry'=>$industry,
            'pagination2'=>$pagination2,
            'footer'=>$footer,
        );
        $this->assign($body);
        $this->display();
    }
    public function newDetail(){
        $footer=D('footer')->find();
        $type=I("type",1);
        $id=I('id');
        $one=D('news')->where("type={$type}")->where("id = {$id}")->find();
        $body=array(
            'one'=>$one,
            'footer'=>$footer,
        );
        $this->assign($body);
        $this->display();
    }
    public function process(){
        $footer=D('footer')->find();
        $process=D('inspection_process')->find();
        $body=array(
            'process'=>$process,
            'footer'=>$footer,
        );
        $this->assign($body);
        $this->display();
    }
    public function scope(){
        $footer=D('footer')->find();
        //质检范围分页
        $page=I("p",'int');
        if($page<=0) $page=1;
        $pagesize=4;
        $offset=($page-1)*$pagesize;
        $scope =D('inspection_scope')->limit("{$offset},{$pagesize}")->order('id desc')->select();
        $count=D('inspection_scope')->count();
        $scope_p =  new \Think\Page($count,$pagesize);
        $scope_p->setConfig('theme',"<ul class='pagination'></li><li>%FIRST%</li><li>%UP_PAGE%</li><li>%LINK_PAGE%</li><li>%DOWN_PAGE%</li><li>%END%</li><li><a> %HEADER%  %NOW_PAGE%/%TOTAL_PAGE% 页</a></ul>");
        $pagination= $scope_p->show();

        $body=array(
            'scope'=>$scope,
            'pagination'=>$pagination,
            'footer'=>$footer,
        );
        $this->assign($body);
        $this->display();
    }
    public function scopeDetail(){
        $footer=D('footer')->find();
        $id=I('id');
        $one=D('inspection_scope')->where("id = {$id}")->find();
        $body=array(
            'one'=>$one,
            'footer'=>$footer,
        );
        $this->assign($body);
        $this->display();
    }

    public function file(){
        $footer=D('footer')->find();
        //资料下载分页
        $page=I("p",'int');
        if($page<=0) $page=1;
        $pagesize=4;
        $offset=($page-1)*$pagesize;
        $data =D('file_download')->where('type=0')->limit("{$offset},{$pagesize}")->order('id desc')->select();
        $count=D('file_download')->where("type = 0")->count();
        $data_p =  new \Think\Page($count,$pagesize);
        $data_p->setConfig('theme',"<ul class='pagination'></li><li>%FIRST%</li><li>%UP_PAGE%</li><li>%LINK_PAGE%</li><li>%DOWN_PAGE%</li><li>%END%</li><li><a> %HEADER%  %NOW_PAGE%/%TOTAL_PAGE% 页</a></ul>");
        $pagination1= $data_p->show();

        //标准下载分页
        $page2=I("p2",'int');
        if($page2<=0) $page2=1;
        $pagesize2=4;
        $offset2=($page2-1)*$pagesize2;
        $standard =D('file_download')->where('type=1')->limit("{$offset2},{$pagesize2}")->order('id desc')->select();
        $count2=D('file_download')->where("type = 1")->count();
        $standard_p =  new \Think\Page($count2,$pagesize2,'','p2');
        $standard_p->setConfig('theme',"<ul class='pagination'></li><li>%FIRST%</li><li>%UP_PAGE%</li><li>%LINK_PAGE%</li><li>%DOWN_PAGE%</li><li>%END%</li><li><a> %HEADER%  %NOW_PAGE%/%TOTAL_PAGE% 页</a></ul>");
        $pagination2= $standard_p->show();

        $body=array(
            'data'=>$data,
            'pagination1'=>$pagination1,
            'standard'=>$standard,
            'pagination2'=>$pagination2,
            'footer'=>$footer,
        );
        $this->assign($body);
        $this->display();
    }

    public function contact(){
        $footer=D('footer')->find();
        $contact=D('contact_us')->find();
        $body=array(
            'contact'=>$contact,
            'footer'=>$footer,
        );
        $this->assign($body);
        $this->display();
    }

}