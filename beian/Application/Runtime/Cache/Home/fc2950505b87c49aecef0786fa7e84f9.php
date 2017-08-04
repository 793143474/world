<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cmn-Hans">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>鉴证备案——作品详情</title>
    <meta name="keywords" content="关键词">
    <meta name="description" content="网站描述">
    <meta name="author" content="heyunqiang99@163.com">
    <meta name="renderer" content="webkit">
    <link rel="shortcut icon" href="/beian/Public/home/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="/beian/Public/home/css/common.css">
    <link rel="stylesheet" href="/beian/Public/home/css/detalis.css" />
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
                <li><a href="<?php echo U('special/Special_list');?>">鉴证专场</a></li>
                <li class="on"><a href="<?php echo U('artist/artist_list');?>">艺术家</a></li>
                <li><a href="<?php echo U('work/works');?>">作品</a></li>
                <li><a href="<?php echo U('union/union');?>">诚信联盟</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- 顶部结束 -->
<div class="appraisal">
	<div class="dress">
		<a href="<?php echo U('index/index');?>">鉴证备案</a>&gt;
		<a href="<?php echo U('artist/artist_list');?>">艺术家</a>&gt;
		<span>艺术家作品征集</span>
	</div>
	<div class="appraisal_top">
		<div class="appraisal_Pic">
			<div id="showbox">
                <?php if(is_array($data[pictures])): $i = 0; $__LIST__ = $data[pictures];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><img src="/beian/Public/Upload/<?php echo ($vo); ?>" width="270" height="180"  ><?php endforeach; endif; else: echo "" ;endif; ?>
			 <!-- <img src="/beian/Public/home/images/001.jpg" width="270" height="180" />
			  <img src="/beian/Public/home/images/001.jpg" width="320" height="735" />
			  <img src="/beian/Public/home/images/001.jpg" width="430" height="430" />
			  <img src="/beian/Public/home/images/001.jpg" width="290" height="290" />
			  <img src="/beian/Public/home/images/001.jpg" width="786" height="525" />
			  <img src="/beian/Public/home/images/001.jpg" width="300" height="300" />
			  <img src="/beian/Public/home/images/001.jpg" width="200" height="200" />
			  <img src="/beian/Public/home/images/001.jpg" width="810" height="582" />
			  <img src="/beian/Public/home/images/001.jpg" width="1920" height="900" />-->
			</div><!--展示图片盒子-->
			<div id="showsum"></div><!--展示图片里边-->
			<p class="showpage">
			  <a href="javascript:void(0);" id="showlast"> < </a>
			  <a href="javascript:void(0);" id="shownext"> > </a>
			</p>
		</div>
		<div class="app_txt">
            <div class="txt_top">
                <h1>藏品名称：<?php echo ($data['name']); ?></h1>
                <p><span>备案编号：</span><?php echo ($data['bianhao']); ?></p>
                <p><span>备案时间：</span><?php echo ($data['btime']); ?></p>
                <p><span>鉴定结果：</span><?php echo ($data['result']); ?></p>
                <p><span>鉴定机构：</span>华地文化</p>
            </div>
            <div class="txt_bottom">
                <p><span>藏品来源：</span><?php echo ($data['lainame']); ?></p>
                <p><span>藏品年限：</span><?php echo ($data['cztime']); ?></p>
                <p><span>藏品类别：</span><?php echo ($data['category']); ?></p>
                <p><span>藏品规格：</span><?php echo ($data['size']); ?></p>
            </div>
		</div>
	</div>
	<div class="appraisal_bottom">
		<div class="app_nav">
			<span>鉴定证书</span>
		</div>
		<div class="certificate">
            <?php if(is_array($data[certificate])): $i = 0; $__LIST__ = $data[certificate];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><img src="/beian/Public/Upload/<?php echo ($vo); ?>"><?php endforeach; endif; else: echo "" ;endif; ?>
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
<script type="text/javascript" src="/beian/Public/home/js/detalis.js" ></script>
<script type="text/javascript">
  $(document).ready(function(){
	  var showproduct = {
		  "boxid":"showbox",
		  "sumid":"showsum",
		  "boxw":620,//宽度,该版本中请把宽高填写成一样
		  "boxh":360,//高度,该版本中请把宽高填写成一样
		  "sumw":90,//列表每个宽度,该版本中请把宽高填写成一样
		  "sumh":90,//列表每个高度,该版本中请把宽高填写成一样
		  "sumi":3,//列表间隔
		  "sums":6,//列表显示个数
		  "sumsel":"sel",
		  "sumborder":1,//列表边框，没有边框填写0，边框在css中修改
		  "lastid":"showlast",
		  "nextid":"shownext"
		  };//参数定义	  
	 $.ljsGlasses.pcGlasses(showproduct);//方法调用，务必在加载完后执行
  });
</script>