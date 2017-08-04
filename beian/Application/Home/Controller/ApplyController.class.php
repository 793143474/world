<?php
namespace Home\Controller;
use Think\Controller;
class ApplyController extends Controller {
    public function apply(){
        if(IS_POST){
            $data=I('request.');
            $file=$_FILES['myFile'];

            $artist=D('artists');
            $result=$artist->addArtists($data,$file);
            if($result==3){
               // echo "<script>alert('用户名不能为空！');location.href='../apply/apply.html'</script>";
               $this->redirect('Fail/fail2', array( '用户名不能为空'), 0, '页面跳转中...');
            }
            if($result==4){
                $this->redirect('Fail/fail2', array( '手机号不能为空'), 0, '页面跳转中...');
            }
            if($result==5){
                $this->redirect('Fail/fail2', array( '邮箱不能为空'), 0, '页面跳转中...');
            }
            if($result==0){
                $this->redirect('Fail/fail2', array('已经注册'), 0, '页面跳转中...');
            }
            if($result==1){
                $this->redirect('Fail/fail2', array('邮箱格式不正确'), 0, '页面跳转中...');
            }
            if($result==2){
                $this->redirect('Fail/fail2', array('手机号码有误'), 0, '页面跳转中...');
               // echo '手机号码格式不对';
               //  $this->display();
            }else{
                $this->redirect('Success/success', array(), 0, '页面跳转中...');
            }
          //  $this->display();
        }
       // $data=suoluetu();
       // dump($data);
        $this->display();
    }
}