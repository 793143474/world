<?php
namespace Home\Controller;
use Think\Controller;
class FailController extends Controller {
    public function fail(){
        $aa=I('request.');
        //dump($aa);
        $this->assign('aa',$aa);
        $this->display();
    }
    public function fail1(){
    $aa=I('request.');
    //dump($aa);
    $this->assign('aa',$aa);
    $this->display();
    }
    public function fail2(){
        $aa=I('request.');
        //dump($aa);
        $this->assign('aa',$aa);
        $this->display();
    }
    public function fail3(){
        $aa=I('request.');
        //dump($aa);
        $this->assign('aa',$aa);
        $this->display();
    }
}