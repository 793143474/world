<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cmn-Hans">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>鉴定备案——专场详情</title>
    <meta name="keywords" content="关键词">
    <meta name="description" content="网站描述">
    <meta name="author" content="heyunqiang99@163.com">
    <meta name="renderer" content="webkit">
    <link rel="shortcut icon" href="/beian/Public/home/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="/beian/Public/home/css/common.css">
    <link rel="stylesheet" href="/beian/Public/home/css/special.css" />
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

  <!--  <div class="header-topbar cl">
        <div class="public-container">
            <div class="header-links fl">
                <a href="javacript:;">华地收藏</a>
                <a href="javacript:;">璟祥拍卖首页</a>
            </div>
            <div class="header-menu fr">
                <ul>
                    <li class="item-w300">
                        &lt;!&ndash; 未登录 &ndash;&gt;
                        <div class="login">
                            <a href="javacript:;">您好,请<span>登录</span></a>
                            <a href="javacript:;">免费注册</a>
                        </div>
                        &lt;!&ndash; 登录之后 &ndash;&gt;
                        <div class="afterlogin" style="display: none;">
                            <a href="javacript:;">您好,<span>小虾米小虾米小虾米</span>!</a>
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
        <a class="header-logo fl" href="<?php echo U('index/index');?>"></a>
        <h1 class="fl">华地艺术品鉴证备案中心</h1>
    </div>-->
    <div class="header-nav">
        <div class="public-container cl">
            <ul class="nav-mian">
                <li><a href="<?php echo U('index/index');?>">首页</a></li>
                <li class="on"><a href="<?php echo U('special/Special_list');?>">鉴证专场</a></li>
                <li><a href="<?php echo U('artist/artist_list');?>">艺术家</a></li>
                <li><a href="<?php echo U('work/works');?>">作品</a></li>
                <li><a href="<?php echo U('union/union');?>">诚信联盟</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- 顶部结束 -->
<div class="mian_Box">
	<div class="dress">
		<a href="<?php echo U('index/index');?>">鉴证备案</a>&gt;
		<a href="<?php echo U('special/Special_list');?>">鉴证专场</a>&gt;
		<span>专场详情</span>
	</div>
	<div class="Special">
		<div class="special_top">
			<div class="special_pic">
				<img src="/beian/Public/Upload/<?php echo ($data['banner_pictures']); ?>">
			</div>
			<div class="special_tit">
				<h1><?php echo ($data['title']); ?></h1>
				<p class="time"><?php echo ($data['starttime']); ?></p>
				<p class="special_id"><?php echo ($data['address']); ?></p>
			</div>
			<a href="<?php echo U('biaodan/biaodan');?>">在线鉴定</a>
		</div>
		<div class="special_p">
			<p>
				<?php echo ($data['content']); ?>
			</p>
		</div>
	</div>
	<div class="what">
		<h3>什么是“中国艺术品鉴证备案服务"？</h3>
		<p>
			“中国艺术品鉴证备案服务”是华地推出的为艺术品建立“身份证”信息的服务。从艺术品源头出发，由艺术家本人对艺术品原作进行鉴定，华地对艺术品原作采集高清数据、作品物理成分采样检测、并对数据进行备案，同时备案数据可公开查询等措施，为每一件艺术品建立唯一、权威的“身份证”信息，从现在开始，让中国艺术品传承有序。
		</p>
	</div>
	<div class="nrews">
		<div class="news_nav">
			<h2>新闻资讯</h2 >
		</div>
		<div class="nrews_list">
			<ul>
				<?php if(is_array($result)): $i = 0; $__LIST__ = array_slice($result,0,12,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
						<a href="<?php echo U('news/news');?>"> · 【<?php echo ($vo['name']); ?>】<?php echo ($vo['ntitle']); ?></a>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
	</div>
</div>
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
<script type="text/javascript">
jQuery("#demo1").slide({
    mainCell: ".bd ul",
    effect: "top",
    autoPlay: true,
    triggerTime: 0
});
jQuery(".picScroll-left").slide({
    titCell: ".hd ul",
    mainCell: ".bd ul",
    autoPage: true,
    effect: "left",
    autoPlay: true,
    vis: 3,
    trigger: "click"
});
</script>