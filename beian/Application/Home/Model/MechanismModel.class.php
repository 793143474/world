<?php
namespace Home\Model;
use Think\Model;
class MechanismModel extends Model {
    protected $tableName='mechanism';
    public function addMechanism($data,$files,$file){
        $data['time']=date("Y-m-d");
        $name=$data['mechanism_name'];
        $tj=$data['mobile'];
        $aa=M('mechanism')->where("mechanism_name = '%s'",array($name))->find();
        if(count($name)==''){
            return 3;
        }else if($data['mobile']==null){
            return 4;
        }else if($data['email']==null){
            return 5;
        }else
        if(count($aa)==''){
            if(strlen($tj) == 11) {
                if (preg_match("/^1[34578]\d{9}$/", $tj)) {
                    $pattern = '/^([0-9A-Za-z\\-_\\.]+)@([0-9a-z]+\\.[a-z]{2,3}(\\.[a-z]{2})?)$/i';
                    if (preg_match($pattern, $data['email'])) {
                        //缩略图+水印
                        //获取水印

                        $upload = new \Think\Upload();
                        $upload->maxSize = 1048576;
                        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');
                        $upload->rootPath = './Public/Upload/';
                        $upload->savePath = '';
                        $info = $upload->upload();

                         $image = new \Think\Image();
                         $home=$_SERVER['DOCUMENT_ROOT'].'/beian/';
                        $aa=M('position')->find();                         //获取水印
                        foreach($info as $v){
                             $newname="_".$v['savename'];
                             $image->open($home.'Public/Upload/'.$v['savepath'].$v['savename'])
                                 ->water($home.'Public/Upload/'.$aa['shuiyin'],\Think\Image::IMAGE_WATER_NORTHWEST)
                                 ->thumb(278,274)->save($home.'Public/Upload/'.$v['savepath'].$newname);
                        }

                        $files['myFile'] = $info['myFile']['savepath'] . $info['myFile']['savename'];
                        $file['Twophoto'] = $info['Twophoto']['savepath'] . $info['Twophoto']['savename'];

                        $data['mechanism_photo'] = $files['myFile'];
                        $data['mechanism_photo1'] = $file['Twophoto'];

                        $result = $this->add($data);
                        return $result;
                    } else {
                        return 1;                                          //邮箱格式不正确
                    }
                    //dump(555);
                } else {
                    return 2;                                                //手机号码格式不对
                }
            }else{
                return 2;
            }
        }else{
            return "0";
        }
    }
}
