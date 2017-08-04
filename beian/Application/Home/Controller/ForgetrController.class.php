<?php
namespace Home\Controller;
use Think\Controller;
class ForgetrController extends Controller {
    public function Forgetr_one()
    {
        if(IS_POST){
            $nickname=I('post.nickname','','strip_tags');
            $yzm = I('post.yzm','','strip_tags');
            if(empty($nickname)||empty($yzm)){
                $data[] = '用户名、验证码不能为空';
            }else{
                $return_yzm = check_verify(strtolower($yzm));
                if($return_yzm === false){
                   echo '验证码不正确！';
                }
                $arr['nickname'] = $nickname;
                $str = getuserinfo($arr);
                if(!empty($str)){
                 //   dump($str);
                    $this->redirect('Forgetr/forgetr_two', array('uid'=>$str['uid']), 0, '页面跳转中...');

                }else{

                    echo '用户名不存在';
                }
            }
            $this->display();
        }else{
            $this->display();
        }
    }
    public function Forgetr_two()
    {
        $uid=I('get.uid');
        dump($uid);
        $this->display();
    }
    public function Forgetr_three()
    {
        $this->display();
    }
    public function Forgetr_four()
    {
        $this->display();
    }
}