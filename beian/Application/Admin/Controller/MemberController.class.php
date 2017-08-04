<?php
namespace Admin\Controller;
use Think\Controller;
class MemberController extends Controller
{

    public function member_list()
    {
        $m = M('admin');
        $data = $m->select();
        $this->assign('data', $data);
        $this->display();
        //删除列表
        $aid = I('request.aid');
        $m->where(array('aid' => $aid))->delete();

        session_start();
        $name = session('name');
        $this->assign('name',$name);
        $this->display();
    }

    public function member_detail()
    {
        if (IS_POST) {
            $data=I('request.');
            $data['time']=date("Y-m-d H:i:s");
            if (!empty($data['name']) || !empty($data['password'])) {
                $repwd = I('post.repwd');
                if ($data['password'] == $repwd) {
                    $admin = M('admin');
                    $data['password']=md5($data['password']);
                    $result = $admin->where("name='$data[name]'")->find();
                    if ($result) {
                        echo "<script>alert('账号已存在！'); history.go(-1);</script>";
                    } else {
                        $res = $admin->add($data);
                        if ($res) {
                            echo "<script>alert('注册成功！'); history.go(-1);</script>";
                        }
                    }
                } else {
                    echo "<script>alert('两次输入密码不一致！'); history.go(-1);</script>";
                }
            } else {
                echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";
            }
        }else{
            session_start();
            $name = session('name');
            $this->assign('name',$name);
            $this->display();
        }
    }

}