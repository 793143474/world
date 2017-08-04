<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cmn-Hans">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>鉴证备案——提交成功</title>
    <meta name="keywords" content="关键词">
    <meta name="description" content="网站描述">
    <meta name="author" content="heyunqiang99@163.com">
    <meta name="renderer" content="webkit">
    <link rel="shortcut icon" href="/beian/Public/home/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="/beian/Public/home/css/common.css">
    <style>
    	.box{
    		overflow: hidden;
    		min-height: 600px;
    		margin: auto;
    		margin-top: 30px;
    		width: 1200px;
    		
    	}
    	.box_nr{
    		overflow: hidden;
    		border: 1px solid #DCDCDC;
    		padding: 50px;
    		text-align: center;
    	}
    	.box_nr h3{
    		font-size: 24px;
    		line-height: 64px;
    		color: #333333;
    	}
    	.box_nr p{
    		color: #666666;
    		line-height: 48px;
    		font-size: 18px;
    	}
    	.a{
    		overflow: hidden;
    		text-align: center;
    	}
    	.a a{
    		display: inline-block;
    		margin:0 20px;
    		line-height: 32px;
    		font-size: 16px;
    	}
    </style>
</head>

<body>
<!-- 顶部开始 -->
<div class="public-header cl">
    <div class="header-topbar cl">
    <div class="public-container">
        <div class="header-links fl">
            <a href="javacript:;">华地收藏</a>
            <a href="javacript:;">璟祥拍卖首页</a>
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
                <li><a href="<?php echo U('work/works');?>">作品</a></li>
                <li class="on"><a href="<?php echo U('union/union');?>">诚信联盟</a></li>
            </ul>
        </div>
    </div>
</div>
<!--<div class="public-header cl">
    <div class="header-topbar cl">
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
        <a class="header-logo fl" href="index.html"></a>
        <h1 class="fl">华地艺术品鉴证备案中心</h1>
    </div>
    <div class="header-nav">
        <div class="public-container cl">
            <ul class="nav-mian">
                <li class="on"><a href="index.html">首页</a></li>
                <li><a href="javacript:;">鉴证专场</a></li>
                <li><a href="javacript:;">艺术家</a></li>
                <li><a href="javacript:;">作品</a></li>
                <li><a href="javacript:;">诚信联盟</a></li>
            </ul>
        </div>
    </div>
</div>-->
<!-- 顶部结束 -->
<div class="box">
	<div class="box_nr">
		<h3>提交成功!</h3>
		<p>系统正在审核中，我们会尽快联系您。</p>
		<div class="a">
			<a href="<?php echo U('index/index');?>">返回首页</a>
		</div>
	</div>
</div>
<!-- 底部开始 -->
<div class="public-footer">
    <div class="public-container cl">
        <div class="footer-left fl">
            <a class="footer-logo" href="javacript:;"></a>
            <ul class="footer-nav cl">
                <li class="first"><a href="javacript:;">网站首页</a></li>
                <li><a href="javacript:;">关于我们</a></li>
                <li><a href="javacript:;">联系我们</a></li>
                <li><a href="javacript:;">加入我们</a></li>
                <li><a href="javacript:;">版权说明</a></li>
                <li class="last"><a href="javacript:;">免责说明</a></li>
            </ul>
            <ul class="footer-copyrights cl">
                <li class="first"><a href="javacript:;">华地收藏 www.hdcac.com</a></li>
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
<!--<div class="public-footer">
    <div class="public-container cl">
        <div class="footer-left fl">
            <a class="footer-logo" href="javacript:;"></a>
            <ul class="footer-nav cl">
                <li class="first"><a href="javacript:;">网站首页</a></li>
                <li><a href="javacript:;">关于我们</a></li>
                <li><a href="javacript:;">联系我们</a></li>
                <li><a href="javacript:;">加入我们</a></li>
                <li><a href="javacript:;">版权说明</a></li>
                <li class="last"><a href="javacript:;">免责说明</a></li>
            </ul>
            <ul class="footer-copyrights cl">
                <li class="first"><a href="javacript:;">华地收藏 www.hdcac.com</a></li>
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
</div>-->
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