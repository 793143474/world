<?php
namespace Admin\Controller;
use Think\Controller;
class AtlasController extends Controller
{
    public function atlas_list()
    {
        if(IS_POST){
            $m=M('atlas');
            $ser=I('request.ser');
            $aa=I('post.select');
            if($aa==1){
                $data=$m->where("name = '%s'",array($ser))->select();
                $this->assign('data',$data);
            }
            $this->display();
        }else{
            $m = M('atlas');
            $count = $m->count();
            $p = getpage($count, 20);
            $data = $m->field(true)->order('btime')->limit($p->firstRow, $p->listRows)->select();
            $this->assign('data', $data); // 赋值数据集
            $this->assign('page', $p->show()); // 赋值分页输出
            //删除功能
            if($m->where(array('id' => I('request.id')))->delete()){
                echo "<script>alert('删除成功！');location.href='atlas_list.html'</script>";
            }
            session_start();
            $name = session('name');
            $this->assign('name',$name);
            $this->display();
        }
    }

    public function atlas_detail()
    {
        if (IS_POST) {
            //接收页面参数
            $data = I('post.');
            $file = $_FILES['pictures'];
            //判断数据是否为空
            if ($data['name'] == null) {
                //提示信息 退出
                session('info', '标题不能为空');
                $this->display();
            } else {
                $btime = date("Y-m-d H:i:s");
                $goods = D('atlas');
                $result = $goods->addAtlas($data, $file, $btime);
                if ($result) {
                    $this->display();
                }
            }
        } else {
            session_start();
            $name = session('name');
            $this->assign('name',$name);
            $this->display();
        }
    }
}