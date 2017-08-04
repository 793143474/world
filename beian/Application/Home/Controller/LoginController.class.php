<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function login()
    {
        $this->display();
    }
    public function register()
    {
        $this->display();
    }
    public function selfverify(){
        $config =    array(
            'fontSize'    =>    30,    // 验证码字体大小
            'length'      =>    4,     // 验证码位数
            'useNoise'    =>    false, // 关闭验证码杂点
        );
        $verify = new \Think\Verify($config);
        $verify->entry();
    }
    public function doregister()
    {
        if(IS_AJAX){
            $nickname=I('post.nickname','','strip_tags');
            $password=I('post.password','','strip_tags');
            $pwd=I('post.pwd','','strip_tags');
            $mobile=I('post.mobile','','strip_tags');
            $yzm = I('post.yzm','','strip_tags');
            //判断ajxa传来的值是否有
            if(empty($nickname)||empty($password)||empty($pwd)||empty($mobile)||empty($yzm)){
                $data[] = '用户名、密码、手机号码、验证码不能为空';
                echo json_encode($data);
            }else{
                if($password!=$pwd){
                    $data[] = '两次密码不一致！';
                    echo json_encode($data);
                }
                $return_yzm = check_verify(strtolower($yzm));
                if($return_yzm === false){
                    $data[] = '验证码不正确！';
                    echo json_encode($data);
                }
                if (strlen($mobile) == "11"){                                //手机号正则判断
                    if(preg_match("/^1[34578]\d{9}$/", $mobile))
                    {
                        $arr['nickname'] = $nickname;
                        $str = getuserinfo($arr);
                        if(!empty($str)){
                            $data[] = '用户名已注册，请登录';
                            echo json_encode($data);
                        }else{
                            $password = jiami($password);
                            $array[0] = $nickname;
                            $array[1] = $password;
                            $array[2] = $mobile;

                            $add = adduser($array);
                            if($add>0){
                                $data[] = '注册成功！';
                                echo json_encode($data);
                            }else{
                                $data[] = '注册失败，请重新注册！';
                                echo json_encode($data);
                            }
                        }
                    }else{
                        $data[] = '手机号码格式不正确！';
                        echo json_encode($data);
                    }
                }else{
                    $data[] = '手机号码不是十一位！';
                    echo json_encode($data);
                }
            }
        }
        else{
            $data[] = 'AJAX请求失败！';
            echo json_encode($data);
        }
    }
    //登录
    public function dologin(){
        if(IS_AJAX){
            $nickname=I('post.nickname','','strip_tags');
            $password=I('post.password','','strip_tags');
            //判断ajxa传来的值是否有
            if(empty($nickname)||empty($password)){
                $data[] = '用户名和密码不能为空';
                echo json_encode($data);
            }else{
                $password = jiami($password);
                $array['nickname'] = $nickname;
                $array['passwprd'] = $password;
                $str = getuserinfo($array);
                if(!empty($str)){
                    $round = rand(1,10000);
                    session_start();
                    session('token',$round,10);
                    session('nickname',$nickname,10);
                    $data[] = 1;
                    echo json_encode($data);
                }else{
                    $data[] = "登录失败";
                    echo json_encode($data);
                }
            }
        }
        else{
            $data[] = 'AJAX请求失败！';
            echo json_encode($data);
        }
    }
    public function tuichu()
    {
        session_start();
        session(null);
        $this->display('login');
    }
}