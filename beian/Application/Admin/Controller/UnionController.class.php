<?php
namespace Admin\Controller;
use Think\Controller;
class UnionController extends Controller {
    public function union(){
        if(IS_POST){
            $m=M('union');
            $ser=I('request.ser');
            $aa=I('post.select');
            if($aa==1){
                $data=$m->where("name = '%s'",array($ser))->select();
                $this->assign('data',$data);
            }elseif($aa==2){
                $data=$m->where("contacts_name = '%s'",array($ser))->select();
                $this->assign('data',$data);
            }elseif($aa==3){
                $data=$m->where("address = '%s'",array($ser))->select();
                $this->assign('data',$data);
            }
            $this->display();
        }else{
            $m=M('union');
            $data=$m->where('style=2')->select();
            $this->assign('data',$data);
            $this->display();
            //删除列表
            $id = I('request.id');
            if($m->where(array('id' => $id))->delete()){
                echo "<script>alert('删除成功！');location.href='union.html'</script>";
            }
            session_start();
            $name = session('name');
            $this->assign('name',$name);
            $this->display();
        }
    }
    public function union_one(){
        if(IS_POST){
            $m=M('union');
            $ser=I('request.ser');
            $aa=I('post.select');
            if($aa==1){
                $data=$m->where("name = '%s'",array($ser))->select();
                $this->assign('data',$data);
            }elseif($aa==2){
                $data=$m->where("contacts_name = '%s'",array($ser))->select();
                $this->assign('data',$data);
            }elseif($aa==3){
                $data=$m->where("address = '%s'",array($ser))->select();
                $this->assign('data',$data);
            }
            $this->display();
        }else{
            $m=M('union');
            $data=$m->where('style=1')->select();
            $this->assign('data',$data);
            $this->display();
            //删除列表
            $id = I('request.id');
            if($m->where(array('id' => $id))->delete()){
                echo "<script>alert('删除成功！');location.href='union.html'</script>";
            }
            session_start();
            $name = session('name');
            $this->assign('name',$name);
            $this->display();
        }
    }
    public function union_two(){
        if(IS_POST){
            $m=M('union');
            $ser=I('request.ser');
            $aa=I('post.select');
            if($aa==1){
                $data=$m->where("name = '%s'",array($ser))->select();
                $this->assign('data',$data);
            }elseif($aa==2){
                $data=$m->where("contacts_name = '%s'",array($ser))->select();
                $this->assign('data',$data);
            }elseif($aa==3){
                $data=$m->where("address = '%s'",array($ser))->select();
                $this->assign('data',$data);
            }
            $this->display();
        }else{
            $m=M('union');
            $data=$m->where('style=0')->select();
            $this->assign('data',$data);
            $this->display();
            //删除列表
            $id = I('request.id');
            if($m->where(array('id' => $id))->delete()){
                echo "<script>alert('删除成功！');location.href='union.html'</script>";
            }
            session_start();
            $name = session('name');
            $this->assign('name',$name);
            $this->display();
        }
    }
    public function union_edit(){
        $id = I('request.id');
        $m = M('union');
        $data = $m->where(array('id' => $id))->find();
        $this->assign('data', $data);
        //接受数据
        $dd=I('request.style');
        $name=I('request.name');
        M('union')->where("name = '%s'",array($name))->save(array('style'=>$dd));

        session_start();
        $name = session('name');
        $this->assign('name',$name);
        $this->display();
    }
    //批量删除
    public function bdel(){
        $message=M('union');
        $ids=I('request.id');
        $where['id']=array('in',$ids);
        if($ids){
            if($message->where($where)->delete()){
                echo "<script>alert('删除成功！');location.href='union.html'</script>";
            }else{
                echo "<script>alert('删除失败！');location.href='union.html'</script>";
            }
        }else{
            echo "<script>alert('未选中任何内容！');location.href='union.html'</script>";
        }
    }
}