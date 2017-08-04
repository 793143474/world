<?php
namespace Home\Controller;
use Think\Controller;
class SpecialController extends Controller {
    public function special()
    {
        $aid=I('get.aid');
        $data=M('special')->where("aid = '%d'",array($aid))->find();;
        $this->assign('data',$data);

        $result = M('news as n')->join('on_newsspecial as b on n.style = b.styles')->order('n.newsdate desc')->select();
        $this->assign('result',$result);
        $this->display();
    }
    public function Special_list()
    {
        if(IS_POST){
            $z_c=I('request.z_c');
            $resu=M('special')->where("title = '%s'",array($z_c))->select();
            $this->assign('resu',$resu);
            $this->display();
        }else{
            $m = M('special');
            $count = $m->count();
            $p = getpage($count, 20);
            $data = $m->field(true)->order('starttime')->limit($p->firstRow, $p->listRows)->select();
            $this->assign('data', $data); // 赋值数据集
            $this->assign('page', $p->show()); // 赋值分页输出
            //获得所有的鉴证专场
           /* $result=sel_spd();
            $this->assign('result',$result);*/


            session_start();
            $nickname = session('nickname');
            $this->assign('nickname',$nickname);
            $this->display();
        }
    }
    public function Special_one()
    {
        if(IS_POST){
            $z_c=I('request.z_c');
           // dump($z_c);
            $result=M('special')->where("title = '%s'",array($z_c))->select();
            //  dump($resu);die;
            $this->assign('result',$result);
            $this->display();
        }else {
            $m = M('special');
            $count = $m->count();
            $p = getpage($count,20);
            $nowtime = date("Y-m-d H:i:s");
            $data = $m->field(true)->order('starttime')->limit($p->firstRow, $p->listRows)->select();
            foreach($data as $k=>$val){
                $starime=$val['starttime'];

                if(strtotime($nowtime) < strtotime($starime)){  //获取未开始的拍卖会
                    $array[] = $val;
                }
             //   dump($array);
            }
           // dump($array);
            $this->assign('array', $array); // 赋值数据集
            $this->assign('page', $p->show()); // 赋值分页输出

            $this->display();
        }
    }
    public function Special_two()
    {
        if(IS_POST){
            $z_c=I('request.z_c');
           // dump($z_c);
            $result=M('special')->where("title = '%s'",array($z_c))->select();
            //  dump($resu);die;
            $this->assign('result',$result);
            $this->display();
        }else {
            $m = M('special');
            $count = $m->count();
            $p = getpage($count, 8);
            $nowtime = date("Y-m-d H:i:s");
            $data = $m->field(true)->order('starttime')->limit($p->firstRow, $p->listRows)->select();
            foreach($data as $k=>$val){
              //  $starime=$val['starttime'];
                    $endime=$val['endtime'];
                if(strtotime($nowtime) >= strtotime($endime)){
                    $arr[] = $val;                                     //获取已经结束的拍卖会
                }
            }
            //dump($arr);
            $this->assign('arr', $arr); // 赋值数据集
            $this->assign('page', $p->show()); // 赋值分页输出
            $this->display();
        }
    }
}