<?php
namespace Home\Model;

use Think\Model;

class SongjianModel extends Model
{
    protected $tableName = 'songjian';

    public function addsongjian($data,$file,$file1,$file2,$file3,$file4)
    {                                                                     //实现文件上传
        $data['btime'] = date("Y-m-d");
        $tj = $data['mobile'];
        if ($data['cname'] == null) {
            return '3';
        }else if ($data['auther'] == null) {
            return '4';
        }else if ($data['owner'] == null) {
            return '5';
        }else if ($data['address'] == null) {
            return '6';
        }else if ($file == null) {
            return '7';
        }else if(strlen($tj) == 11)
        {
            if(preg_match("/^1[34578]\d{9}$/", $tj)) {                       //手机验证通过
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

                $file['myFile'] = $info['myFile']['savepath'] . $info['myFile']['savename'];

                $file['myFile1'] = $info['myFile1']['savepath'] . $info['myFile1']['savename'];
                $file['myFile2'] = $info['myFile2']['savepath'] . $info['myFile2']['savename'];
                $file['myFile3'] = $info['myFile3']['savepath'] . $info['myFile3']['savename'];
                $file['myFile4'] = $info['myFile4']['savepath'] . $info['myFile4']['savename'];

                $data['banner'] = $file['myFile'];
                $data['pictures'] .= $file['myFile1'].','. $file['myFile2'].','. $file['myFile3'].','.$file['myFile4'];
                $result = $this->add($data);
                return $result;
            } else {
                return 2;                           //手机号码格式不对
            }
        }else{
            return 2;
        }
    }

}