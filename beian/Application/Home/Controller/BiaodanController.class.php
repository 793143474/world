<?php
namespace Home\Controller;
use Think\Controller;
class BiaodanController extends Controller {
    public function biaodan()
    {
        if(IS_POST){
            $data=I('request.');
            $songjian=D('songjian');
            $file = $_FILES['myFile'];
            $file1 = $_FILES['myFile1'];
            $file2 = $_FILES['myFile2'];
            $file3 = $_FILES['myFile3'];
            $file4 = $_FILES['myFile4'];
            $result=$songjian->addSongjian($data,$file,$file1,$file2,$file3,$file4);
            if($result==3){
                $this->redirect('Fail/fail', array(  '商品名不能为空'), 0, '页面跳转中...');
            }if($result==4){
                $this->redirect('Fail/fail', array(  '作者不能为空'), 0, '页面跳转中...');
            }if($result==5){
                $this->redirect('Fail/fail', array(  '拥有者不能为空'), 0, '页面跳转中...');
            }if($result==6){
                $this->redirect('Fail/fail', array(  '地址不能为空'), 0, '页面跳转中...');
            }if($result==7){
                $this->redirect('Fail/fail', array(  '图片不能为空'), 0, '页面跳转中...');
            }if($result==2){
                $this->redirect('Fail/fail', array(  '手机号有误'), 0, '页面跳转中...');
            }
            else{
                $this->redirect('Success/success', array(), 0, '页面跳转中...');
            }
        }else{
            $data= M('category')->select();
            $tree=get_sort($data);
            $this->assign('data',$tree);

            $dat= M('material')->select();
            $tre=get_sort($dat);
            $this->assign('dat',$tre);
            $this->display();
        }
    }
}