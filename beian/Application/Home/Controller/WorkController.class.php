<?php
namespace Home\Controller;

use Think\Controller;

class WorkController extends Controller
{
    public function works()
    {

        if (IS_POST) {
            $wor = I('request.');
            $data = che_style_all($wor);
            $this->assign('data', $data);
            $this->display();
        } else {
            $data = M('goods')
                ->join('left join on_laiyuan on on_goods.laiyuan=on_laiyuan.style1')
                ->order('btime asc')->select();

            $this->assign('data', $data);


            if (I('get.name')) {
                $j_g = I('get.name');
             //   dump($j_g);
                $data = M('goods')
                    ->join('left JOIN  on_laiyuan ON on_goods.laiyuan=on_laiyuan.style1')
                    ->where("name = '%s'", array($j_g))
                    ->select();

                $this->assign('data', $data);
            }
            if (I('get.yname')) {
                $j_g = I('get.yname');
                $data = M('goods')
                    ->join('left JOIN  on_laiyuan ON on_goods.laiyuan=on_laiyuan.style1')
                    ->where("yname = '%s'", array($j_g))->select();

                $this->assign('data', $data);
            }
            if (I('get.laiyuan')) {
                $j_g = I('get.laiyuan');
                $data = M('goods')
                    ->join('left JOIN  on_laiyuan ON on_goods.laiyuan=on_laiyuan.style1')
                    ->where("laiyuan = '%s'", array($j_g))->select();
                //dump($data);die;
                $this->assign('data', $data);
            }
            if (I('get.bianhao')) {
                $j_g = I('get.bianhao');
                $wh['bianhao']=$j_g;

                $data = M('goods')
                    ->join('left JOIN  on_laiyuan ON on_goods.laiyuan=on_laiyuan.style1')
                    ->where($wh)->order('btime asc')->select();
                $this->assign('data', $data);
            }

            session_start();
            $nickname = session('nickname');
            $this->assign('nickname',$nickname);
            $this->display();
        }
    }
    function works2(){

        header("Access-Control-Allow-Origin:*");
        $years = array(
            array(0, 3000),
            array(2020, 2030),
            array(2010, 2020),
            array(2000, 2010),
            array(1990, 2000),
            array(1980, 1990),
            array(1970, 1980),
            array(1960, 1970),
            array(1950, 1960),
            array(1940, 1950),
            array(1930, 1940),
            array(0, 1930),
        );
        $orderarr=array(
            "btime desc",
            "btime asc",
            "bianhao desc",
            "bianhao asc"
        );
        $order=I("post.rid") ? $orderarr[I("post.rid")] : "btime asc";
        if(I("post.sorce")=='0'){
            if (I('post.starttime') != '' && I('post.endtime') != '') {
                $data = M('goods')
                    ->join('left JOIN  on_laiyuan ON on_goods.laiyuan=on_laiyuan.style1')
                    ->where("category=%d and cztime>%d and cztime<=%d and btime>'%f' and btime<'%f' and result='真'", array(I("post.type"), $years[I("post.years")][0], $years[I("post.years")][1],I('post.starttime'), I('post.endtime')))->order($order)->select();
            } else {
                $data = M('goods')
                    ->join('left JOIN  on_laiyuan ON on_goods.laiyuan=on_laiyuan.style1')
                    ->where("category=%d and cztime>%d and cztime<=%d and result='真'", array(I("post.type"), $years[I("post.years")][0], $years[I("post.years")][1]))->order($order)->select();
            }
        }else{
            if (I('post.starttime') != '' && I('post.endtime') != '') {
                $data = M('goods')
                    ->join('left JOIN  on_laiyuan ON on_goods.laiyuan=on_laiyuan.style1')
                    ->where("laiyuan=%d and category=%d and cztime>%d and cztime<=%d and btime>'%f' and btime<'%f' and result='真'", array(I("post.sorce"), I("post.type"), $years[I("post.years")][0], $years[I("post.years")][1],I('post.starttime'), I('post.endtime')))->order($order)->select();
            } else {
                $data = M('goods')
                    ->join('left JOIN  on_laiyuan ON on_goods.laiyuan=on_laiyuan.style1')
                    ->where("laiyuan=%d and category=%d and cztime>%d and cztime<=%d and result='真'", array(I("post.sorce"), I("post.type"), $years[I("post.years")][0], $years[I("post.years")][1]))->order($order)->select();
            }
        }
        //$data = M('goods')->select();
        foreach($data as $k=>$v){
            $data[$k]['url']="/beian/index.php/details/details/gid/".$v['gid']."html";

        }
        $data=suoluetu($data);
        echo json_encode($data);
    }

    function works3(){
        header("Access-Control-Allow-Origin:*");
        $years = array(
            array(0, 3000),
            array(2020, 2030),
            array(2010, 2020),
            array(2000, 2010),
            array(1990, 2000),
            array(1980, 1990),
            array(1970, 1980),
            array(1960, 1970),
            array(1950, 1960),
            array(1940, 1950),
            array(1930, 1940),
            array(0, 1930),
        );
        if(I("post.sorce")=='0') {
            if (I('post.starttime') != '' && I('post.endtime') != '') {
                $data = M('goods')
                    ->join('left JOIN  on_laiyuan ON on_goods.laiyuan=on_laiyuan.style1')
                    ->where("category=%d and cztime>%d and cztime<=%d and btime>'%f' and btime<'%f' and result='真'", array(I("post.type"), $years[I("post.years")][0], $years[I("post.years")][1], I('post.starttime'), I('post.endtime')))->select();
            } else {
                $data = M('goods')
                    ->join('left JOIN  on_laiyuan ON on_goods.laiyuan=on_laiyuan.style1')
                    ->where("category=%d and cztime>%d and cztime<=%d and result='真'", array(I("post.type"), $years[I("post.years")][0], $years[I("post.years")][1]))->select();
            }
        }else{
            if (I('post.starttime') != '' && I('post.endtime') != '') {
                $data = M('goods')
                    ->join('left JOIN  on_laiyuan ON on_goods.laiyuan=on_laiyuan.style1')
                    ->where("laiyuan=%d and category=%d and cztime>%d and cztime<=%d and btime>'%f' and btime<'%f' and result='真'", array(I("post.sorce"), I("post.type"), $years[I("post.years")][0], $years[I("post.years")][1],I('post.starttime'), I('post.endtime')))->select();
            } else {
                $data = M('goods')
                    ->join('left JOIN  on_laiyuan ON on_goods.laiyuan=on_laiyuan.style1')
                    ->where("laiyuan=%d and category=%d and cztime>%d and cztime<=%d and result='真'", array(I("post.sorce"), I("post.type"), $years[I("post.years")][0], $years[I("post.years")][1]))->select();

            }
        }
        foreach($data as $k=>$v){
            $data[$k]['url']="/beian/index.php/details/details/gid/".$v['gid']."html";

        }
        $data=suoluetu($data);
        echo json_encode($data);
    }
    public function works_one()
    {
        if (IS_POST) {
            $wor = I('request.');
            $data = che_style_all($wor);
            $this->assign('data', $data);
            $this->display();
        } else {
            $data = M('goods')->order('btime desc')->select();
            $this->assign('data', $data);
            $this->display();
        }
    }

    public function works_two()
    {
        if (IS_POST) {
            $wor = I('request.');
            $data = che_style_all($wor);
            $this->assign('data', $data);
            $this->display();
        } else {
            $data = M('goods')->order('bianhao asc')->select();
            $this->assign('data', $data);
            $this->display();
        }
    }

    public function works_three()
    {
        if (IS_POST) {
            $wor = I('request.');
            $data = che_style_all($wor);
            $this->assign('data', $data);
            $this->display();
        } else {
            $data = M('goods')->order('bianhao desc')->select();
            $this->assign('data', $data);
            $this->display();
        }
    }

}