<?php
namespace Admin\Controller;
use Think\Controller;
class SampleController extends Controller{
    public function input(){
        $admin_auth = session("admin_auth");
        $collector = $admin_auth['name'];
        $data = array(
            'collector'=>$collector,
        );
        $this->assign($data);
        $this->display();
    }

    public function doAddSample(){
        $clientName = str_replace(' ','',I("clientName"));//委托单位
        $productUnit = str_replace(' ','',I("productUnit"));//生产单位
        $sampleName = I("sampleName");//样品名称
        $sampleCode = I("sampleCode");//样品编号
        $grade = I("grade");//等级
        $specification = I("specification");//规格型号
        $trademark = I("trademark");//商标
        $productionDate = I("productionDate");//生产日期
        $sampleQuantity = I("sampleQuantity");//样品数量
        $sampleStatus = I("sampleStatus");//样品状态
        $ration = I("ration");//粉（料）水比
        $testCriteria = I("testCriteria");//检测依据
        $testItem = I("testItem");//检测项目
        $testCategory = I("testCategory");//检验类别
        $ifOnline = I("ifOnline",0);//是否可查
        $postMethod = I("postMethod");//提交方式
        $ifSubpackage = I("ifSubpackage");//是否分包
        $clientSign = I("clientSign");//委托人签字
        $telephone = I("telephone");//电话
        $tax = I("tax");//传真
        $postcode = I("postcode");//邮政编码
        $email = I("email");//邮件
        $address = I("address");//地址
        $remark = I("remark");//备注
        $sampleStaQuan = I("sampleStaQuan");//样本品状态及数量
        $collector = I("collector");//收样人
        $centreNo = I("centreNo");//中心编号
        $testCost = I("testCost",0,'intval');//检验费用
        $collectDate = I("collectDate");//收样日期
        $reportDate = I("reportDate");//报告日期
//        $ifHighQuantity = I("ifHighQuantity");
        $package_remark = I("package_remark");//分包备注

        //验证手机号
        if(!empty($telephone)){
            $isMob="/^(1(([35][0-9])|(47)|[8][0126789]))\d{8}$/";  //手机
            $isTel="/^([0-9]|[-])+$/"; //电话
            //if(!(funcmtel($telephone) || funcphone($telephone))){
            if(!(preg_match($isTel,$telephone) || preg_match($isMob,$telephone))){
                $rs['msg'] = '请输入正确的联系方式';
                $this->ajaxReturn($rs);
            }
        }

        //验证传真
        if(!empty($tax)){
            $isPostcode="/^([0-9]|[-])+$/";
            if(!(preg_match($isPostcode,$tax))){
                $rs['msg'] = '请输入正确的传真';
                $this->ajaxReturn($rs);
            }
        }

        //验证邮政编码
        if(!empty($postcode)){
            $isPostcode="/^\d{6}$/";
            if(!(preg_match($isPostcode,$postcode))){
                $rs['msg'] = '请输入正确的邮政编码';
                $this->ajaxReturn($rs);
            }
        }

        //验证邮箱
        if(!empty($email)){
            $isEmail="/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/";
            if(!(preg_match($isEmail,$email))){
                $rs['msg'] = '请输入正确的邮箱';
                $this->ajaxReturn($rs);
            }
        }

        if(empty($clientName)) {
            $rs['msg'] = '委托单位不能为空!';
            $this->ajaxReturn($rs);
        }
        if(empty($productUnit)) {
            $rs['msg'] = '生产单位不能为空!';
            $this->ajaxReturn($rs);
        }
        if(empty($sampleName)) {
            $rs['msg'] = '样品名称不能为空!';
            $this->ajaxReturn($rs);
        }
        if(empty($testCriteria)) {
            $rs['msg'] = '检验依据不能为空!';
            $this->ajaxReturn($rs);
        }
        if(empty($testItem)) {
            $rs['msg'] = '检验项目不能为空!';
            $this->ajaxReturn($rs);
        }
        if(empty($sampleQuantity)) {
            $rs['msg'] = '样品数量不能为空!';
            $this->ajaxReturn($rs);
        }
        if(empty($sampleStatus)) {
            $rs['msg'] = '样品状态不能为空!';
            $this->ajaxReturn($rs);
        }
//        if(empty($sampleStaQuan)) {
//            $rs['msg'] = '样品状态及数量不能为空!';
//            $this->ajaxReturn($rs);
//        }
//        if(empty($collector)) {
//            $rs['msg'] = '收样人不能为空!';
//            $this->ajaxReturn($rs);
//        }
//        if(empty($testCost)) {
//            $rs['msg'] = '检验费用不能为空!';
//            $this->ajaxReturn($rs);
//        }
//        if(empty($collectDate)) {
//            $rs['msg'] = '收样日期不能为空!';
//            $this->ajaxReturn($rs);
//        }
//        if(empty($reportDate)) {
//            $rs['msg'] = '报告日期不能为空!';
//            $this->ajaxReturn($rs);
//        }

        if(empty($productionDate)){
            $productionDate=null;
        }

        $data_sample = array(
            'clientName'=>$clientName,
        'productUnit'=>$productUnit,
        'sampleName'=>$sampleName,
        'sampleCode '=>$sampleCode ,
        'grade'=>$grade ,
        'specification '=>$specification ,
        'trademark'=>$trademark ,
        'productionDate'=>$productionDate,
        'sampleQuantity'=>$sampleQuantity,
        'sampleStatus'=>$sampleStatus,
        ' ration'=>$ration,
        'testCriteria'=>$testCriteria,
        'testItem'=>$testItem,
        'testCategory'=>$testCategory,
        'ifOnline'=>$ifOnline,
        'postMethod'=>$postMethod,
        'ifSubpackage'=>$ifSubpackage,
        'clientSign'=>$clientSign,
        'telephone'=>$telephone,
        'tax'=>$tax,
        'postcode'=>$postcode,
        'email'=>$email,
        'address'=>$address,
        'remark'=>$remark,
        'sampleStaQuan'=>$sampleStaQuan,
        'collector'=>$collector,
        'centreNo'=>$centreNo,
        'testCost'=>$testCost,
        'collectDate'=>$collectDate,
        'reportDate'=>$reportDate,
        'package_remark'=>$package_remark,
        'status'=> 1,
        );
        $save = D("sampling_form")->data($data_sample)->add();
        if($save){
            $rs['msg'] = 'succ';
            $this->ajaxReturn($rs);
        }else{
            $rs['msg'] = '保存失败';
            $this->ajaxReturn($rs);
        }
    }

}