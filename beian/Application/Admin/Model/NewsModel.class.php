<?php
namespace Admin\Model;
use Think\Model;
class NewsModel extends Model{
    protected $tablename='news';
    public function addNews($data,$file){

        //实现文件上传
        $upload = new \Think\Upload();
        $upload->maxSize   =     1048576 ;
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
                ->thumb(100,100)->save($home.'Public/Upload/'.$v['savepath'].$newname);
        }

        $file['banner'] = $info['banner']['savepath'].$info['banner']['savename'];

        $data['banner']=$file['banner'];
        $data['newsdate']=date("Y-m-d H:i:s");
      //  dump($data);
      //  dump(1);
        $result=$this->add($data);
        return $result;
    }
}