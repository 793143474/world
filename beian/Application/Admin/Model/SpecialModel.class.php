<?php
/**
 * Created by PhpStorm.
 * User: liugang
 * Date: 2017/7/2
 * Time: 14:10
 */
namespace Admin\Model;

use Think\Model;

class SpecialModel extends Model
{
    protected $tableName = 'special';

    public function addspecial($data, $file)
    {
        $upload = new \Think\Upload();
        $upload->maxSize = 3145728;
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');
        $upload->rootPath = './Public/Upload/';
        $upload->savePath = '';
        $info = $upload->upload();

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


        $file['banner_pictures'] = $info['banner_pictures']['savepath'] . $info['banner_pictures']['savename'];

        $data['banner_pictures'] = $file['banner_pictures'];
        $m = M('artists');
        $name = $m->where(array('yname' => $data['attesters']))->find();
        $data['yid'] = $name['yid'];
        $result = $this->add($data);
        return $result;
    }
}