<?php
namespace Admin\Controller;
use Think\Controller;
class PostionController extends Controller {
    public function postion_detail()
    {
        if(IS_POST){
            $data=I('request.');
            if($data['name']==null){
                echo "<script>alert('名称不能为空！');location.href='postion_detail.html'</script>";
              //  $this->display();
            }else{
               // $data=I('request.','','strip_tags');
                $position=D('position');
                $file=$_FILES['pictures'];
                $file2=$_FILES['picture'];
                $result=$position->addPosition($data,$file,$file2);
                if($result){
                   // $this->display();
                    echo "<script>alert('添加成功！');location.href='../index/index.html'</script>";
                }
            }
        }
       else{
           $this->display();
       }
    }
}