<?php
namespace Home\Model;
use Think\Model;
class ArtistsModel extends Model {
    protected $tableName='artists';
    public function addArtists($data,$file){
        $data['time']=date("Y-m-d");
        $name=$data['yname'];
        $tj=$data['mobile'];
        $aa=M('artists')->where("yname = '%s'",array($name))->find();
        if($data['yname']==null){
            return 3;
        }else if($data['mobile']==null){
            return 4;
        }else if($data['email']==null){
            return 5;
        }else if(count($aa)=='')
        {
            if(strlen($tj) == 11){
                if(preg_match("/^1[34578]\d{9}$/", $tj)) {
                    //手机验证通过
                    //   dump(222);
                    $pattern = '/^([0-9A-Za-z\\-_\\.]+)@([0-9a-z]+\\.[a-z]{2,3}(\\.[a-z]{2})?)$/i';
                    if(preg_match($pattern,$data['contacts_email'])){

                    }
                    else{
                        $upload = new \Think\Upload();
                        $upload->maxSize   =     1048576 ;
                        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');
                        $upload->rootPath  =     './Public/Upload/';
                        $upload->savePath  =     '';
                        $info   =  $upload->upload();
                       // dump($info);die;
                        $image = new \Think\Image();
                        $home=$_SERVER['DOCUMENT_ROOT'].'/beian/';
                        $aa=M('position')->find();                         //获取水印
                        foreach($info as $v){
                        $newname="_".$v['savename'];
                        $image->open($home.'Public/Upload/'.$v['savepath'].$v['savename'])
                            ->water($home.'Public/Upload/'.$aa['shuiyin'],\Think\Image::IMAGE_WATER_NORTHWEST)
                            ->thumb(278,274)->save($home.'Public/Upload/'.$v['savepath'].$newname);
                           }
                        // dump($info);exit;


                        $file['myFile'] = $info['myFile']['savepath'].$info['myFile']['savename'];
                        $data['aphoto']= $file['myFile'];
                        $result=$this->add($data);
                        return $result;
                        //   dump(444);
                        //邮箱格式不正确
                        return 1;
                    }
                }else{
                    return 2;
                    //手机号码格式不对
                }
            }else{
                return 2;
            }
        }else{
            return "0";
        }
    }
}