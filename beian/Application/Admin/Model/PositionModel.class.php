<?php
namespace Admin\Model;
use Think\Model;
class PositionModel extends Model
{
    protected $tableName = 'position';
    public function addPosition($data,$file,$file2){

        $name=$data['name'];
        if(count($name) || $file || $file2==''){

            $upload = new \Think\Upload();
            $upload->maxSize   =     3145728 ;
            $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');
            $upload->rootPath  =     './Public/Upload/';
            $upload->savePath  =     '';
            $info   =  $upload->upload();

          /*  //缩略图
            $image = new \Think\Image();
            $home=$_SERVER['DOCUMENT_ROOT'].'/beian/';

            $aa=M('position')->find();                         //获取水印

            foreach($info as $v){
                $newname="_".$v['savename'];
                $image->open($home.'Public/Upload/'.$v['savepath'].$v['savename'])
                    ->water($home.'Public/Upload'.$aa['shuiyin'],\Think\Image::IMAGE_WATER_NORTHWEST)
                    ->thumb(100,100)->save($home.'Public/Upload/'.$v['savepath'].$newname);
            }*/


            $file['pictures'] = $info['pictures']['savepath'].$info['pictures']['savename'];
            $file2['picture'] = $info['picture']['savepath'].$info['picture']['savename'];
            $data['logo']= $file['pictures'];
            $data['shuiyin']= $file2['picture'];
          //  dump($data);die;
            $result=$this->add($data);
            return $result;
        }else {
            return 0;
        }
    }
}