<?php
namespace Home\Controller;
use Think\Controller;
class MechanismController extends Controller {
    public function mechanism(){
        if(IS_POST){
            $data=I('request.');
            $files=$_FILES['myFile'];
            $file=$_FILES['Twophoto'];
                  /*    $image = new \Think\Image();
                      // 在图片左上角添加水印（水印文件位于./logo.png） 并保存为water.jpg
                      $dd=  $image->open('F:/1.jpg')->thumb(150,150)->save("F:/2222.jpg");
                      //$tt=$image->open($files)->thumb(150,150)->save("water1.jpg");
                         dump($dd);die;*/
            $mechanism=D('mechanism');
            $result= $mechanism->addMechanism($data,$files,$file);
            if($result==0){
                $this->redirect('Fail/fail3', array('已经注册'), 0, '页面跳转中...');
            }
            if($result==1){
                $this->redirect('Fail/fail3', array( '邮箱格式不正确'), 0, '页面跳转中...');
            }
            if($result==2){
                $this->redirect('Fail/fail3', array( '手机号码格式不对'), 0, '页面跳转中...');
            }
            if($result==3){
                $this->redirect('Fail/fail3', array( '机构名不能为空'), 0, '页面跳转中...');
            }
            if($result==4){
                $this->redirect('Fail/fail3', array( '手机号不能为空'), 0, '页面跳转中...');
            }
            if($result==5){
                $this->redirect('Fail/fail3', array( '邮箱不能为空'), 0, '页面跳转中...');
            }

            else{
                $this->redirect('Success/success', array(), 0, '页面跳转中...');
            }
        }else{
            $this->display();
        }

    }
}