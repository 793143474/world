<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index()
    {
        session_start();
        $token = session('token');
        $name = session('name');
        if(empty($token)){
            $this->redirect('Login/login', array(), 0.1, '页面跳转中...');
        }else{
            $data=M('position')->select();
            $this->assign('data',$data);
            $this->assign('name',$name);
            //删除列表
            $m=M('position');
            $id = I('request.id');
            if($m->where(array('id' => $id))->delete()){
                $this->display();
                echo "<script>alert('删除成功！');location.href='index.html'</script>";
            }
            $this->display();
        }
    }
}