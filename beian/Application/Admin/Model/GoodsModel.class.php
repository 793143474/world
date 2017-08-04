<?php
 namespace Admin\Model;
 use Think\Model;
 class GoodsModel extends Model{
     protected $tableName='goods';
     //添加商品的方法
     public function saveGoods($data,$file,$gid){
         //dump($zhengshu);die;
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

       //  dump($info);
         foreach($info as $k=>$v){
             //$name=$v["name"];
             $savename=$v["savename"];
             $savepath=$v["savepath"];
             //鉴定证书
                 $file['pictures'] .= $savepath.$savename.",";
                 $data['certificate']=trim($file['pictures'],",");
                     //鉴定证书
         }
         $btime=date("Y-m-d");
         $data['jdtime']=$btime;
         $result=$this->where(array('gid'=>$gid))->save($data);

         foreach($data as $k=>$v){
             $data[$k]['url']="/index.php/details/details/gid/".$v['gid']."html";
         }
         return $result;
     }
 }