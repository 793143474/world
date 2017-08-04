<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cmn-Hans">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>鉴证备案——诚信联盟</title>
	<meta name="keywords" content="关键词">
	<meta name="description" content="网站描述">
	<meta name="author" content="heyunqiang99@163.com">
	<meta name="renderer" content="webkit">
	<link rel="shortcut icon" href="/beian/Public/home/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="/beian/Public/home/css/common.css">
	<link rel="stylesheet" href="/beian/Public/home/css/union.css" />
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
                <li><a href="<?php echo U('work/works');?>">作品</a></li>
                <li class="on"><a href="<?php echo U('union/union');?>">诚信联盟</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- 顶部结束 -->
<!-- 顶部结束 -->
<div class="union">
	<div class="banner">
		<div class="banner_left">
			<h2>
				诚信联盟
			</h2>
			<p>
				华地收藏网作为中国首批艺术品鉴定试点单位，为响应文化部艺术品管理政策实施，推动建立艺术市场诚信体系，联合多家艺术机构及拍卖行，针对市场上的假艺术作品和赝品，打造诚信联盟平台，助力艺术市场。让科学鉴定成为市场准则，为艺术家、收藏家服务，保障藏家和艺术家的权益，规范和完善艺术品市场秩序，让艺术品市场更诚信更可靠。
			</p>
			<p>
				我们承诺：诚信联盟平台由华地收藏网运营维护，并实施监督管理。所有诚信机构需经过严格审核才能加入华地诚信联盟平台。后期一旦出现售卖假作现象，将从诚信联盟永久除名。
			</p>
		</div>
		<div class="banner_right">
			<p>咨询电话</p>
			<strong>4008-207-108</strong>
		</div>
	</div>
	<div class="three_union">
		<h3>诚信联盟价值</h3>
		<div class="items">
			<span>1</span>
			<strong>体系</strong>
			<p>华地艺术网携手艺术机构与<br />拍卖行缔造艺术市场诚信体系</p>
		</div>
		<div class="items">
			<span>2</span>
			<strong>体系</strong>
			<p>华地艺术网携手艺术机构与<br />拍卖行缔造艺术市场诚信体系</p>
		</div>
		<div class="items">
			<span>3</span>
			<strong>体系</strong>
			<p>华地艺术网携手艺术机构与<br />拍卖行缔造艺术市场诚信体系</p>
		</div>
	</div>
	<div class="up_union">
		<h1>申请加入诚信联盟</h1>
		<div class="form">
			<form action="union" method="post" enctype="multipart/form-data">

				<li>
					<span  style="width:120px;" >上传图片：</span>
					<label  style="width: 120px;width: 120px">
						<img src="/beian/Public/Upload/<?php echo ($file[picture]); ?>" style="width: 120px;width: 120px">
						<input type="file" name="picture"/>
						<span>上传图片</span>
					</label>
				</li>

				<div class="form_item">
					<div class="form_left">
						<em>*</em>
						<span>画廊名称：</span>
					</div>
					<div class="form_right">
						<input name="name" placeholder="请输入画廊名称">
					</div>
				</div>


				<div class="form_item">
					<div class="form_left">
						<em>*</em>
						<span>联系人：</span>
					</div>
					<div class="form_right">
						<input name="contacts_name" placeholder="请输入联系人">
					</div>
				</div>
				<div class="form_item">
					<div class="form_left">
						<em>*</em>
						<span>联系电话：</span>
					</div>
					<div class="form_right">
						<input name="contacts_tele" placeholder="请输入联系电话">
					</div>
				</div>
				<div class="form_item">
					<div class="form_left">
						<span>电子邮箱：</span>
					</div>
					<div class="form_right">
						<input name="contacts_email" placeholder="请输入有效电子邮箱">
					</div>
				</div>
				<div class="form_item">
					<div class="form_left">
						<span>画廊地址：</span>
					</div>
					<div class="form_right">
						<input name="address" placeholder="请输入画廊地址">
					</div>
				</div>
				<div class="form_item">
					<div class="form_left">
						<span>备注：</span>
					</div>
					<div class="form_right">
						<textarea name="remarks"></textarea>
					</div>
				</div>
				
				<div class="form_item">
					<div class="form_left">
						<span></span>
					</div>
					<div class="form_right">
						<button type="submit">提交信息</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="famliy">
		<h2>联盟成员</h2>
		<ul>
			<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
					<img src="/beian/Public/Upload<?php echo ($vo['picture']); ?>">
					<a href="">连豪美术馆</a>
				</li><?php endforeach; endif; else: echo "" ;endif; ?>
		<!--	<li>
				<img src="/beian/Public/home/img/lo.jpg">
			<a href="<?php echo U('artist/artist');?>">连豪美术馆</a>
			</li>
			<li>
				<img src="/beian/Public/home/img/lo.jpg">
				<a href="<?php echo U('artist/artist');?>">连豪美术馆</a>
			</li>
			<li>
				<img src="/beian/Public/home/img/lo.jpg">
				<a href="<?php echo U('artist/artist');?>">连豪美术馆</a>
			</li>
			<li>
				<img src="/beian/Public/home/img/lo.jpg">
				<a href="<?php echo U('artist/artist');?>">连豪美术馆</a>
			</li>
			<li>
				<img src="/beian/Public/home/img/lo.jpg">
				<a href="<?php echo U('artist/artist');?>">连豪美术馆</a>
			</li>-->
		</ul>
	</div>
	<div class="ruijian">
		<h2>
			推荐作品
		</h2>
		<ul>

            <?php if(is_array($da)): $i = 0; $__LIST__ = array_slice($da,5,14,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
					<a href="<?php echo U('details/details');?>">
						<img src="/beian/Public/Upload<?php echo ($vo['banner']); ?>">
						<p>
							<?php echo ($vo['name']); ?>
						</p>
					</a>
				</li><?php endforeach; endif; else: echo "" ;endif; ?>
			<!--<li>
				<a href="<?php echo U('details/details');?>">
					<img src="/beian/Public/home/images/74C58PICgy4_1024.jpg">
					<p>
						纯手工制陶瓷茶具
					</p>
				</a>
			</li>
			<li>
				<a href="<?php echo U('details/details');?>">
					<img src="/beian/Public/home/images/74C58PICgy4_1024.jpg">
					<p>
						纯手工制陶瓷茶具
					</p>
				</a>
			</li>
			<li>
				<a href="<?php echo U('details/details');?>">
					<img src="/beian/Public/home/images/74C58PICgy4_1024.jpg">
					<p>
						纯手工制陶瓷茶具
					</p>
				</a>
			</li>
			<li>
				<a href="<?php echo U('details/details');?>">
					<img src="/beian/Public/home/images/74C58PICgy4_1024.jpg">
					<p>
						纯手工制陶瓷茶具
					</p>
				</a>
			</li>
			<li>
				<a href="<?php echo U('details/details');?>">
					<img src="/beian/Public/home/images/74C58PICgy4_1024.jpg">
					<p>
						纯手工制陶瓷茶具
					</p>
				</a>
			</li>
			<li>
				<a href="<?php echo U('details/details');?>">
					<img src="/beian/Public/home/images/74C58PICgy4_1024.jpg">
					<p>
						纯手工制陶瓷茶具
					</p>
				</a>
			</li>
			<li>
				<a href="<?php echo U('details/details');?>">
					<img src="/beian/Public/home/images/74C58PICgy4_1024.jpg">
					<p>
						纯手工制陶瓷茶具
					</p>
				</a>
			</li>
			<li>
				<a href="<?php echo U('details/details');?>">
					<img src="/beian/Public/home/images/74C58PICgy4_1024.jpg">
					<p>
						纯手工制陶瓷茶具
					</p>
				</a>
			</li>
			<li>
				<a href="<?php echo U('details/details');?>">
					<img src="/beian/Public/home/images/74C58PICgy4_1024.jpg">
					<p>
						纯手工制陶瓷茶具
					</p>
				</a>
			</li>
			<li>
				<a href="<?php echo U('details/details');?>">
					<img src="/beian/Public/home/images/74C58PICgy4_1024.jpg">
					<p>
						纯手工制陶瓷茶具
					</p>
				</a>
			</li>-->
		</ul>
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