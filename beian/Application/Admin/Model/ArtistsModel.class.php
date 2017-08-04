<?php
namespace Admin\Model;
use Think\Model;
class ArtistsModel extends Model{
    protected $tableName='artists';
    //添加艺术家的方法
    public function addArtists($data,$file){
        //实现文件上传
        $upload = new \Think\Upload();
        $upload->maxSize   =     3145728 ;
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



        $file['aphoto'] = $info['aphoto']['savepath'].$info['aphoto']['savename'];
        //实现字段的添加
        $data['time']=date("Y-m-d H:i:s");
        $data['style']='1';
        $data['aphoto']= $file['aphoto'] ;
        $result=$this->add($data);
        return $result;
    }
    public function saveArtists($dat,$dyid){
        $upload = new \Think\Upload();
        $upload->maxSize   =     3145728 ;
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');
        $upload->rootPath  =     './Public/Upload/';
        $upload->savePath  =     '';
        $info   =  $upload->upload();
        $file['aphoto'] = $info['aphoto']['savepath'].$info['aphoto']['savename'];
        //实现字段的添加
        $dat['time']=date("Y-m-d H:i:s");
        $dat['aphoto']= $file['aphoto'] ;
        $result=$this->where($dyid)->save($dat);
        return $result;
    }
}