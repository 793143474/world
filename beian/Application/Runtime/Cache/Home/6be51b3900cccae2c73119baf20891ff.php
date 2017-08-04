<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cmn-Hans">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>鉴证备案——新闻资讯</title>
    <meta name="keywords" content="关键词">
    <meta name="description" content="网站描述">
    <meta name="author" content="heyunqiang99@163.com">
    <meta name="renderer" content="webkit">
    <link rel="shortcut icon" href="/beian/Public/home/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="/beian/Public/home/css/common.css">
    <link rel="stylesheet" href="/beian/Public/home/css/news.css" />
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
<div class="mian_Box">
	<div class="dress">
		<a href="<?php echo U('index/index');?>">鉴证备案</a>&gt;
		<span>新闻资讯</span>
	</div>
	<div class="news_main">
		<div class="news_left">
			<div class="news_nr">
				<h1><?php echo ($menu['ntitle']); echo ($men['title']); ?></h1>
				<p class="news_tit">                  
					<span><?php echo ($menu['newsdate']); echo ($men['btime']); ?></span>
					<span>作者：<?php echo ($menu['auther']); echo ($men['edit']); ?></span>
					<span>来源：<?php echo ($menu['source']); echo ($men['laiyuan']); ?></span>
				</p>
				<div class="news_keywords">
					<strong>摘要：</strong>
					<span>
						<?php echo ($menu['abstract']); echo ($men['zhanyao']); ?>
					</span>
				</div>
				<div class="news_p">
					<?php echo ($menu['newscontent']); echo ($men['neirong']); ?>
				</div>
				<div class="Notes">
					<strong>注：</strong>
					<span>
						<?php echo ($menu['zhushi']); echo ($men['zhushi']); ?>
					</span>
				</div>
			</div>
			<div class="search_keywords">
				<div class="keywords">
					<span>推荐关键字&gt;&gt;</span>
					<?php echo ($menu['tjgjz']); echo ($men['guanjian']); ?>
				</div>
				<div class="fenxiang">
					<div class="bshare-custom icon-medium"><a title="分享到" href="http://www.bShare.cn/" id="bshare-shareto" class="bshare-more">分享到</a><a title="分享到QQ空间" class="bshare-qzone"></a><a title="分享到新浪微博" class="bshare-sinaminiblog"></a><a title="分享到人人网" class="bshare-renren"></a><a title="分享到腾讯微博" class="bshare-qqmb"></a><a title="分享到网易微博" class="bshare-neteasemb"></a><a title="更多平台" class="bshare-more bshare-more-icon more-style-addthis"></a><span class="BSHARE_COUNT bshare-share-count">0</span></div><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/buttonLite.js#style=-1&amp;uuid=&amp;pophcol=2&amp;lang=zh"></script><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC0.js"></script>
				</div>
			</div>
			<div class="news_about">
				<h2>相关资讯</h2>
				<ul>
					<?php if(is_array($data)): $i = 0; $__LIST__ = array_slice($data,0,6,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
							<a href="<?php echo U('news/news',array('nid'=>$vo['nid']));?>"><?php echo ($vo['ntitle']); ?> </a>
							<span class="time"><?php echo ($vo['newsdate']); ?></span>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>

				</ul>
			</div>
		</div>



		<div class="news_right">
			<div class="right_item">
				<h2>今日推荐</h2>
				<ul>

					<?php if(is_array($data)): $i = 0; $__LIST__ = array_slice($data,0,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
							<a href="<?php echo U('news/news',array('nid'=>$vo['nid']));?>"><em></em>
								<?php echo ($vo['ntitle']); ?>
							</a>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
					<!--<li>
						<a href="#"><em>1</em>
							爱上韩美林艺术大展将开幕 千件作品展现“美林的世界
						</a>
					</li>
					<li>
						<a href="#"><em>2</em>
							爱上韩美林艺术大展将开幕 千件作品展现“美林的世界
						</a>
					</li>
					<li>
						<a href="#"><em>3</em>
							爱上韩美林艺术大展将开幕 千件作品展现“美林的世界
						</a>
					</li>
					<li>
						<a href="#"><em>4</em>
							爱上韩美林艺术大展将开幕 千件作品展现“美林的世界
						</a>
					</li>
					<li>
						<a href="#"><em>5</em>
							爱上韩美林艺术大展将开幕 千件作品展现“美林的世界
						</a>
					</li>-->
				</ul>
			</div>
			
			<div class="right_item two">
				<h2>每周热点</h2>
				<ul>
					<?php if(is_array($data)): $i = 0; $__LIST__ = array_slice($data,6,14,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
							<a href="<?php echo U('news/news',array('nid'=>$vo['nid']));?>"><em></em>
								<?php echo ($vo['ntitle']); ?>
							</a>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
				<!--	<li>
						<a href="#"><em>1</em>
							爱上韩美林艺术大展将开幕 千件作品展现“美林的世界
						</a>
					</li>
					<li>
						<a href="#"><em>2</em>
							爱上韩美林艺术大展将开幕 千件作品展现“美林的世界
						</a>
					</li>
					<li>
						<a href="#"><em>3</em>
							爱上韩美林艺术大展将开幕 千件作品展现“美林的世界
						</a>
					</li>
					<li>
						<a href="#"><em>4</em>
							爱上韩美林艺术大展将开幕 千件作品展现“美林的世界
						</a>
					</li>
					<li>
						<a href="#"><em>5</em>
							爱上韩美林艺术大展将开幕 千件作品展现“美林的世界
						</a>
					</li>
					<li>
						<a href="#"><em>6</em>
							爱上韩美林艺术大展将开幕 千件作品展现“美林的世界
						</a>
					</li>
					<li>
						<a href="#"><em>7</em>
							爱上韩美林艺术大展将开幕 千件作品展现“美林的世界
						</a>
					</li>
					<li>
						<a href="#"><em>8</em>
							爱上韩美林艺术大展将开幕 千件作品展现“美林的世界
						</a>
					</li>-->
				</ul>
			</div>
			<div class="right_item">
				<h2>作品推荐</h2>
				<ul class="img">
                    <?php if(is_array($goods)): $i = 0; $__LIST__ = array_slice($goods,0,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
							<a href="#">
								<img src="/beian/Public/Upload/<?php echo ($vo['banner']); ?>">
								<p><?php echo ($vo['name']); ?></p>
							</a>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
		</div>
		<div class="clearfix"></div>
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