<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/19
 * Time: 14:57
 */
/*function sp_getslide($slide,$limit=3,$order = "listorder ASC"){
    $slide_obj= M("");
    $join = '__SLIDE__ as b on a.cid =b.slide_cid';
    if($order == ''){
        $order = "b.listorder ASC";
    }
    if ($limit == 0) {
        $limit = 3;
    }
    return $slide_obj->alias("a")->join($join)->where("a.cat_idname='$slide' and b.slide_status=1")->order($order)->limit('0,'.$limit)->select();
}*/
/**
 * TODO 基础分页的相同代码封装，使前台的代码更少
 * @param $count 要分页的总记录数
 * @param int $pagesize 每页查询条数
 * @return \Think\Page
 */
function getpage($count, $pagesize = 10)
{
    $p = new Think\Page($count, $pagesize);
    $p->setConfig('header', '<spam class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</spam>');
    $p->setConfig('prev', '上一页');
    $p->setConfig('next', '下一页');
    $p->setConfig('last', '末页');
    $p->setConfig('first', '首页');
    $p->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');
    $p->lastSuffix = false;//最后一页不显示为总页数
    return $p;
}

//base64加密
function jiami($str = '')
{
    $data = base64_encode($str);
    return $data;
}

//base64解密
function jiemi($str = '')
{
    $data = base64_decode($str);
    return $data;
}

//获取数据库中新闻news中的字段
function sel_news($str)
{
    $vnn['tuijian'] = $str;
    $result = M('news as n')->join('on_newsspecial as b on n.style = b.styles')->where($vnn)->order('n.newsdate desc')->select();
    //dump($result);
    return $result;
}

//艺术家查询
function sel_artists()
{
    $mm = M('artists');
    $data = $mm->order('time desc')->select();
    return $data;
}

//获取商品goods
function sel_gd($str)
{
    $where['result'] = $str;
    $goods = M('goods')
        ->join('left JOIN  on_laiyuan ON on_goods.laiyuan=on_laiyuan.style1')
        ->where($where)->order('jdtime  desc')->select();
    return $goods;
}

//专场的获得
//根据开始时间和结束时间确定专场有没有开始
function sel_spd()
{
    $nowtime = date("Y-m-d H:i:s");    //当前时间
    $tt = M('special')->order('starttime asc')->select();
    foreach($tt as $k=>$val){
        $starime=$val['starttime'];
        $endime=$val['endtime'];
        if(strtotime($nowtime) >= strtotime($endime)){
            $arr[] = $val;                                     //获取已经结束的拍卖会
        }elseif(strtotime($nowtime) < strtotime($starime)){  //获取未开始的拍卖会
            $array[] = $val;
        }else{
            $ar[] = $val;                                     //获取正在开始的拍卖会
        }
    }
    $a =array();
    $a[0] =$arr;
    $a[1] =$array;
    $a[2] =$ar;
    return $a;
}
//首页获取
function che_style_all($wor){
    $nvv=$wor['works'];
    $z_c=$wor['z_c'];
    if($nvv==0){
        $data=M('goods')->where(array('bianhao'=>$z_c))->select();
        return $data;
    }
    if($nvv==1){
        $data=M('goods')->where(array('name'=>$z_c))->select();
        return $data;
    }
    if($nvv==2){
        $data=M('goods')->where(array('yname'=>$z_c))->select();
        return $data;
    }
    if($nvv==3){
        $data=M('goods')->where(array('laiyuan'=>$z_c))->select();
        return $data;
    }
}

function getadmininfo(array $array)
{
    $m=M('admin');
    $name = $m->where($array)->find();
    return $name;
}

function addadmin(array $array)
{
    $m=M('admin');
    $data['name']=$array[0];
    $data['password']=$array[1];
    $data['time'] = time();
    $result = $m->add($data);
    return $result;
}

//验证码检测
function check_verify($code,$id=''){
    $verify = new \Think\Verify();
    return $verify->check($code,$id);
}
function getuserinfo(array $array)
{
    $m=M('user');
    $name = $m->where($array)->find();
    return $name;
}

function adduser(array $array)
{

    $time=date('Y-m-d');
    $m=M('user');
    $data['nickname']=$array[0];
    $data['password']=$array[1];
    $data['moblie']=$array[2];
    $data['time'] =$time;
    $result = $m->add($data);
    return $result;
}


//缩略图的调取显示
function suoluetu($data){
    foreach($data as $c=>$v){

        $aphoto=$v['aphoto'];
        $cc=explode("/",$aphoto);
        $data[$c]['aphoto']=$cc[0].'/'.'_'.$cc[1];

        $banner=$v['banner'];
        $pictures=$v['pictures'];
        $aa=explode("/",$banner);
        $data[$c]['banner']=$aa[0].'/'.'_'.$aa[1];
        $aaa=explode(",",$pictures);
        $arr=array();
        foreach($aaa as $k){
            $bb=$k;
            $a=explode("/",$bb);
            $pictu=$a[0].'/'.'_'.$a[1];
            $arr[]=$pictu;
        }
        $data[$c]['pictures']=$arr;
    }
          return $data;
}

/* 无限级分类树 */

function get_sort($data,$pid=0,$level=0,$h='|—>'){
    $tree=array();
    foreach($data as $k=>$v){
        if($v['pid']==$pid){
            $v['level']=$level+1;
            $v['h']=str_repeat($h,$level);
            $tree[]=$v;
            $tree=array_merge($tree,get_sort($data,$v['cid'],$v['level'],$h));
        }
    }
    return $tree;
}