<?php
namespace Home\Model;
use Think\Model;
class GoodModel extends Model{
    protected $tableName='songjian';
    public function addsongjian($data,$file){
        //实现文件上传
        $upload = new \Think\Upload();
        $upload->maxSize   =     3145728 ;
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');
        $upload->rootPath  =     './Public/Upload/';
        $upload->savePath  =     '';
        $info   =  $upload->upload();
        $image = new \Think\Image();
        $home=$_SERVER['DOCUMENT_ROOT'].'/beian/';
        $aa=M('position')->find();                         //获取水印
        foreach($info as $v){
            $newname="_".$v['savename'];
            $image->open($home.'Public/Upload/'.$v['savepath'].$v['savename'])
                ->water($home.'Public/Upload/'.$aa['shuiyin'],\Think\Image::IMAGE_WATER_NORTHWEST)
                ->thumb(278,274)->save($home.'Public/Upload/'.$v['savepath'].$newname);
        }

        $file['myFile'] = $info['myFile']['savepath'].$info['myFile']['savename'];
        $data['myFile']=$file;
        $data['newsdate']=date("Y-m-d H:i:s");
        $result=$this->add($data);

        return $result;
    }
}