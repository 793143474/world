<?php
namespace Admin\Controller;
use Think\Controller;
class ProductController extends Controller {

    public function product_detail()
    {
        if(IS_POST){
            //接收页面参数
            $gid=I('get.gid','','strip_tags');
            $data=I('post.','','strip_tags');
            $file = $_FILES['pictures'];
            if($data['result']==null){

            }if($data['editor']==null){

            }
           else{

               /* $file = $_FILES['pictures'];*/
                //实例化模型
                $goods=D('Goods');
                $result=$goods->saveGoods($data,$file,$gid);
                if($result){
                //    session('info5','添加成功');
                    $this->display();
                    echo "<script>alert('添加成功！');location.href='product_list.html'</script>";
                 }
            }
        }else{
            $gid=I('get.gid','','strip_tags');
            $wh['gid']= $gid;
            $data=M('goods')->where($wh)->find();
            $this->assign('data',$data);
            session_start();
            $name = session('name');
            $this->assign('name',$name);
            $this->display();
        }
    }

    public function product_list()
    {
        if(IS_POST){
            $m=M('goods');
            $ser=I('request.ser','','strip_tags');
            $aa=I('post.select','','strip_tags');
            if($aa==1){
                $data=$m->where("name = '%s'",array($ser))->select();
                $this->assign('data',$data);
            }elseif($aa==2){
                $data=$m->where("bianhao = '%s'",array($ser))->select();
                $this->assign('data',$data);
            }elseif($aa==3){
                $data=$m->where("yname = '%s'",array($ser))->select();
                $this->assign('data',$data);
            }
            $this->display();
        }else{
            $m=M('goods');
            $wh['result']=0;
            $count = $m
                ->field(true)
                ->order('btime')->where($wh)
                ->count();
            $p = getpage($count,20);
            $data = $m
                ->field(true)->order('btime')->where($wh)->limit($p->firstRow, $p->listRows)->select();
            $this->assign('data', $data); // 赋值数据集
            $this->assign('page', $p->show()); // 赋值分页输出
            //删除功能
            if($m->where(array('gid'=>I('request.gid')))->delete()){
                echo "<script>alert('删除成功！');location.href='product_list.html'</script>";
            }
            session_start();
            $name = session('name');
            $this->assign('name',$name);
            $this->display();
        }
    }

    public function product_listone()
    {
        if(IS_POST){
            $m=M('goods');
            $ser=I('request.ser','','strip_tags');
            $aa=I('post.select','','strip_tags');
            if($aa==1){
                $data=$m->where("name = '%s'",array($ser))->select();
                $this->assign('data',$data);
            }elseif($aa==2){
                $data=$m->where("bianhao = '%s'",array($ser))->select();
                $this->assign('data',$data);
            }elseif($aa==3){
                $data=$m->where("yname = '%s'",array($ser))->select();
                $this->assign('data',$data);
            }
            $this->display();
        }else{
            $m=M('goods');
            $wh['result']='真';
            $count = $m
                ->field(true)
                ->order('btime')->where($wh)
                ->count();
            $p = getpage($count,20);
            $data = $m
                ->field(true)->order('btime')->where($wh)->limit($p->firstRow, $p->listRows)->select();
            $this->assign('data', $data); // 赋值数据集
            $this->assign('page', $p->show()); // 赋值分页输出
            //删除功能
            if($m->where(array('gid'=>I('request.gid')))->delete()){
                echo "<script>alert('删除成功！');location.href='product_listone.html'</script>";
            }
            session_start();
            $name = session('name');
            $this->assign('name',$name);
            $this->display();
        }
    }

    //商品批量删除
    public function bdel()
    {
        $message=M('goods');
        $ids=I('request.gid');
        $where['gid']=array('in',$ids);
        if($ids){
            if($message->where($where)->delete()){
                echo "<script>alert('删除成功！');location.href='product_list.html'</script>";
            }else{
                echo "<script>alert('删除失败！');location.href='product_list.html'</script>";
            }
        }else{
            echo "<script>alert('未选中任何内容！');location.href='product_list.html'</script>";
        }
    }

    //送鉴批量删除
    public function del(){
        $message=M('songjian');
        $ids=I('request.sid');
        $where['sid']=array('in',$ids);
        if($ids){
            if($message->where($where)->delete()){
                echo "<script>alert('删除成功！');location.href='songjian.html'</script>";
            }else{
                echo "<script>alert('删除失败！');location.href='songjian.html'</script>";
            }
        }else{
            echo "<script>alert('未选中任何内容！');location.href='songjian.html'</script>";
        }
    }

    public function product_listtwo()
    {
        if(IS_POST){
            $m=M('goods');
            $ser=I('request.ser','','strip_tags');
            $aa=I('post.select','','strip_tags');
            if($aa==1){
                $data=$m->where("name = '%s'",array($ser))->select();
                $this->assign('data',$data);
            }elseif($aa==2){
                $data=$m->where("bianhao = '%s'",array($ser))->select();
                $this->assign('data',$data);
            }elseif($aa==3){
                $data=$m->where("yname = '%s'",array($ser))->select();
                $this->assign('data',$data);
            }
            $this->display();
        }else{
            $m=M('goods');
            $wh['result']='假';
            $count = $m
                ->field(true)
                ->order('btime')->where($wh)
                ->count();
            $p = getpage($count,20);
            $data = $m
                ->field(true)->order('btime')->where($wh)->limit($p->firstRow, $p->listRows)->select();
            $this->assign('data', $data); // 赋值数据集
            $this->assign('page', $p->show()); // 赋值分页输出
            //删除功能
            if($m->where(array('gid'=>I('request.gid')))->delete()){
                echo "<script>alert('删除成功！');location.href='product_listtwo.html'</script>";
            }
            session_start();
            $name = session('name');
            $this->assign('name',$name);
            $this->display();
        }
    }

    public function product_category()
    {
        if(IS_POST){
            $m=M('category');
            $p=I('post.P_A','','strip_tags');
            $newname=I('post.newname');
            $arr['zhi']=$newname;
            if($p==0){
                $cid=I('request.cid','','strip_tags');
                $whe['cid']=$cid;
                $m->where($whe)->save($arr);
            }elseif($p==1){
                $m->where(array('cid'=>I('request.cid')))->delete($arr);
            }elseif($p==2){
            }
            $this->display();
            echo "<script>alert('修改成功！');location.href='product_category.html'</script>";
        }else{
            $m=M('category');
            $aaa=$m->where(array('pid'=>0))->select();
            $this->assign('aaa',$aaa);

            //分级
            $arr=$m->select();
            $tree=get_sort($arr);
            $this->assign('arr',$tree);

            session_start();
            $name = session('name');
            $this->assign('name',$name);
            $this->display();
        }
    }

    public function product_gory(){
        if(IS_AJAX){
            $pcategory=I('post.pcategory','','strip_tags');
            $arr=M('category')->where(array('pcategory'=>$pcategory))->find();
            if(empty($pcategory)){
                $data[] = '不能为空';
                echo json_encode($data);
            }else if(count($arr)==''){
                M('category')->add(array('pcategory'=>$pcategory));
                $data[] = '1';
                echo json_encode($data);
            }else{
                $data[] = '添加失败';
                echo json_encode($data);
            }
            $this->display('product_category');
        } else{
            session_start();
            $name = session('name');
            $this->assign('name',$name);
            $data[] = 'AJAX请求失败！';
            echo json_encode($data);
        }

    }
    public function songjian(){
        if(IS_POST){
            $m=M('songjian');
            $ser=I('request.ser','','strip_tags');
            $aa=I('post.select','','strip_tags');
            if($aa==1){
                $data=$m->where("cname = '%s'",array($ser))->select();
                $this->assign('data',$data);
            }elseif($aa==2){
                $data=$m->where("bianhao = '%s'",array($ser))->select();
                $this->assign('data',$data);
            }elseif($aa==3){
                $data=$m->where("auther = '%s'",array($ser))->select();
                $this->assign('data',$data);
            }
            $this->display();
        }else{
            $m=M('songjian');
            $wh['style']=2;
           // $data=$m->where($wh)->select();
            $count = $m
                ->field(true)
                ->where($wh)
                ->order('btime desc')
                ->count();
            $p = getpage($count,20);
            $data = $m
                ->field(true)
                ->where($wh)
                ->order('btime desc')->limit($p->firstRow, $p->listRows)->select();
            $data=suoluetu($data);
            $this->assign('data', $data); // 赋值数据集
            $this->assign('page', $p->show()); // 赋值分页输出
           // $this->assign('data',$data);
            //删除列表
            $sid = I('request.sid');
           if($m->where(array('sid' => $sid))->delete()){
               echo "<script>alert('删除成功！');location.href='songjian.html'</script>";
            }
            session_start();
            $name = session('name');
            $this->assign('name',$name);
            $this->display();
        }
    }
    public function songjian_edit(){
        if(IS_POST){
            $sid = I('request.sid','','strip_tags');
            $daa=M('songjian')->where("sid = '%d'",array($sid))->select();

            $cname=$daa[0]['cname'];
            $bianhao=I('request.bianhao','','strip_tags');
            $first_trial=I('request.first_trial','','strip_tags');
            $yname=I('request.yname','','strip_tags');
            $laiyuan=I('request.laiyuan','','strip_tags');
            $cztime=I('request.cztime','','strip_tags');
            $size=I('request.size','','strip_tags');

            $w['yname']=$yname;                       //根据艺术家的名字，来获得艺术家的id；
            $dart=M('artists')->where($w)->find();
          //  dump($dart);die;
            $yid=$dart['yid'];
            $awh['yid']=$yid;

            if($bianhao!=''){
                $time = date("Y-m-d");
                $wh['first_time']=$time;
                $wh['style']=$first_trial;
                $wh['bianhao']=$bianhao;
                $wh['category']=I('request.category','','strip_tags');
                $wh['yname']=I('request.auther','','strip_tags');
                $wh['size']=$size;
                M('songjian')->where("sid = '%d'",array($sid))->save($wh);
                                              //goods表中查询编号是够重复
                $da=M('goods')->where($wh)->select();
              //  dump($da);exit;
                if(count($da)==''){
                  //  $wh=$daa[0];

                    $wh['name']=$cname;
                    $wh['btime']=$daa[0]['btime'];
                    $wh['laiyuan']=$laiyuan;

                    $wh['banner']=$daa[0]['banner'];
                    $wh['pictures']=$daa[0]['pictures'];
                    $wh['owner']=$daa[0]['owner'];
                    $wh['mobile']=$daa[0]['mobile'];
                    $wh['cztime']=$cztime;
                   // dump($wh);die;
                    M('goods')->add($wh);

                    //获取存入goods表中的商品的id
                    $daaa=M('goods')->where(array('bianhao'=>$bianhao))->find();
                    $gid=$daaa['gid'];
                    $awh['gid']=$gid;
                    //将yid，gid存入到art_googds的表中
                    M('art_goods')->add($awh);
                }
            }
            $this->redirect('product/songjian', array(''), 0, '页面跳转中...');
        }else{
            $sid = I('request.sid');
            $m = M('songjian');

            $data = $m->where("sid = '%d'",array($sid))->select();
            foreach($data as $k => $v){

                $aa=$v["pictures"];
                $hell = explode(',',$aa);
                $data[$k]['images']=$hell;
            }

            $this->assign('data', $data);

            //分级
            $dat=M('category')->select();
            $dat=get_sort($dat);
            $this->assign('dat', $dat);


            $datt=M('material')->select();
            $datt=get_sort($datt);
            $this->assign('datt', $datt);



            //生成备案编号
            $time=date("Ymdhis");
            $bh='JD'.rand(1000,9999).$time;
            $wh['bianhao']=$bh;
            $aaaa=M('goods')->where($wh)->find();
            if(count($aaaa)>0){

            }else{
                $this->assign('bh',$bh);
            }
            session_start();
            $name = session('name');
            $this->assign('name',$name);
            $this->display();

        }
    }
    public function songjian_one(){
        $m=M('songjian');
        $wh['style']=1;
        //$data=$m->where($wh)->select();
        $count = $m
            ->field(true)
            ->where($wh)
            ->order('btime desc')
            ->count();
        $p = getpage($count,20);
        $data = $m
            ->field(true)
            ->where($wh)
            ->order('btime desc')->limit($p->firstRow, $p->listRows)->select();
        $data=suoluetu($data);
       // dump($data);die;
        $this->assign('data',$data);
        $this->assign('page', $p->show());
        //删除列表
        $sid = I('request.sid');
        $m->where(array('sid' => $sid))->delete();
        $this->display();

    }
    public function songjian_two(){
        $m=M('songjian');
        $wh['style']=0;
        $count = $m
            ->field(true)
            ->where($wh)
            ->order('btime desc')
            ->count();
        $p = getpage($count,20);
        $data = $m
            ->field(true)
            ->where($wh)
            ->order('btime desc')->limit($p->firstRow, $p->listRows)->select();
        $data=suoluetu($data);
        $this->assign('data',$data);
        $this->assign('page', $p->show());
        //删除列表
        $sid = I('request.sid');
        $m->where(array('sid' => $sid))->delete();


        session_start();
        $name = session('name');
        $this->assign('name',$name);
        $this->display();
    }
    public function category(){
        if(IS_POST){
            $val=I('request.category','','strip_tags');
            $pcategory=I('request.pcategory','','strip_tags');
            $arr=M('category')->where(array('pcategory'=>$pcategory))->find();
            if(empty($pcategory)){
               echo  '不能为空';
            }else if(count($arr)==''){
                $wh['pid']=$val;
                $wh['pcategory']=$pcategory;
                M('category')->add($wh);
                $this->redirect('product/product_category', array(''), 0, '页面跳转中...');
            }else{
               echo  '添加失败';
            }
        }
    }

//作品材质
    public function product_material()
    {
        if(IS_POST){
            $m=M('material');
            $p=I('post.P_A');
            $newname=I('post.newname');
            $arr['zhi']=$newname;
            if($p==0){
                $cid=I('request.cid');
                $whe['cid']=$cid;
                $m->where($whe)->save($arr);
            }elseif($p==1){
                $m->where(array('cid'=>I('request.cid')))->delete($arr);
            }elseif($p==2){
            }
            $this->display();
            echo "<script>alert('修改成功！');location.href='product_material.html'</script>";
        }else{
            $m=M('material');
            $aaa=$m->where(array('pid'=>0))->select();
            $this->assign('aaa',$aaa);

            //分级
            $arr=$m->select();
            $tree=get_sort($arr);
            $this->assign('arr',$tree);


            session_start();
            $name = session('name');
            $this->assign('name',$name);
            $this->display();
        }
    }
    public function material(){
        if(IS_POST){
            $val=I('request.category','','strip_tags');
            $pcategory=I('request.pcategory','','strip_tags');
            $arr=M('material')->where(array('material'=>$pcategory))->find();
            if(empty($pcategory)){
                echo  '不能为空';
            }else if(count($arr)==''){
                $wh['pid']=$val;
                $wh['material']=$pcategory;
                M('material')->add($wh);
                $this->redirect('product/product_material', array(''), 0, '页面跳转中...');
            }else{
                echo  '添加失败';
            }
        }
    }
}