<?php
namespace Admin\Controller;
use Think\Controller;
class ReportController extends Controller{
    public function report(){
        $page = I("p",'int');
        $pagesize = 10;
        if($page<=0) $page = 1;
        $offset = ( $page-1 ) * $pagesize;
        $result=D('report_query')->limit("{$offset},{$pagesize}")->select();
        $count = D("report_query")->count();//!!!!!!!!!!!!!!
        $Page       = new \Think\Page($count,$pagesize);
        $Page->setConfig('theme',"<ul class='pagination'></li><li>%FIRST%</li><li>%UP_PAGE%</li><li>%LINK_PAGE%</li><li>%DOWN_PAGE%</li><li>%END%</li><li><a> %HEADER%  %NOW_PAGE%/%TOTAL_PAGE% 页</a></ul>");
        $pagination       = $Page->show();// 分页显示输出*
        $data = array(
            'list'=>$result,
            'pagination'=>$pagination,
        );
        $this->assign($data);
        $this->display();
    }
    public function addReport(){
        $id = I('id','0');
        $one = D('report_query')->where('id = {$id}')->find();
        $data = array(
            'id'=>$id,
            'one'=>$one
        );
        $this->assign($data);
        $this->display();
    }
}