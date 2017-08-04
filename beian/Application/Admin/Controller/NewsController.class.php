<?php
namespace Admin\Controller;
use Think\Controller;
class NewsController extends Controller
{
    //新闻列表
    public function news_list()
    {
        if(IS_POST){
            $m=M('news');
            $ser=I('request.ser');
            $aa=I('post.select');
            if($aa==1){
                $data=$m->where("ntitle = '%s'",array($ser))->select();
                $this->assign('data',$data);
            }elseif($aa==2){
                $data=$m->where("auther = '%s'",array($ser))->select();
                $this->assign('data',$data);
            }elseif($aa==3){
                $data=$m->where("source = '%s'",array($ser))->select();
                $this->assign('data',$data);
            }
            $this->display();
        }else{
            //获取数据库中所有的数据
            //分页
            $m = M('news');
            $count = $m->count();
            $p = getpage($count, 20);
            $data = $m->field(true)->order('newsdate')->limit($p->firstRow, $p->listRows)->select();
            $this->assign('data', $data); // 赋值数据集
            $this->assign('page', $p->show()); // 赋值分页输出
            //删除列表
            $nid = I('request.nid');
            if($m->where(array('nid' => $nid))->delete()){
                $this->display();
                echo "<script>alert('删除成功！');location.href='news_list.html'</script>";
            }
            session_start();
            $name = session('name');
            $this->assign('name',$name);
            $this->display();
        }
    }
    //新闻添加
    public function news_detail()
    {
        if (IS_POST) {
            $data = I('post.');
            if ($data['ntitle'] == null) {
                session('info1', '新闻标题不能为空');
                $this->display();
            } elseif ($data['abstract'] == null) {
                session('info2', '新闻摘要不能为空');
                $this->display();
            } elseif ($data['auther'] == null) {
                session('info3', '新闻作者不能为空');
                $this->display();
            } elseif ($data['source'] == null) {
                session('info4', '新闻来源不能为空');
                $this->display();
            } else {
                $file = $_FILES['banner'];
                $news = D('news');
                $result = $news->addNews($data, $file);
                if ($result) {
                    echo "<script>alert('添加成功！');location.href='news_list.html'</script>";
                    $this->display();
                }
            }
        } else {
            session_start();
            $name = session('name');
            $this->assign('name',$name);
            $this->display();
        }
    }
    //新闻编辑
    public function edit()
    {
        $nid = I('request.nid','','strip_tags');
        $m = M('news');
        $data = $m->where(array('nid' => $nid))->find();
        $this->assign('data', $data);
        if(IS_POST){
            $data['ntitle']=$_POST['ntitle'];
            $data['abstract']=$_POST['abstract'];
            $data['style']=$_POST['style'];
            $data['auther']=$_POST['auther'];
            $data['newsdate']=date("Y-m-d H:i:s");
            $data['zhushi']=$_POST['zhushi'];
            $data['tjgjz']=$_POST['tjgjz'];
            $data['tuijian']=$_POST['tuijian'];
            $data['banner']=$_POST['banner'];
            $data['newscontent']=$_POST['newscontent'];
            $m->where(array('nid'=>I('request.nid')))->save($data);
            $this->display();
            echo "<script>alert('修改成功！');</script>";
            echo "<script>location.href='news_list.html'</script>";
        }else{

            session_start();
            $name = session('name');
            $this->assign('name',$name);
            $this->display();
        }
    }
    //问题添加
    public function problem_detail()
    {
        if (IS_POST) {
            $data = I('request.','','strip_tags');

            $artist = D('problem');
            $file = $_FILES['picture'];
            $result = $artist->save($data, $file);
            if ($result) {
                echo '';
                $this->display();
            }
        } else {

            session_start();
            $name = session('name');
            $this->assign('name',$name);
            $this->display();
        }
    }

    //问题列表
    public function problem_list(){
        if(IS_POST){
            $m=M('problem');
            $ser=I('request.ser','','strip_tags');
            $aa=I('post.select','','strip_tags');
            if($aa==1){
                $data=$m->where("title = '%s'",array($ser))->select();
                $this->assign('data',$data);
            }elseif($aa==2){
                $data=$m->where("edit = '%s'",array($ser))->select();
                $this->assign('data',$data);
            }elseif($aa==3){
                $data=$m->where("laiyuan = '%s'",array($ser))->select();
                $this->assign('data',$data);
            }
            $this->display();
        }else{
            $m=M('problem');
            $data=$m->select();
            $this->assign('data',$data);
            //删除列表
            $nid = I('request.id');
            if($m->where(array('id' => $nid))->delete()){
                echo "<script>alert('删除成功！');location.href='problem_list.html'</script>";
                $this->display();
            }
            session_start();
            $name = session('name');
            $this->assign('name',$name);
            $this->display();
        }
    }

    //问题编辑
    public function problem_edit()
    {
        $id = I('request.id','','strip_tags');
        $m = M('problem');
        $data = $m->where(array('id' => $id))->find();
        $this->assign('data', $data);
        if (IS_POST) {
            $data['title'] = $_POST['title'];
            $data['laiyuan'] = $_POST['laiyuan'];
            $data['zhanyao'] = $_POST['zhanyao'];
            $data['neirong'] = $_POST['neirong'];
            $data['btime'] = date("Y-m-d H:i:s");
            $data['edit'] = $_POST['edit'];
            $data['guanjian'] = $_POST['guanjian'];
            $m->where(array('id' => I('request.id')))->save($data);
            $this->display();
            echo "<script>alert('修改成功！');</script>";
            echo "<script>location.href='problem_list.html'</script>";
        } else {
            session_start();
            $name = session('name');
            $this->assign('name',$name);
            $this->display();
        }
    }

    //新闻批量删除
    public function bdel(){
        $message=M('news');
        $ids=I('request.nid');
        $where['nid']=array('in',$ids);
        if($ids){
            if($message->where($where)->delete()){
                echo "<script>alert('删除成功！');location.href='news_list.html'</script>";
            }else{
                echo "<script>alert('删除失败！');location.href='news_list.html'</script>";
            }
        }else{
            echo "<script>alert('未选中任何内容！');location.href='news_list.html'</script>";
        }
    }

    //问题批量删除
    public function del(){
        $message=M('problem');
        $ids=I('request.id');
        $where['id']=array('in',$ids);
        if($ids){
            if($message->where($where)->delete()){
                echo "<script>alert('删除成功！');location.href='problem_list.html'</script>";
            }else{
                echo "<script>alert('删除失败！');location.href='problem_list.html'</script>";
            }
        }else{
            echo "<script>alert('未选中任何内容！');location.href='problem_list.html'</script>";
        }
    }

}