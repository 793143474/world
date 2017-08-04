<?php
namespace Home\Controller;
use Think\Controller;
class UnionController extends Controller {
    public function union()
    {
        if(IS_POST){
            $file=$_FILES['picture'];
            $data=I('request.');
            $union=D('union');
            $result=$union->addUnion($data,$file);
            if($result==0){
                $this->redirect('Fail/fail1', array(  '已经注册'), 0, '页面跳转中...');
            }
            if($result==1){
                $this->redirect('Fail/fail1', array(  '邮箱格式不正确'), 0, '页面跳转中...');
            }
            if($result==2){
                $this->redirect('Fail/fail1', array(  '手机号格式不正确'), 0, '页面跳转中...');
            }
            if($result==3){
                $this->redirect('Fail/fail1', array(  '画廊名称不能为空'), 0, '页面跳转中...');
            }
            if($result==4){
                $this->redirect('Fail/fail1', array(  '联系人不能为空'), 0, '页面跳转中...');
            }
            if($result==5){
                $this->redirect('Fail/fail1', array(  '联系电话不能为空'), 0, '页面跳转中...');
            }
            else {
                $this->redirect('Success/success', array(), 0, '页面跳转中...');
            }
        }else{
            $m=M('union');
            $where['style']=1;
            $data=$m->where($where)->select();
            $this->assign('data',$data);
            $wh['tuijian']='on';
            $da=M('goods')->where($wh)->order('btime desc')->select();
            $this->assign('da',$da);

            session_start();
            $nickname = session('nickname');
            $this->assign('nickname',$nickname);



            $this->display();
        }
    }
}