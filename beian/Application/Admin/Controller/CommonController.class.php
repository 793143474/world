<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller {
         public function head_banner(){
             session_start();
             $name = session('name');
             $this->assign('name',$name);
         }
        public function tuichu()
        {
            session_start();
            session(null);
            $this->redirect('login/login', array( ''), 0, '页面跳转中...');
        }
}