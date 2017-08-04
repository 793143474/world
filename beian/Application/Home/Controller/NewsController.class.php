<?php
namespace Home\Controller;
use Think\Controller;
class NewsController extends Controller {
    public function news()
    {
        //获取news表中的nid的字段
        $news=M('news');
        $nid=I('request.nid');
        $menu=$news->where("nid = '%d'",array($nid))->find();
        //dump($menu);
        $this->assign('menu',$menu);

        $data=$news->order('newsdate desc')->select();
        $this->assign('data',$data);

        $M=M('problem');
        $id=I('request.id');
        $men=$M->where("id = '%d'",array($id))->find();
      //  dump($menu);
        $this->assign('men',$men);

        $goods=M('goods')->order('btime desc')->select();
        $this->assign('goods',$goods);



        $this->display();
    }
    public function news_list(){

        if(IS_POST){
            if(IS_POST){
                $da=I('request.');
                $j_g=$da["j_g"];
                $lei_bie=$da["lei_bie"];
                if( $lei_bie==0){
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
            }
        }else{
            $m=M('news');
            $count = $m->count();
            $p = getpage($count, 30);
            $data = $m->field(true)->order('newsdate desc')->limit($p->firstRow, $p->listRows)->select();
            $this->assign('dpr', $data); // 赋值数据集
            $this->assign('page', $p->show()); // 赋值分页输出

            //常见问题的获得
            $dpr=M('problem')->order('btime desc')->select();
            $this->assign('dp',$dpr);

            $result=sel_spd();            //即将进行专场的的获取
            $s_pd=$result[1];
            $this->assign('s_pd',$s_pd);
            //精彩回顾的专场
            $jieshu=$result[0];
            $jianzheng_jieshu=end($jieshu);
            $this->assign('jianzheng_jieshu',$jianzheng_jieshu);

            //新闻资讯查询
            $result=sel_news( $tjb='on');
            $this->assign('result',$result);


            $this->display();
        }

    }
}