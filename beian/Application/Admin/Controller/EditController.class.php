<?php
namespace Admin\Controller;
use Think\Controller;
class EditController extends Controller {
    public function edit()
    {
        $m=M('goods');
        $data=$m->where(array('gid'=>I('request.gid')))->find();
        $this->assign('data',$data);
        //修改数据
        if(IS_POST){
        $data['name']=$_POST['name'];
        $data['yname']=$_POST['yname'];
        $data['bianhao']=$_POST['bianhao'];
        $data['category']=$_POST['category'];
        $data['size']=$_POST['size'];
        $data['cztime']=$_POST['cztime'];
        $data['jdtime']=$_POST['jdtime'];
        $data['tuijian']=$_POST['tuijian'];
        $data['pictures']=$_POST['pictures'];
        $data['editor']=$_POST['editor'];
        $m->where(array('gid'=>I('request.gid')))->save($data);
        $this->display();
        echo "<script>alert('修改成功！');</script>";
        echo "<script>location.href='http://localhost:/beian/index.php/Admin/product/product_list.html'</script>";
    }else{
            session_start();
            $name = session('name');
            $this->assign('name',$name);
            $this->display();
    }

//        echo "<script>alert('修改成功！'); history.go(-1);</script>";
    }
}