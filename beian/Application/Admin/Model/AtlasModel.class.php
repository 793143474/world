<?php
namespace Admin\Model;
use Think\Model;
class AtlasModel extends Model
{
    protected $tableName = 'atlas';

    //添加艺术家的方法
    public function addAtlas($data,$file,$btime,$banner){
        //  dump($file);die;
        //实现文件上传
        $upload = new \Think\Upload();
        $upload->maxSize   =     1048576 ;
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');
        $upload->rootPath  =     './Public/Upload/';
        $upload->savePath  =     '';
        $info   =  $upload->upload();



        //缩略图
        $image = new \Think\Image();
        $home=$_SERVER['DOCUMENT_ROOT'].'/beian/';

        $aa=M('position')->find();                         //获取水印

        foreach($info as $v){
            $newname="_".$v['savename'];
            $image->open($home.'Public/Upload/'.$v['savepath'].$v['savename'])
                ->water($home.'Public/Upload/'.$aa['shuiyin'],\Think\Image::IMAGE_WATER_NORTHWEST)
                ->thumb(100,100)->save($home.'Public/Upload/'.$v['savepath'].$newname);
        }


      //   dump($info);
        foreach($info as $k => $val){
          //   $name=$val["name"];
             $savename=$val["savename"];
             $savepath=$val["savepath"];
            if($k==0){
                $file1['pictures'] = $savepath.$savename;//商品图片
                $data['banner']=$file1['pictures'];
                continue;
            }
            $file['pictures'] .= $savepath.$savename.",";
            $data['pictures']=trim($file['pictures'],",");
        }
        $data['btime']=$btime;
        $result=$this->add($data);
        return $result;
    }
}