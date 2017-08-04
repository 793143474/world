<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cmn-Hans">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>新闻列表</title>
    <meta name="keywords" content="关键词">
    <meta name="description" content="网站描述">
    <meta name="author" content="heyunqiang99@163.com">
    <meta name="renderer" content="webkit">
    <link rel="shortcut icon" href="/beian/Public/home/favicon.ico" />
    <link rel="stylesheet" href="/beian/Public/home/layui/css/layui.css" />
    <link rel="stylesheet" type="text/css" href="/beian/Public/home/css/common.css">
    <link rel="stylesheet" href="/beian/Public/home/css/news_list.css" />
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
		<span>新闻列表</span>
	</div>
	<div class="news_box cl">
		<div class="news_List">
			<ul>
				<?php if(is_array($dpr)): $i = 0; $__LIST__ = $dpr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
					<em>•</em>
					<a href="<?php echo U('news/news',array('nid'=>$vo['nid']));?>"><?php echo ($vo['ntitle']); ?></a>
					<span class="time"><?php echo ($vo['newsdate']); ?></span>
				</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			<!--<ul>
				<?php if(is_array($dpr)): $i = 0; $__LIST__ = array_slice($dpr,6,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
						<em>•</em>
						<a href="news.html"><?php echo ($vo['ntitle']); ?></a>
						<span class="time"><?php echo ($vo['newsdate']); ?></span>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			<ul>
				<?php if(is_array($dpr)): $i = 0; $__LIST__ = array_slice($dpr,11,15,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
						<em>•</em>
						<a href="news.html"><?php echo ($vo['ntitle']); ?></a>
						<span class="time"><?php echo ($vo['newsdate']); ?></span>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			<ul>
				<?php if(is_array($dpr)): $i = 0; $__LIST__ = array_slice($dpr,16,20,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
						<em>•</em>
						<a href="news.html"><?php echo ($vo['ntitle']); ?></a>
						<span class="time"><?php echo ($vo['newsdate']); ?></span>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			<ul>
				<?php if(is_array($dpr)): $i = 0; $__LIST__ = array_slice($dpr,21,25,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
						<em>•</em>
						<a href="news.html"><?php echo ($vo['ntitle']); ?></a>
						<span class="time"><?php echo ($vo['newsdate']); ?></span>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			<ul>
				<?php if(is_array($dpr)): $i = 0; $__LIST__ = array_slice($dpr,26,30,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
						<em>•</em>
						<a href="news.html"><?php echo ($vo['ntitle']); ?></a>
						<span class="time"><?php echo ($vo['newsdate']); ?></span>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			<ul>
				<?php if(is_array($dpr)): $i = 0; $__LIST__ = array_slice($dpr,31,35,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
						<em>•</em>
						<a href="news.html"><?php echo ($vo['ntitle']); ?></a>
						<span class="time"><?php echo ($vo['newsdate']); ?></span>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			<ul>
				<?php if(is_array($dpr)): $i = 0; $__LIST__ = array_slice($dpr,36,40,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
						<em>•</em>
						<a href="news.html"><?php echo ($vo['ntitle']); ?></a>
						<span class="time"><?php echo ($vo['newsdate']); ?></span>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>-->
			<div class="content"  >
				<div class="pages"  >
					<?php echo ($page); ?>
				</div>
			</div>
		<!--	<div id="yema"></div>-->
		</div>
		<div class="news_right">
			<div class="send-process-box">
				<div class="circuit">
					<h2>藏品送鉴流程</h2>
					<ul class="cl">
						<li><a href="<?php echo U('explain/explain');?>" target="_blank">线上申请</a></li>
						<li class="arrowL"></li>
						<li><a href="<?php echo U('explain/explain');?>" target="_blank">艺术家初审</a></li>
						<li class="arrowBR"></li>
						<li><a href="<?php echo U('explain/explain');?>" target="_blank">现场鉴证</a></li>
						<li class="arrowR"></li>
						<li><a href="<?php echo U('explain/explain');?>" target="_blank">电话预约藏家鉴证</a></li>
						<li class="arrowBL"></li>
						<li><a href="<?php echo U('explain/explain');?>" target="_blank">技术备案</a></li>
						<li class="arrowL"></li>
						<li><a href="<?php echo U('explain/explain');?>" target="_blank">证书发放</a></li>
					</ul>
					<a href="<?php echo U('biaodan/biaodan');?>" class="send-jian" target="_blank">我要送鉴</a>
				</div>
				<div class="want-query">
					<form action="" method="post" enctype="multipart/form-data">
						<select class="want-query-select" name="lei_bie">
							<option  value="0">按备案编号</option>
							<option  value="1">按作品名称</option>
							<option  value="2">按艺术家名称</option>
							<option  value="3">按机构名称</option>
						</select>
						<input name="j_g" style="width: 320px;height: 42px;margin-top: 40px;border: 1px solid #cccccc">
						<!--  <input class="want-query-search" name="j_g" placeholder="请输入您要查询的内容">-->
						<input type="submit" class="want-query-btn" value="我要查询">
					</form>
				</div>
            </div>
            <div class="index-panel-right">
	            <div class="index-panel-header cl">
	                <h3 class="fl">常见问题</h3>
	            </div>
	            <div class="index-panel-body">
	                <div class="questionslist">
	                    <!-- 显示四条 -->
	                    <ul>
							<?php if(is_array($dp)): $i = 0; $__LIST__ = array_slice($dp,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
									<a href="<?php echo U('news/news',array('id'=>$vo['id']));?>" target="_blank" title="观点"><em>●</em>[回答]</a>
									<a href="<?php echo U('news/news',array('id'=>$vo['id']));?>"><?php echo ($vo['title']); ?></a>
								</li><?php endforeach; endif; else: echo "" ;endif; ?>
	                    </ul>
	                </div>
	            </div>
	        </div>
	        <div class="index-panel-right">
            <div class="index-panel-header cl">
                <h3 class="fl">名家鉴证实录</h3>
            </div>
            <div class="index-panel-body">
                <div class="forensics">
                    <!-- top即将进行 -->
                    <div class="picScroll-left">
                        <div class="hd">
                            <span class="">即将进行</span>
                        </div>
                        <div class="bd">
                            <ul class="picList">
								<?php if(is_array($s_pd)): $i = 0; $__LIST__ = array_slice($s_pd,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
										<div class="pic">
											<a class="cl" href="<?php echo U('special/Special',array('aid'=>$vo['aid']));?>" target="_blank">
												<img class="fl author-img" src="/beian/Public/upload/<?php echo ($vo['banner_pictures']); ?>"/>
												<div class="works-num fl">
													<p>待鉴定作品</p>
													<p><span class="num"><?php echo ($vo['number']); ?></span>件</p>
												</div>
											</a>
										</div>
										<div class="info">
											<p>时间：<em><?php echo ($vo['starttime']); ?></em></p>
											<p>地点：<em>上海华地艺术品备案中心（上海浦东新区 东方路）</em></p>
										</div>
									</li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div>
                    </div>
                    <!-- 精彩回顾 -->
                    <div class="history-look cl">
                        <div class="title">
                            <h3>精彩回顾</h3>
                        </div>
						<div class="pic">
							<a class="cl" href="<?php echo U('special/Special',array('aid'=>$vo['aid']));?>" target="_blank">
								<img class="fl author-img" src="/beian/Public/Upload/<?php echo ($jianzheng_jieshu['banner_pictures']); ?>"  />
								<div class="works-num fl">
									<p>完成鉴定作品</p>
									<p>真品：<span class="num"><?php echo ($jianzheng_jieshu['genuine_product']); ?></span>件</p>
								</div>
							</a>
						</div>
						<!--<div class="info">
							<?php if(is_array($result)): $i = 0; $__LIST__ = array_slice($result,0,2,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
									<a href="<?php echo U('news/news',array('nid'=>$vo['nid']));?>">
										[<?php echo ($vo['name']); ?>]<?php echo ($vo['ntitle']); ?></a>
								</li><?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
						<a href="<?php echo U('news/news_list');?>" class="fr more-info">更多详情>></a>-->
                    </div>
                </div>
            </div>
        </div>
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
<!-- 底部结束 -->
</body>

</html>
<script src="/beian/Public/home/lib/jquery.min.js"></script>
<script src="/beian/Public/home/lib/jquery.SuperSlide.2.1.1.js"></script>
<script type="text/javascript" src="/beian/Public/home/layui/lay/dest/layui.all.js" ></script>
<script>
	layui.use(['laypage', 'layer'], function(){
  var laypage = layui.laypage
  ,layer = layui.layer;
   laypage({
    cont: 'yema'
    ,pages: 100
    ,skip: true
  }) 
});
</script>