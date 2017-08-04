<?php
namespace Home\Controller;
use Think\Controller;
class ArtistController extends Controller {
    public function artist()
    {
        $yid=I('get.yid');
        $m=M('artists');
        $data=$m->where("yid = '%d'",array($yid))->find();
        $this->assign('data',$data);

        $dat=M('special')->where("yid = '%d'",array($yid))->order('starttime asc')->select();
        $this->assign('dat',$dat);
        $this->display();
    }
    public function artist_list()
    {
        if(IS_POST){
            $z_c=I('request.z_c');
           //dump($z_c);die;
            $m=M('artists');
            $data=$m->where("yname = '%s'",array($z_c))->select();
           // dump($data);die;
            $this->assign('data',$data);
            $this->display();
        }else{
            //分页
            $m = M('artists');
            $count = $m->count();
            $p = getpage($count, 20);
            $data = $m->field(true)->order('time')->limit($p->firstRow, $p->listRows)->select();
            $this->assign('data', $data); // 赋值数据集
            $this->assign('page', $p->show()); // 赋值分页输出

            $data=$m->order('appraisal desc ')->select();
            $this->assign('data',$data);
            session_start();
            $nickname = session('nickname');
            $this->assign('nickname',$nickname);
            $this->display();
        }
    }
    public function artist_news()
    {
        if(IS_POST){
            $z_c=I('request.z_c');
            //dump($z_c);die;
            $m=M('artists');
            $data=$m->where("yname = '%s'",array($z_c))->select();
            // dump($data);die;
            $this->assign('data',$data);
            $this->display();
        }else{
            //分页
            $m = M('artists');
            $count = $m->count();
            $p = getpage($count, 20);
            $data = $m->field(true)->order('time')->limit($p->firstRow, $p->listRows)->select();
            $this->assign('data', $data); // 赋值数据集
            $this->assign('page', $p->show()); // 赋值分页输出


            $data=sel_artists();
            $this->assign('data',$data);
            $this->display();
        }

    }
}