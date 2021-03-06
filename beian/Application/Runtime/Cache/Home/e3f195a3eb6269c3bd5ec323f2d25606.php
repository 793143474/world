<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cmn-Hans">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>鉴证备案——送鉴流程解释</title>
    <meta name="keywords" content="关键词">
    <meta name="description" content="网站描述">
    <meta name="author" content="heyunqiang99@163.com">
    <meta name="renderer" content="webkit">
    <link rel="shortcut icon" href="/beian/Public/home/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="/beian/Public/home/css/common.css">
    <link rel="stylesheet" href="/beian/Public/home/css/explain.css" />
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

    <!--<div class="header-topbar cl">
        <div class="public-container">
            <div class="header-links fl">
                <a href="<?php echo U('index/index');?>">华地收藏</a>
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
                <li class="on"><a href="<?php echo U('index/index');?>">首页</a></li>
                <li><a href="<?php echo U('special/Special_list');?>">鉴证专场</a></li>
                <li><a href="<?php echo U('artist/artist_list');?>">艺术家</a></li>
                <li><a href="<?php echo U('work/works');?>">作品</a></li>
                <li><a href="<?php echo U('union/union');?>">诚信联盟</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- 顶部结束 -->
<div class="explain_box">
	
	<div class="dress">
		<a href="<?php echo U('index/index');?>">鉴证备案</a>&gt;
		<a href="<?php echo U('artist/artist_list');?>">艺术家</a>&gt;
		<span>艺术家作品征集</span>
	</div>
	<h2><span>送鉴流程</span></h2>
	<div class="explain">
		<ul>
			<li>
				<h3>什么是线上申请？</h3>
				<p>答：线上申请是指，点击华地鉴证备案频道首页右侧的“我要送鉴”链接（http://beian.artron.net/censorship.php），在新弹出的窗口填写相应的作品信息（包括作品图片、名称、作者、尺寸）、藏家个人或者机构信息（包括姓名、联系电话、联系邮箱），确认无误后提交。提交后的作品状态为“待初审”。</p>
			</li>
			<li>
				<h3>什么是编辑作品初审？</h3>
				<p>答：藏家或机构通过线上申请提交作品后，由华地专业编辑对该作品进行审核。审核标准为：提交作品为当代书画作品，作品信息齐全，图片清晰无误。符合标准的作品将会顺利通过审核，显示在鉴证备案频道作品页中。
作品状态变为“编辑已初审”，准备进行下一步--艺术家初审。</p>
			</li>
			<li>
				<h3>什么是艺术家初审？</h3>
				<p>作品通过编辑初审后，由华地艺术家部门客服将网上提交的作品信息按艺术家进行归纳整理。当某一个艺术家的作品积攒到一定数量，客服将从网上提交的该艺术家所有作品图片统一传给艺术家进行初步鉴证。艺术家初审通过后，作品状态为“艺术家已初审”。</p>
			</li>
			<li>
				<h3>什么是电话预约藏家鉴证？</h3>
				<p>答：“艺术家已初审”作品达到一定数量，华地客服将会跟艺术家沟通以进行下一步--现场鉴定。跟艺术家确认之后，华地客服将通过电话联系藏家，通知具体的现场鉴证时间和地点。同时，将现场鉴定时间和地点在华地艺术网鉴证备案频道首页右侧进行公示。</p>
			</li>
			<li>
				<h3>什么是现场鉴证？</h3>
				<p>答：到了约定时间，藏家携带作品到现场鉴定地点，艺术家本人将在现场对所有作品进行眼学鉴证。眼学鉴证通过后，若确定该作品为艺术家的真作，可进行下一步的技术备 案。</p>
			</li>
			<li>
				<h3>什么是技术备案？</h3>
				<p>答：作品通过现场鉴证无误后，华地艺术品鉴证中心将对艺术品原作采集高清数据、作品物理成分采样检测、并对数据进行备案。通过对艺术品进行物理检测、采集艺术品DNA数据进行备案，为艺术品建立唯一的“身份证”信息。</p>
			</li>
			<li>
				<h3>什么是备份数据云存储，证书发放？</h3>
				<p>答：作品通过现场鉴证并技术备案后，相关数据信息存储于华地艺术品鉴证中心数据库中，并通过互联网发布。该备案数据在鉴证备案频道（http://beian.artron.net/）可随时公开查询。 同时，会发放艺术家本人鉴定的《鉴定证书》、华地艺术品鉴定中心出具的《备案证书》以及由版权备案的证书是由国家版权局出具的《艺术品著作权登记证书》。《鉴定证书》、《备案证书》可以在现场鉴证备案后，15天内通过快递方式寄出；版权备案的《艺术品著作权登记证书》需要在现场鉴证备案服务后45天内寄出。
此时，网站上的作品状态为“已鉴证”。
				</p>
			</li>
		</ul>
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