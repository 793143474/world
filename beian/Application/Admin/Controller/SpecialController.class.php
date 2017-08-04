<?php
namespace Admin\Controller;
use Think\Controller;
class SpecialController extends Controller {
    public function special_list()
    {
        $m=M('special');
        $count = $m
            ->count();
        $p = getpage($count,20);
        $data = $m->field(true)->order('starttime')->limit($p->firstRow, $p->listRows)->select();
        $this->assign('data', $data); // 赋值数据集
        $this->assign('page', $p->show()); // 赋值分页输出
        /*  $arr=$am->select();
          $this->assign('arr',$arr);*/
        $aid = I('request.aid');
        if($m->where(array('aid' => $aid))->delete()){
            echo "<script>alert('删除成功！');location.href='songjian.html'</script>";
        }


        session_start();
        $name = session('name');
        $this->assign('name',$name);
        $this->display();
    }

    public function special_listone()
    {
        $m=M('special');
        //获取数据库中所有的数据
        //分页
        $count = $m
            ->count();
        $p = getpage($count,20);
        $nowtime = date("Y-m-d H:i:s");
        $data = $m->field(true)->order('starttime')->limit($p->firstRow, $p->listRows)->select();
        $aid = I('request.aid');
        if($m->where(array('aid' => $aid))->delete()){
            echo "<script>alert('删除成功！');location.href='songjian_listone.html'</script>";
        }
        foreach($data as $k=>$val){
            $starime=$val['starttime'];
            if(strtotime($nowtime) < strtotime($starime)){  //获取未开始的拍卖会
                $array[] = $val;
            }

        }
       // dump($array);
        $this->assign('array', $array); // 赋值数据集
        $this->assign('page', $p->show()); // 赋值分页输出


        session_start();
        $name = session('name');
        $this->assign('name',$name);
        $this->display();
    }
    public function special_listtwo()
    {
        $m=M('special');
        //获取数据库中所有的数据
        //分页
        $count = $m
            ->count();
        $p = getpage($count,20);
        $nowtime = date("Y-m-d H:i:s");
        $data = $m->field(true)->order('starttime')->limit($p->firstRow, $p->listRows)->select();
        $aid = I('request.aid');
        if($m->where(array('aid' => $aid))->delete()){
            echo "<script>alert('删除成功！');location.href='songjian_listtwo.html'</script>";
        }
        foreach($data as $k=>$val){
            $endime=$val['endtime'];
            if(strtotime($nowtime) >= strtotime($endime)){
                $arr[] = $val;                                     //获取已经结束的拍卖会
            }
        }
        $this->assign('arr', $arr); // 赋值数据集
        $this->assign('page', $p->show()); // 赋值分页输出

        session_start();
        $name = session('name');
        $this->assign('name',$name);
        $this->display();
    }
    public function special_detail(){
        if(IS_POST){
            $data=I('post.','','strip_tags');
            if($data['attesters']==null){
                session('info','鉴证人不能为空');

            }elseif($data['title']==null){
                session('info1','鉴证专场名不能为空');

            }elseif($data['content']==null){
                session('info2','专场简介不能为空');

            }elseif($data['starttime']==null){
                session('info3','鉴定开始时间不能为空');

            }elseif($data['endtime']==null){
                session('info4','鉴定结束时间不能为空');

            }elseif($data['address']==null){
                session('info5','鉴定地址不能为空');

            }else {
                $file=$_FILES['banner_pictures'];
                $artists = D('special');
                $result = $artists->addspecial($data,$file);
                If ($result) {

                    $this->display();
                    echo "<script>alert('添加成功！');location.href='special_list.html'</script>";
                }
            }
            $this->display();
        }else{


            session_start();
            $name = session('name');
            $this->assign('name',$name);
            $this->display();
        }
    }
    public function special_edi(){
        if(IS_POST){
        }else{
            $m=M('special');
            $aid = I('request.aid');
            $aa=$m->where(array('aid' => $aid))->find();
            $this->assign('aa',$aa);


            session_start();
            $name = session('name');
            $this->assign('name',$name);
            $this->display();
        }
    }
    //批量删除
    public function del(){
        $message=M('special');
        $ids=I('request.aid');
        $where['aid']=array('in',$ids);
        if($ids){
            if($message->where($where)->delete()){
                echo "<script>alert('删除成功！');location.href='special_list.html'</script>";
            }else{
                echo "<script>alert('删除失败！');location.href='special_list.html'</script>";
            }
        }else{
            echo "<script>alert('未选中任何内容！');location.href='special_list.html'</script>";
        }
    }
}