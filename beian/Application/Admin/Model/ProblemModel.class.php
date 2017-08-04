<?php
namespace Admin\Model;
use Think\Model;
class ProblemModel extends Model{
    protected $tablename='problem';
    public function addProblem($data){

        $data['btime']=date("Y-m-d H:i:s");
        $result=$this->add($data);
       // dump($data);exit;
       // dump($data);exit;
        return $result;
    }
}