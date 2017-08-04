<?php
namespace Home\Controller;
use Think\Controller;
class PhotoController extends Controller {
    public function photo(){
        $id=I('get.id');
        $tuji=M('atlas')->where("id = '%d'",array($id))->find();
            $aa=$tuji['pictures'];
      //      dump($aa);die;
            $hell = explode(',',$aa);
            $tuji['images']=$hell;
        //dump($tuji);
        $this->assign('tuji',$tuji);
        $this->display();
    }
    public function photo_list(){
        //分页
        $m = M('atlas');
        $count = $m->count();
        $p = getpage($count, 10);
        $data = $m->field(true)->order('btime desc')->limit($p->firstRow, $p->listRows)->select();
        foreach($data as $k=>$v){
            $aa=$v['pictures'];
            $hell = explode(',',$aa);
            $data[$k]['images']=$hell;
        }
        $this->assign('tuji',$data);
       // $this->assign('data', $data); // 赋值数据集
        $this->assign('page', $p->show()); // 赋值分页输出
       // $tuji=M('atlas')->order('btime desc')->select();
      /*  foreach($data as $k=>$v){
            $aa=$v['pictures'];
            $hell = explode(',',$aa);
            $tuji[$k]['images']=$hell;
        }
        //dump($tuji);
        $this->assign('tuji',$data);*/
        $this->display();
    }
}