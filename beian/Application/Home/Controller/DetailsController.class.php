<?php
namespace Home\Controller;
use Think\Controller;
class DetailsController extends Controller {
    public function details()
    {
        $gid=I('get.gid');
        $data=M('goods')
            ->join('left JOIN  on_laiyuan ON on_goods.laiyuan=on_laiyuan.style1')
            ->where("gid = '%d'",array($gid))->find();
        $aa=$data['pictures'];

        $bb=$data['certificate'];

        $hell = explode(',',$aa);
        $shel = explode(',',$bb);
        $data['pictures']=$hell;
        $data['certificate']=$shel;
       // dump($data);
        $this->assign('data',$data);
        $this->display();
    }
}