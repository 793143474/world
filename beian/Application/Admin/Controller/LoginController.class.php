<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function login()
    {
        $this->display();
    }
    //生产验证码
    public function verify_c(){
        $Verify = new \Think\Verify();
        $Verify->fontSize = 18;               // 验证码字体大小
        $Verify->length   = 4;                // 验证码位数
        $Verify->useNoise = false;           // 关闭验证码杂点
        $Verify->codeSet = '0123456789';      //验证码字符集合
        $Verify->imageW = 130;                //验证码宽度
        $Verify->imageH = 50;                 //验证码高度
        //$Verify->expire = 600;              //验证码的有效期（秒）
        $Verify->entry();
    }
    //异步验证用户名是否存在
    public function checkAccount(){
        if(M('admin')->where(array('account'=>I('post.account')))->count()!=0){
            echo 'false';
        } else {
            echo 'true';
        }
    }
    //后台管理注册管理员
    public function register()
    {
        if(IS_AJAX){
            $name=I('post.name','','strip_tags');
            $password=I('post.password','','strip_tags');
            //判断ajxa传来的值是否有
            if(empty($name)||empty($password)){
                $data[] = '用户名和密码不能为空';
                echo json_encode($data);
            }else{
                $arr['name'] = $name;
                $str = getadmininfo($arr);
                if(!empty($str)){
                    $data[] = '用户名已注册，请登录';
                    echo json_encode($data);
                }else{
                    $password = jiami($password);
                    $array[0] = $name;
                    $array[1] = $password;
                    $add = addadmin($array);
                    if($add>0){
                        $data[] = '注册成功！';
                        echo json_encode($data);
                    }else{
                        $data[] = '注册失败，请重新注册！';
                        echo json_encode($data);
                    }
                }
            }
        }else{
            $data[] = 'AJAX请求失败！';
            echo json_encode($data);
        }
    }
    //管理员登录
    public function dologin(){
        if(IS_AJAX){
            $name=I('post.name','','strip_tags');
            $password=I('post.password','','strip_tags');
            //判断ajxa传来的值是否有
            if(empty($name)||empty($password)){
                $data[] = '用户名和密码不能为空';
                echo json_encode($data);
            }else{
                $password = jiami($password);
                $array['name'] = $name;
                $array['passwprd'] = $password;
                $str = getadmininfo($array);
                if(!empty($str)){
                    $round = rand(1,10000);
                    session_start();
                    session('token',$round,10);
                    session('name',$name,10);
                    $data[] = 1;
                    echo json_encode($data);
                }else{
                    $data[] = "登录失败";
                    echo json_encode($data);
                }
            }
        }else{
            $data[] = 'AJAX请求失败！';
            echo json_encode($data);
        }
    }
}