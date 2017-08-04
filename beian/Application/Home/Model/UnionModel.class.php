<?php
namespace Home\Model;
use Think\Model;
class UnionModel extends Model{
    protected $tableName = 'union';
    public function addUnion($data,$file){

       //dump($data);
        $data['time']=date("Y-m-d H:i:s");
        $m_t=$data['contacts_tele'];
        $mai=$data['contacts_email'];

        //判断是否注册
        $name=$data['name'];
       // dump($name);
        $aa=M('union')->where("name = '%s'",array($name))->find();
      // dump($aa);
        if($data['name']==''){
            return 3;
        }else if($data['contacts_name']==''){
            return 4;
        }else if($data['contacts_tele']==''){
            return 5;
        }else if(count($aa)==''){
            if(strlen($m_t)==11){                                     //正则判断手机号和邮箱是否格式正确
                if(preg_match("/^1[34578]\d{9}$/", $m_t)){           //手机验证通过

                    $pattern = '/^([0-9A-Za-z\\-_\\.]+)@([0-9a-z]+\\.[a-z]{2,3}(\\.[a-z]{2})?)$/i';

                    if (preg_match($pattern, $mai))
                    {
                       // dump(11);
                        $upload = new \Think\Upload();                 //邮箱验证通过
                        $upload->maxSize = 1048576;
                        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');
                        $upload->rootPath = './Public/Upload/';
                        $upload->savePath = '';
                        $info = $upload->upload();
                        $file['picture'] = $info['picture']['savepath'] . $info['picture']['savename'];
                     //   dump($file);die;
                        $data['picture'] = $file['picture'];
                        $result = $this->add($data);
                        return $result;
                    } else {
                        return 1;                                        //邮箱格式不正确
                    }
                }else {
                    return 2;                                           //手机号码格式不对
                }
            }
            else{
                return 2;                                               //
            }
        }else{
            return 0;                                                   //已经注册
        }
    }
}