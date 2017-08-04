<?php
namespace Home\Controller;
use Think\Controller;
class ErrorController extends Controller {
    public function e404(){
        $this->display();
    }
}