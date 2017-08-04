<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cmn-Hans">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>鉴证备案——作品</title>
	<meta name="keywords" content="关键词">
	<meta name="description" content="网站描述">
	<meta name="author" content="heyunqiang99@163.com">
	<meta name="renderer" content="webkit">
	<link rel="shortcut icon" href="/beian/Public/home/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="/beian/Public/home/css/common.css">
	<link rel="stylesheet" href="/beian/Public/home/layui/css/layui.css" />
	<link rel="stylesheet" href="/beian/Public/home/css/works.css" />
</head>

<body>
<!-- 顶部开始 -->
<div class="public-header cl">
	<div class="header-topbar cl">
    <div class="public-container">
        <div class="header-links fl">
            <a href="<?php echo U('');?>">华地收藏</a>
            <a href="http://www.jxpmcn.com">璟祥拍卖首页</a>
        </div>
        <div class="header-menu fr">
            <ul>
                <li class="item-w300">
                    <!-- 未登录 -->
                    <?php if(($nickname) == ""): ?><div class="login">
                        <a href="<?php echo U('login/login');?>">您好,请<span>登录</span></a>
                        <a href="<?php echo U('login/register');?>">免费注册</a>
                    </div><?php endif; ?>
                    <!-- 登录之后 -->
                    <?php if(($nickname) != ""): ?><div class="login">
                            <a href="javacript:;">您好,<span><?php echo ($nickname); ?></span>!</a>
                            <a href="<?php echo U('login/tuichu');?>">退出</a>
                        </div><?php endif; ?>
                    <div class="afterlogin" style="display: none;">
                        <a href="javacript:;">您好,<span><?php echo ($nickname); ?></span>!</a>
                        <a href="javacript:;">退出</a>
                    </div>
                </li>
                <li class="item"><a href="javacript:;">我的订单</a></li>
                <li class="item">
                    <a class="nav-more" href="javacript:;">我的收藏</a>
                    <div class="sub-nav">
                        <a href="javacript:;">我的任务</a>
                        <a href="javacript:;">我的账户</a>
                        <a href="javacript:;">我的订单</a>
                        <a href="javacript:;">我的认证</a>
                        <a href="javacript:;">历史购买</a>
                    </div>
                </li>
                <li class="item">
                    <a class="nav-more" href="javacript:;">客&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;户</a>
                    <div class="sub-nav">
                        <a href="javacript:;">帮助中心</a>
                        <a href="javacript:;">售后服务</a>
                        <a href="javacript:;">在线客服</a>
                        <a href="javacript:;">意见反馈</a>
                    </div>
                </li>
                <li class="item">
                    <a class="nav-more" href="javacript:;">商&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;户</a>
                    <div class="sub-nav">
                        <a href="javacript:;">合作中心</a>
                        <a href="javacript:;">商家帮助</a>
                    </div>
                </li>
                <li class="item"><a href="javacript:;">手机收藏网</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="header-logo-search public-container cl">
    <a class="header-logo fl" href="<?php echo U(index/index);?>"></a>
    <h1 class="fl">华地艺术品鉴证备案中心</h1>
</div>


    <div class="header-nav">
        <div class="public-container cl">
            <ul class="nav-mian">
                <li><a href="<?php echo U('index/index');?>">首页</a></li>
                <li><a href="<?php echo U('special/special_list');?>">鉴证专场</a></li>
                <li ><a href="<?php echo U('artist/artist_list');?>">艺术家</a></li>
                <li class="on"><a href="<?php echo U('work/works');?>">作品</a></li>
                <li><a href="<?php echo U('union/union');?>">诚信联盟</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- 顶部结束 -->
<!-- 顶部结束 -->
<div class="mian_box">
	<div class="main_nav">
		<form action="works" method="post" enctype="multipart/form-data" >
			<ul>
				<li>找作品：</li>
				<li><label><input type="radio" checked="checked"  name="works" value="0">按备案编号</label></p></li>
				<li><label><input type="radio" name="works" value="1">按作品名称</label></li>
				<li><label><input type="radio" name="works" value="2">按艺术家姓名</label></li>
				<li><label><input type="radio" name="works" value="3">按机构名称</label></li>
			</ul>
			<div class="mian_search_box">
				<input type="text" name="z_c" placeholder="请输入搜索备案编号/作品名称/艺术家姓名/机构名称">
				<button type="submit">搜索</button>
				<span>清除搜索</span>
			</div>
		</form>
	</div>
	<div class="work_mian">
		<div class="works_nav">
			<div class="worksnav">
                <div class="tiem">
                    <h4>作品来源</h4>
                    <div class="tiem_class">
                        <a href="javascript:" class="active" data-type = "0">全部</a>
                        <a href="javascript:" data-type = "1">鉴定备案作品</a>
                        <a href="javascript:" data-type = "2">技术备案作品</a>
                        <a href="javascript:" data-type = "3">cars认证作品</a>
                        <a href="javascript:" data-type = "4">在线鉴定作品</a>
                    </div>
                </div>
                <div class="tiem">
                    <h4>作品年代</h4>
                    <div class="tiem_class">
                        <a href="javascript:" class="active"  data-type = "0">全部</a>
                        <a href="javascript:" data-type = "1">21世纪20年代</a>
                        <a href="javascript:" data-type = "2">21世纪10年代</a>
                        <a href="javascript:" data-type = "3">21世纪00年代</a>
                        <a href="javascript:" data-type = "4">90年代</a>
                        <a href="javascript:" data-type = "5">80年代</a>
                        <a href="javascript:" data-type = "6">70年代</a>
                        <a href="javascript:" data-type = "7">60年代</a>
                        <a href="javascript:" data-type = "8">50年代</a>
                        <a href="javascript:" data-type = "9">40年代</a>
                        <a href="javascript:" data-type = "10">30年代</a>
                    </div>
                </div>
                <div class="tiem">
                    <h4>作品类别</h4>
                    <div class="tiem_class">
                        <a href="javascript:" class="active" data-type = "0">国画</a>
                        <a href="javascript:" data-type = "1">书法</a>
                        <a href="javascript:" data-type = "2">油画</a>
                        <a href="javascript:" data-type = "3">素描</a>
                        <a href="javascript:" data-type = "4">雕塑</a>
                        <a href="javascript:" data-type = "5">版画</a>
                        <a href="javascript:" data-type = "6">水彩</a>
                        <a href="javascript:" data-type = "7">其他</a>
                    </div>
                </div>
                <div class="tiem">
                    <h4>作品备案时间</h4>
                    <div class="tiem_class">
                        <div class="layui-form-pane">
                            <div class="layui-form-item">
                                <label class="layui-form-label">起始时间：</label>
                                <div class="layui-input-inline">
                                    <input class="layui-input" placeholder="开始日" id="LAY_demorange_s" value='0'>
                                    <span class="icon_time"></span>
                                </div>
                                <label class="layui-form-label">截止时间：</label>
                                <div class="layui-input-inline">
                                    <input class="layui-input" placeholder="截止日" id="LAY_demorange_e" value='0'>
                                    <span class="icon_time"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
		<div class="works_comment">
			<div class="works_sort">
				<strong>排序</strong>
                <div class="sort_one">
                    <p>按备案日期排序</p>
					<span class="up_sort active">
						<a href="javascript:" data-type = "0"></a>
					</span>
					<span class="down_sort">
						<a href="javascript:" data-type = "1"></a>
					</span>
                    <p>按备案编号排序</p>
					<span class="up_sort">
						<a href="javascript:" data-type = "2"></a>
					</span>
					<span class="down_sort">
						<a href="javascript:" data-type = "3"></a>
					</span>
                </div>
			</div>
            <div class="works_list">
                <ul id="yeconnet">
                    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                            <div class="auction-img">
                                <a href="<?php echo U('details/details',array('gid'=>$vo['gid']));?>">
                                    <img src="/beian/Public/Upload/<?php echo ($vo['banner']); ?>" alt="placeholder+image">
                                </a>
                            </div>
                            <p class="auction_time">编号：<span><?php echo ($vo['bianhao']); ?></span></p>
                            <p class="auction_title">
                                <a href="#"><?php echo ($vo['name']); ?></a>
                            </p>
                            <div class="auction_meta">
                                <p class="price">来源:<span><?php echo ($vo['lainame']); ?></span></p>
                                <p class="price">作者:<span><?php echo ($vo['yname']); ?></span></p>
                                <p class="price">年代:<span><?php echo ($vo['cztime']); ?></span></p>
                                <p class="price">尺寸:<span><?php echo ($vo['size']); ?></span></p>
                            </div>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
                <div class="clearfix"></div>
                <div id="yema"></div>
            </div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<button onclick="ceshi();"></button>
<!-- 底部开始 -->
<div class="public-footer">
    <div class="public-container cl">
        <div class="footer-left fl">
            <a class="footer-logo" href="javacript:;"></a>
            <ul class="footer-nav cl">
                <li class="first"><a href="<?php echo U('index/index');?>">网站首页</a></li>
                <li><a href="http://www.jxpmcn.com/index/about/about">关于我们</a></li>
                <li><a href="http://www.jxpmcn.com/index/about/call">联系我们</a></li>
                <li><a href="javacript:;">加入我们</a></li>
                <li><a href="javacript:;">版权说明</a></li>
                <li class="last"><a href="javacript:;">免责说明</a></li>
            </ul>
            <ul class="footer-copyrights cl">
                <li class="first"><a href="<?php echo U('index/index');?>">华地收藏 www.hdcac.com</a></li>
                <li>Copyright Reserved</li>
                <li>2015-2017 华地文化艺术品中心版权</li>
                <li class="last">电信与信息服务业务经营许可证</li>
            </ul>
            <ul class="footer-copyrights cl">
                <li class="first">24小时服务热线：4008-207-108</li>
                <li>公司名称：华地艺术品（上海）有限公司</li>
                <li class="last">沪ICP备16022115号</li>
            </ul>
        </div>
        <div class="footer-right fr">
            <dl>
                <dt class="footer-erweima01"></dt>
                <dd>公众号二维码</dd>
            </dl>
            <dl>
                <dt class="footer-erweima02"></dt>
                <dd>微信服务二维码</dd>
            </dl>
        </div>
    </div>
</div>

<!-- 底部结束 -->
</body>

</html>
<script src="/beian/Public/home/lib/jquery.min.js"></script>
<script src="/beian/Public/home/lib/jquery.SuperSlide.2.1.1.js"></script>
<script type="text/javascript" src="/beian/Public/home/layui/lay/dest/layui.all.js" ></script>
<script type="text/javascript" src="/beian/Public/home/js/works.js" ></script>
<script>
	function ceshi(){
		$.ajax({
			url:'http://192.168.0.179/beian/index.php/work/works2',
			type:'post',
			dataType:'JSON',
			data:{sorce:1,type:1,years:0,starttime:'',endtime:''},
			success:function(data){
				console.log(data)
			},
			error:function(){
				alert("error")
			}
		})
	}

</script>