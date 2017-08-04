<?php
namespace Admin\Controller;
use Think\Controller;
class ZuzhiController extends Controller {
    public function zuzhi()
    {
        if(IS_POST){
            $select=I('request.select','','strip_tags');
            $j_j=I('request.j_j','','strip_tags');
            if($select==1){
                $wh['mechanism_name']=$j_j;
                $data=M('mechanism')->where($wh,array('style'=>2))->select();
                $this->assign('data', $data);
            }
            if($select==2){
                $wh['mechanism_cate']=$j_j;
                $data=M('mechanism')->where($wh,array('style'=>2))->select();
                $this->assign('data', $data);
            }
            if($select==3){
                $wh['mechanism_contacts']=$j_j;
                $data=M('mechanism')->where($wh,array('style'=>2))->select();
                $this->assign('data', $data);
            }
            $this->display();
        }else{
            $m=M('mechanism');
            $count = $m
                ->where(array('style'=>2))
                ->field(true)->order('time')
                ->count();
            $p = getpage($count, 20);
            $data = $m
                ->where(array('style'=>2))
                ->field(true)->order('time')->limit($p->firstRow, $p->listRows)->select();
            $this->assign('data', $data); // 赋值数据集
            $this->assign('page', $p->show()); // 赋值分页输出

            /*  $data=$m->select();
              $this->assign('data',$data);*/
            $this->display();
            //删除列表
            $id = I('request.id');
            if($m->where(array('id' => $id))->delete()){
                echo "<script>alert('删除成功！');location.href='zuzhi.html'</script>";
            }


            session_start();
            $name = session('name');
            $this->assign('name',$name);
            $this->display();

        }

    }
    public function zuzhi_edit(){
        if(IS_POST){
            $m = M('mechanism');
            $id = I('request.id','','strip_tags');
            $dd=I('request.style');
           // $zname=I('request.name');
            $m->where("id = '%d'",array($id))->save(array('style'=>$dd));
            $this->redirect('zuzhi/zuzhi', array(''), 0, '页面跳转中...');
        }else{
            $m = M('mechanism');
            $id = I('request.id','','strip_tags');
            $data = $m->where(array('id' => $id))->find();
            $this->assign('data', $data);
            session_start();
            $name = session('name');
            $this->assign('name',$name);
            $this->display();
        }
    }
    public function zuzhi_one()
    {
        if(IS_POST){
            $select=I('request.select','','strip_tags');
            $j_j=I('request.j_j','','strip_tags');
            if($select==1){
                $wh['mechanism_name']=$j_j;
                $data=M('mechanism')->where($wh,array('style'=>1))->select();
                $this->assign('data', $data);
            }
            if($select==2){
                $wh['mechanism_cate']=$j_j;
                $data=M('mechanism')->where($wh,array('style'=>1))->select();
                $this->assign('data', $data);
            }
            if($select==3){
                $wh['mechanism_contacts']=$j_j;
                $data=M('mechanism')->where($wh,array('style'=>1))->select();
                $this->assign('data', $data);
            }
            $this->display();
        }else{
            $m=M('mechanism');
            $count = $m
                ->where(array('style'=>1))
                ->field(true)->order('time')
                ->count();
            $p = getpage($count, 20);
            $data = $m
                ->where(array('style'=>1))
                ->field(true)->order('time')->limit($p->firstRow, $p->listRows)->select();
            $this->assign('data', $data); // 赋值数据集
            $this->assign('page', $p->show()); // 赋值分页输出
            //删除列表
            $id = I('request.id');
            if($m->where(array('id' => $id))->delete()){
                echo "<script>alert('删除成功！');location.href='zuzhi_one.html'</script>";
            }
            session_start();
            $name = session('name');
            $this->assign('name',$name);
            $this->display();
        }
    }
    public function zuzhi_two()
    {
        if(IS_POST){
            $select=I('request.select','','strip_tags');
            $j_j=I('request.j_j','','strip_tags');
            if($select==1){
                $wh['mechanism_name']=$j_j;
                $data=M('mechanism')->where($wh,array('style'=>0))->select();
                $this->assign('data', $data);
            }
            if($select==2){
                $wh['mechanism_cate']=$j_j;
                $data=M('mechanism')->where($wh,array('style'=>0))->select();
                $this->assign('data', $data);
            }
            if($select==3){
                $wh['mechanism_contacts']=$j_j;
                $data=M('mechanism')->where($wh,array('style'=>0))->select();
                $this->assign('data', $data);
            }
            $this->display();
        }else{
            $m=M('mechanism');
            $count = $m
                ->where(array('style'=>0))
                ->field(true)->order('time')
                ->count();
            $p = getpage($count, 20);
            $data = $m
                ->where(array('style'=>0))
                ->field(true)->order('time')->limit($p->firstRow, $p->listRows)->select();
            $this->assign('data', $data); // 赋值数据集
            $this->assign('page', $p->show()); // 赋值分页输出
            //删除列表
            $id = I('request.id');
            if($m->where(array('id' => $id))->delete()){
                echo "<script>alert('删除成功！');location.href='zuzhi_two.html'</script>";
            }
            session_start();
            $name = session('name');
            $this->assign('name',$name);

            $this->display();
        }
    }
    //批量删除
    public function bdel(){
        $message=M('mechanism');
        $ids=I('request.id');
        $where['id']=array('in',$ids);
        if($ids){
            if($message->where($where)->delete()){
                echo "<script>alert('删除成功！');location.href='zuzhi.html'</script>";
            }else{
                echo "<script>alert('删除失败！');location.href='zuzhi.html'</script>";
            }
        }else{
            echo "<script>alert('未选中任何内容！');location.href='zuzhi.html'</script>";
        }
    }
}