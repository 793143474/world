<?php
namespace home\Model;
use Think\Model;
class GoodsModel extends Model{
    protected $tableName='news';
    public function selectNews($tuijian){
        $result=$this->where($tuijian)->select();
        return $result;
    }
}