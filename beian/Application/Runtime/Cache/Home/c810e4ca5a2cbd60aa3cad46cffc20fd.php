<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>鉴证备案——艺术家列表</title>
	<meta name="keywords" content="关键词">
	<meta name="description" content="网站描述">
	<meta name="author" content="heyunqiang99@163.com">
	<meta name="renderer" content="webkit">
	<link rel="shortcut icon" href="/beian/Public/home/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="/beian/Public/home/css/common.css">
	<link rel="stylesheet" href="/beian/Public/home/layui/css/layui.css" />
	<link rel="stylesheet" href="/beian/Public/home/css/artist.css" />

</head>
<!-- 头部结束 -->
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
		<a href="<?php echo U('artist/artist_list');?>">艺术家</a>&gt;
		<span>艺术家作品征集</span>
	</div>
	<div class="artist">
		<div class="artist_pic">
			<div class="artist_img">
				<img src="/beian/Public/Upload/<?php echo ($data['aphoto']); ?>">
			</div>
			<p class="artist_number">已征集：<span><?php echo ($data['collect']); ?></span>件</p>
			<a href="<?php echo U('biaodan/biaodan');?>">在线鉴定</a>
		</div>
		<div class="artist_box">
			<h1><?php echo ($data['yname']); ?></h1>
			<div class="artist_p">
				<p><?php echo ($data['summary']); ?></p>
				<!--<p>
						陈奕迅（Eason Chan），1974年7月27日出生于香港，中国香港男歌手、演员，毕业于英国金斯顿大学。
	1995年因获得第14届新秀歌唱大赛冠军而正式出道。1996年发行个人首张专辑《陈奕迅》。1997年主演个人首部电影《旺角大家姐》。1998年凭借歌曲《天下无双》在乐坛获得关注。2000年发行的歌曲《K歌之王》奠定其在歌坛的地位[1]  。2001年发行流行摇滚风格的专辑《反正是我》。2003年发行个人首张概念专辑《黑·白·灰》；专辑中的歌曲《十年》获得第4届百事音乐风云榜十大金曲奖[2]  。2005年发行的歌曲《浮夸》成为其歌唱生涯的代表作品之一。2006年起，连续9年获得叱咤乐坛流行榜颁奖典礼叱咤乐坛我最喜爱的男歌手奖[3]  。2008年1月，获得十大劲歌金曲最受欢迎男歌星奖”[4]  。2010年凭借剧情片《金钱帝国》获得星光大典港台年度电影男演员奖[5]  。2011年成立个人音乐制作公司EAS MUSIC[6]  。2012年发行舞曲风格的粤语专辑《…3mm》。2015年凭借专辑《米·闪》获得第26届台湾金曲奖最佳国语男歌手奖[7]  。2016年举行“Another Eason's LIFE世界巡回演唱会”[8]  
				</p>
				<p>
						陈奕迅（Eason Chan），1974年7月27日出生于香港，中国香港男歌手、演员，毕业于英国金斯顿大学。
	1995年因获得第14届新秀歌唱大赛冠军而正式出道。1996年发行个人首张专辑《陈奕迅》。1997年主演个人首部电影《旺角大家姐》。1998年凭借歌曲《天下无双》在乐坛获得关注。2000年发行的歌曲《K歌之王》奠定其在歌坛的地位[1]  。2001年发行流行摇滚风格的专辑《反正是我》。2003年发行个人首张概念专辑《黑·白·灰》；专辑中的歌曲《十年》获得第4届百事音乐风云榜十大金曲奖[2]  。2005年发行的歌曲《浮夸》成为其歌唱生涯的代表作品之一。2006年起，连续9年获得叱咤乐坛流行榜颁奖典礼叱咤乐坛我最喜爱的男歌手奖[3]  。2008年1月，获得十大劲歌金曲最受欢迎男歌星奖”[4]  。2010年凭借剧情片《金钱帝国》获得星光大典港台年度电影男演员奖[5]  。2011年成立个人音乐制作公司EAS MUSIC[6]  。2012年发行舞曲风格的粤语专辑《…3mm》。2015年凭借专辑《米·闪》获得第26届台湾金曲奖最佳国语男歌手奖[7]  。2016年举行“Another Eason's LIFE世界巡回演唱会”[8]  
				</p>-->
			</div>
			<span class="more">更多&gt;&gt;</span>
			<span class="updown">收起</span>
		</div>
	</div>
	<div class="artist_works">
		<span>鉴定专场：</span>
		<ul>
			<?php if(is_array($dat)): $i = 0; $__LIST__ = array_slice($dat,0,2,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
					<a href="#"><?php echo ($vo['title']); ?></a>
				</li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
	<div class="service_what">
		<h3>什么是“中国艺术品鉴证备案服务"？</h3>
		<div class="artist_p">
				<p>
					华地文化艺术品鉴证备案服务是为艺术品建立权威的 “身份证”信息的重点工程，该项目全面启动，现联合拍卖行、画廊、艺术家展开全球征集，为中国艺术品传承有序、艺术品市场健康发展保驾护航。即日起，华地联合著名艺术家杨明义老师，面向全球征集杨明义先生从艺以来所有创作的作品，对征集的每一件原作，由杨明义先生本人亲自鉴定，并由华地文化艺术品鉴证备案中心进行技术备案，为藏家制作高精密度防伪作品鉴定证书，并对鉴证备案的作品进行结集出版，同时鉴证备案的数据将存入中国艺术品备案数据库，向全球公开查询。
					<br />一、征集内容
					<br />面向全球征集杨明义先生从艺以来所创作的作品原作；
					<br />二、征集目的
					<br />为促进艺术收藏市场去伪存真，健康有序发展；
					<br />汇集杨明义先生从艺数十载的艺术作品，深入研究和梳理杨明义先生卓越的艺术成果与艺术脉络，收录、整理、汇编杨明义先生作品，建立《杨明义作品鉴证备 案电子数据库》；
			     	<br /> 华地文化艺术品鉴证备案服务是为艺术品建立权威的 “身份证”信息的重点工程，该项目全面启动，现联合拍卖行、画廊、艺术家展开全球征集，为中国艺术品传承有序、艺术品市场健康发展保驾护航。即日起，华地联合著名艺术家杨明义老师，面向全球征集杨明义先生从艺以来所有创作的作品，对征集的每一件原作，由杨明义先生本人亲自鉴定，并由华地文化艺术品鉴证备案中心进行技术备案，为藏家制作高精密度防伪作品鉴定证书，并对鉴证备案的作品进行结集出版，同时鉴证备案的数据将存入中国艺术品备案数据库，向全球公开查询。
					<br />一、征集内容
					<br />面向全球征集杨明义先生从艺以来所创作的作品原作；
					<br />二、征集目的
					<br />为促进艺术收藏市场去伪存真，健康有序发展；
				</p>
			</div>
			<span class="more">更多&gt;&gt;</span>
			<span class="updown">收起</span>
	</div>
	<div class="artist_list">
		<div class="work_mian">
			<div class="works_nav">
				<div class="worksnav">
					<!--<div class="tiem">
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
        <a href="javascript:" data-type = "1">书画</a>
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
                    <input class="layui-input" value="0" placeholder="开始日" id="LAY_demorange_s">
                    <span class="icon_time"></span>
                </div>
                <label class="layui-form-label">截止时间：</label>
                <div class="layui-input-inline">
                    <input class="layui-input" value="0" placeholder="截止日" id="LAY_demorange_e">
                    <span class="icon_time"></span>
                </div>
            </div>
        </div>
    </div>
</div>-->
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
							<a href="javascript:" data-type = "1">书画</a>
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
										<input class="layui-input" value="0" placeholder="开始日" id="LAY_demorange_s">
										<span class="icon_time"></span>
									</div>
									<label class="layui-form-label">截止时间：</label>
									<div class="layui-input-inline">
										<input class="layui-input" value="0" placeholder="截止日" id="LAY_demorange_e">
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
							<a href="javascript:"  data-type = "0"></a>
						</span>
						<span class="down_sort">
							<a href="javascript:"  data-type = "1"></a>
						</span>
						<p>按备案编号排序</p>
						<span class="up_sort">
							<a href="javascript:"  data-type = "2"></a>
						</span>
						<span class="down_sort">
							<a href="javascript:"  data-type = "3"></a>
						</span>
					</div>
					<div class="screen">
						<span>备案状态</span>
						<select name="select" id="select_k1">
							<option value="0">全部作品</option>
							<option value="1">鉴证备案作品</option>
							<option value="2">在线鉴定作品</option>
							<option value="3">cars认证作品</option>
							<option value="4">在线鉴定作品</option>
						</select>

					</div>
				</div>
				<div class="works_list">
					<ul id="yeconnet">
							<li>
								<div class="auction-img">
									<a href="">
										<img src="" alt="placeholder+image" >
									</a>
								</div>
								<p class="auction_time">编号：<span></span></p>
								<p class="auction_title">
									<a href="#"></a>
								</p>
								<div class="auction_meta">
									<p class="price">来源:<span></span></p>
									<p class="price">作者:<span></span></p>
									<p class="price">年代:<span></span></p>
									<p class="price">尺寸:<span></span></p>
								</div>
							</li>
					</ul>
					<div class="clearfix"></div>
					<div id="yema"></div>
				</div>
			</div>
			<div class="clearfix"></div>
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
</body>
</html>
<script src="/beian/Public/home/lib/jquery.min.js"></script>
<script src="/beian/Public/home/lib/jquery.SuperSlide.2.1.1.js"></script>
<script type="text/javascript" src="/beian/Public/home/layui/lay/dest/layui.all.js" ></script>
<script type="text/javascript" src="/beian/Public/home/js/artist.js" ></script>