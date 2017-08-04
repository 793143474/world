<?php
namespace Admin\Controller;
use Think\Controller;
class ArtistController extends Controller {
    public function artist_list()
    {
        if(IS_POST){
            $m=M('artists');
            $ser=I('request.ser');
            $aa=I('post.select');
            if($aa==1){
                $data=$m->where("yname = '%s'",array($ser))->select();
                $this->assign('data',$data);
            }elseif($aa==2){
                $data=$m->where("position = '%s'",array($ser))->select();
                $this->assign('data',$data);
            }elseif($aa==3){
                $data=$m->where("collect = '%s'",array($ser))->select();
                $this->assign('data',$data);
            }
            $this->display();
        }else{
            $m=M('artists');
            $count = $m->count();
            $p = getpage($count,20);
            $data = $m->field(true)->order('time')->limit($p->firstRow, $p->listRows)->where('style = 1')->select();
            $this->assign('data', $data); // 赋值数据集
            $this->assign('page', $p->show()); // 赋值分页输出
            $this->display();
            //删除数据
            if($m->where(array('yid'=>I('request.yid')))->delete()){
                echo "<script>alert('删除成功！');location.href='artist_list.html'</script>";
            }
            session_start();
            $name = session('name');
            $this->assign('name',$name);
            $this->display();
        }
    }
    public function artist_detail(){
        if(IS_POST){
            $data=I('request.');
            if($data['yname']==null){
                echo "<script>alert('艺术家名称不能为空！');location.href='artist_detail.html'</script>";
                $this->display();
            }
            if($data['position']==null){
                echo "<script>alert('艺术家职位不能为空！');location.href='artist_detail.html'</script>";
                $this->display();
            }
            if($data['summary']==null){
                echo "<script>alert('艺术家简介不能为空！');location.href='artist_detail.html'</script>";
                $this->display();
            }else{
                $artists=D('artists');
                $file = $_FILES['aphoto'];
                $result=$artists->addArtists($data,$file);
                if($result){
                    $this->display();
                    echo "<script>alert('添加成功！');location.href='artist_list.html'</script>";
                }
            }
        }else{
            session_start();
            $name = session('name');
            $this->assign('name',$name);
            $this->display();
        }
    }
    public function edit(){
        $yid=I('request.yid');
        $dyid['yid']=$yid;
        if(IS_POST){
            $dat=I('request.');
            $edit=D('artists');
            $result=$edit->saveArtists($dat,$dyid);
            if($result){
                $this->display();
            }
        }
        else{

            $data=M('artists')->where(array('yid'=>$yid))->find();
            $this->assign('data',$data);



            session_start();
            $name = session('name');
            $this->assign('name',$name);
            $this->display();
        }
    }
    public function artist_ex(){
        if(IS_POST){
            $m=M('artists');
            $ser=I('request.ser');
            $aa=I('post.select');
            if($aa==1){
                $data=$m->where("yname = '%s'",array($ser))->select();
                $this->assign('data',$data);
            }elseif($aa==2){
                $data=$m->where("position = '%s'",array($ser))->select();
                $this->assign('data',$data);
            }elseif($aa==3){
                $data=$m->where("collect = '%s'",array($ser))->select();
                $this->assign('data',$data);
            }
            $this->display();
        }else{
            $m=M('artists');
            $data = $m->where('style = 2')->select();
            $this->assign('data', $data);
            //删除列表
            $yid = I('request.yid');
            if($m->where(array('yid' => $yid))->delete()){
                echo "<script>alert('删除成功！');location.href='artist_list.html'</script>";
            }
            session_start();
            $name = session('name');
            $this->assign('name',$name);
            $this->display();
        }
    }
    public function artist_exone(){
        if(IS_POST){
            $m=M('artists');
            $ser=I('request.ser');
            $aa=I('post.select');
            if($aa==1){
                $data=$m->where("yname = '%s'",array($ser))->select();
                $this->assign('data',$data);
            }elseif($aa==2){
                $data=$m->where("position = '%s'",array($ser))->select();
                $this->assign('data',$data);
            }elseif($aa==3){
                $data=$m->where("collect = '%s'",array($ser))->select();
                $this->assign('data',$data);
            }
            $this->display();
        }else{
            $m=M('artists');
            $data = $m->where('style = 1')->select();
            $this->assign('data', $data);
            //删除列表
            $yid = I('request.yid');
            if($m->where(array('yid' => $yid))->delete()){
                echo "<script>alert('删除成功！');location.href='artist_list.html'</script>";
            }
            session_start();
            $name = session('name');
            $this->assign('name',$name);
            $this->display();
        }
    }
    public function artist_extwo(){
        if(IS_POST){
            $m=M('artists');
            $ser=I('request.ser');
            $aa=I('post.select');
            if($aa==1){
                $data=$m->where("yname = '%s'",array($ser))->select();
                $this->assign('data',$data);
            }elseif($aa==2){
                $data=$m->where("position = '%s'",array($ser))->select();
                $this->assign('data',$data);
            }elseif($aa==3){
                $data=$m->where("collect = '%s'",array($ser))->select();
                $this->assign('data',$data);
            }
            $this->display();
        }else{
            $m=M('artists');
            $data = $m->where('style = 0')->select();
            $this->assign('data', $data);
            //删除列表
            $yid = I('request.yid');
            if($m->where(array('yid' => $yid))->delete()){
                echo "<script>alert('删除成功！');location.href='artist_list.html'</script>";
            }
            session_start();
            $name = session('name');
            $this->assign('name',$name);
            $this->display();
        }
    }
    public function artist_edit(){
        $yid = I('request.yid');
       // dump($yid);die;
        $m = M('artists');
        $data = $m->where(array('yid' => $yid))->find();
        $this->assign('data', $data);
        //接受数据
        $mo=I('request.style');
        $yname=I('request.yname');
        $result=$m->where("yname = '%s'",array($yname))->save(array('style'=>$mo));
        if($result){
            $this->display();
            echo "<script>alert('添加成功！');location.href='artist_list.html'</script>";
        }
        session_start();
        $name = session('name');
        $this->assign('name',$name);
        $this->display();
    }
    //艺术家批量删除
    public function bdel(){
        $message=M('artists');
        $ids=I('request.yid');
        $where['yid']=array('in',$ids);
        if($ids){
            if($message->where($where)->delete()){
                echo "<script>alert('删除成功！');location.href='artist_list.html'</script>";
            }else{
                echo "<script>alert('删除失败！');location.href='artist_list.html'</script>";
            }
        }else{
            echo "<script>alert('未选中任何内容！');location.href='artist_list.html'</script>";
        }
    }
    //艺术家审核批量删除
    public function del(){
        $message=M('artists');
        $ids=I('request.yid');
        $where['yid']=array('in',$ids);
        if($ids){
            if($message->where($where)->delete()){
                echo "<script>alert('删除成功！');location.href='artist_ex.html'</script>";
            }else{
                echo "<script>alert('删除失败！');location.href='artist_ex.html'</script>";
            }
        }else{
            echo "<script>alert('未选中任何内容！');location.href='artist_ex.html'</script>";
        }
    }
}