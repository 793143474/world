<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {
    public function user_detail()
    {

        session_start();
        $name = session('name');
        $this->assign('name',$name);
        $this->display();
    }
    public function user_list()
    {

        $m=M('user');
        $count = $m->count();
        $p = getpage($count, 20);
        $data = $m->field(true)->order('time desc')->limit($p->firstRow, $p->listRows)->select();
        $this->assign('data', $data); // 赋值数据集
        $this->assign('page', $p->show()); // 赋值分页输出

      //  $this->assign('dat',$dat);
        //删除数据
        if($m->where(array('uid'=>I('request.uid')))->delete()){
            echo "<script>alert('删除成功！');location.href='user_list.html'</script>";
        }
        session_start();
        $name = session('name');
        $this->assign('name',$name);
        $this->display();
    }
    public function user()
    {
        $uid=I('request','','strip_tags');
        $m=M('user');
        $m->where("'uid' = '%s'",$uid)->delete();
        $this->redirect('user/user_list', array(''), 0, '页面跳转中...');
    }

}