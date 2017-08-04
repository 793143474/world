<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index()
    {
        if(IS_POST){
            $da=I('request.');
            $j_g=$da["j_g"];
            $lei_bie=$da["lei_bie"];
//dump($lei_bie);die;
            if( $lei_bie==0){
              //  $data=M('goods')->where("bianhao = '%s'",array($j_g))->find();
                $this->redirect('work/works', array('bianhao'=> $j_g), 0, '页面跳转中...');
            }
            if($lei_bie==1){
                $this->redirect('work/works', array('name'=> $j_g), 0, '页面跳转中...');
            }
            if($lei_bie==2){
                $this->redirect('work/works', array('yname'=> $j_g), 0, '页面跳转中...');
            }
            if($lei_bie==3){
                $this->redirect('work/works', array('laiyuan'=>  $j_g), 0, '页面跳转中...');
            }
        }else{
            //新闻资讯查询
            $result=sel_news( $tjb='on');
            $this->assign('result',$result);

            //艺术家查询
            $data=sel_artists();
            $data=suoluetu($data);
           // dump($data);die;
            $this->assign('data',$data);

            //获取艺术品
            $goods=sel_gd($str='真');
            $data=suoluetu($goods);
           // dump($goods);
            $this->assign('goods',$data);

            //专场鉴证的获取
            $result=sel_spd();
            //即将进行专场的的获取
            $s_pd=$result[1];
            $this->assign('s_pd',$s_pd);
            //精彩回顾的专场
            $jieshu=$result[0];
            $jianzheng_jieshu=end($jieshu);
            $this->assign('jianzheng_jieshu',$jianzheng_jieshu);
            //dump($jianzheng_jieshu);

            //常见问题的获得
            $dpr=M('problem')->order('btime desc')->select();
            $this->assign('dpr',$dpr);
            //dump($data);


            //初审精品欣赏
            $chushen=M('goods')->where(array('style'=>1,'result'=>0))->order('btime desc')->limit(13)->select();
            $this->assign('chushen',$chushen);

            //现场图集
            $tuji=M('atlas')->order('btime desc')->select();
            $data=suoluetu($tuji);
            $this->assign('tuji',$data);


            session_start();
            $nickname = session('nickname');
            $this->assign('nickname',$nickname);
            $this->display();
        }
    }
}