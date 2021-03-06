<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cmn-Hans">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>鉴证备案——我要送鉴</title>
	<meta name="keywords" content="关键词">
	<meta name="description" content="网站描述">
	<meta name="author" content="heyunqiang99@163.com">
	<meta name="renderer" content="webkit">
	<link rel="shortcut icon" href="/beian/Public/home/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="/beian/Public/home/css/common.css">
	<link rel="stylesheet" href="/beian/Public/home/css/authentication.css" />
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
				<li><a href="<?php echo U('special/Special_list');?>">鉴证专场</a></li>
				<li class="on"><a href="<?php echo U('artist/artist_list');?>">艺术家</a></li>
				<li><a href="<?php echo U('work/works');?>">作品</a></li>
				<li><a href="<?php echo U('union/union');?>">诚信联盟</a></li>
			</ul>
        </div>
    </div>
</div>

<!-- 顶部结束 -->
<div class="recovery_box">
			<div class="auth_nav">
				<span>我要送鉴</span>
			</div>
			<form action="biaodan" method="post" enctype="multipart/form-data">
				<div class="authentication">
					<h2>请填写藏品信息</h2>
					<div class="auth_item">
						<span><em>*</em>图片上传:</span>
						<div class="auth_item">
							<div class="upload">
								<div class="img_div">

								</div>
								<a href="javascript:;" class="a-upload">
									<input type="file" name="myFile" id="myFile" multiple="multiple" />点击这里上传文件
								</a>
								<div class="shade" onclick="javascript:closeShade()">
									<div class="">
									<span class="text_span">
									</span>
									</div>
								</div>

								<div class="shadeImg" onclick="javascript:closeShadeImg()">
									<div class="shaimg">
										<img class="showImg" src=""/>
									</div>
								</div>
							</div>
							<div class="upload">
								<div class="img_div">

								</div>
								<a href="javascript:;" class="a-upload">
									<input type="file" name="myFile1" id="myFile1" multiple="multiple" />点击这里上传文件
								</a>
								<div class="shade" onclick="javascript:closeShade()">
									<div class="">
									<span class="text_span">
									</span>
									</div>
								</div>

								<div class="shadeImg" onclick="javascript:closeShadeImg()">
									<div class="shaimg">
										<img class="showImg" src=""/>
									</div>
								</div>
							</div>
							<div class="upload">
								<div class="img_div">

								</div>
								<a href="javascript:;" class="a-upload">
									<input type="file" name="myFile2" id="myFile2" multiple="multiple" />点击这里上传文件
								</a>
								<div class="shade" onclick="javascript:closeShade()">
									<div class="">
									<span class="text_span">
									</span>
									</div>
								</div>

								<div class="shadeImg" onclick="javascript:closeShadeImg()">
									<div class="shaimg">
										<img class="showImg" src=""/>
									</div>
								</div>
							</div>
							<div class="upload">
								<div class="img_div">

								</div>
								<a href="javascript:;" class="a-upload">
									<input type="file" name="myFile3" id="myFile3" multiple="multiple" />点击这里上传文件
								</a>
								<div class="shade" onclick="javascript:closeShade()">
									<div class="">
									<span class="text_span">
									</span>
									</div>
								</div>

								<div class="shadeImg" onclick="javascript:closeShadeImg()">
									<div class="shaimg">
										<img class="showImg" src=""/>
									</div>
								</div>
							</div>
							<div class="upload">
								<div class="img_div">

								</div>
								<a href="javascript:;" class="a-upload">
									<input type="file" name="myFile4" id="myFile4" multiple="multiple" />点击这里上传文件
								</a>
								<div class="shade" onclick="javascript:closeShade()">
									<div class="">
									<span class="text_span">
									</span>
									</div>
								</div>

								<div class="shadeImg" onclick="javascript:closeShadeImg()">
									<div class="shaimg">
										<img class="showImg" src=""/>
									</div>
								</div>
							</div>

							<p class="tianjia">（图片格式为JPG、PNG，大小不超过1024k!最多上传五张图片）</p>
						</div>

					</div>
					<div class="auth_item">
						<span><em>*</em>藏品名称：</span>
						<p>
							<input placeholder="藏品名称" name="cname"><strong>（请填写藏品名称不超过20字）</strong>
						</p>
					</div>
					<div class="auth_item">
						<span><em>*</em>作者/产地：</span>
						<p>
							<input placeholder="作者" name="auther"><strong>（请填写藏品作者或者产地不超过20字）</strong>
						</p>
					</div>
					
					<div class="auth_item">
						<span><em>*</em>作品尺寸：</span>
						<p>
							<input type="number" name="heght" placeholder="长度" >
							<em>x</em>
							<input type="number" name="weght"  placeholder="宽度">
							<em>毫米（mm）</em>
							<strong>（请填写藏品尺寸，不超过6位数）</strong>
						</p>
					</div>
					
					<div class="auth_item">
						<span><em>*</em>类别：</span>
						<p>
							<select name="category" >
								<option value="" >请选择</option>
								<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['zhi']); ?>"><?php echo ($vo['h']); echo ($vo['pcategory']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
							</select>
						</p>
					</div>
					<div class="auth_item">
						<span><em>*</em>材质：</span>
						<p>
							<select name="material">
								<option value="">请选择</option>
								<?php if(is_array($dat)): $i = 0; $__LIST__ = $dat;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['zhi']); ?>"><?php echo ($vo['h']); echo ($vo['material']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
							</select>
						</p>
					</div>
					<h2>请填写送鉴人信息</h2>
					<div class="auth_item">
						<span><em>*</em>姓名：</span>
						<p>
							<input placeholder="" name="owner"><strong>（请填写您的真实姓名）</strong>
						</p>
					</div>
					<div class="auth_item" style="overflow:auto;" >
						<span><em>*</em>地区：</span>
						<div class="dress">
							<div id="sjld" style="width:520px;position:relative;" name="region">
								<div class="m_zlxg" id="shenfens">
									<p title=""  >选择省份</p>
									<div class="m_zlxg2" >
										<ul></ul>
									</div>
								</div>
								<div class="m_zlxg" id="chengshis">
									<p title=""  >选择城市</p>
									<div class="m_zlxg2">
										<ul></ul>
									</div>
								</div>
								<div class="m_zlxg" id="quyus">
									<p title=""  >选择区域</p>
									<div class="m_zlxg2" >
										<ul></ul>
									</div>
								</div>
								<input id="sfdq_num" type="hidden"  value=""  />
								<input id="csdq_num" type="hidden" value="" />
								<input id="sfdq_tj" type="hidden" name="province" value=""  />
								<input id="csdq_tj" type="hidden" name="city" value=""  />
								<input id="qydq_tj" type="hidden" name="region" value=""  />
							</div>
							<p style="margin-top: 20px;"><input type="text" name="address" id="" style="width: 500px;" value="" placeholder="请输入详细地址到门牌号"/></p>
						</div>
					</div>
					
					<div class="auth_item" style="margin-top: -160px;">
						<span><em>*</em>电话：</span>
						<p>
							<input placeholder="" name="mobile"><strong>（请填写您的手机号码，以方便我们联系您）</strong>
						</p>
					</div>
					<div class="auth_item">
						<span></span>
						<p><button type="submit" class="tijiao">提交</button></p>
					</div>
				</div>
				
			</form>
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
<script type="text/javascript" src="/beian/Public/home/js/recovery_order.js"></script>
<script src="/beian/Public/home/layer/layer.js"></script>
<script type="text/javascript" src="/beian/Public/home/js/address.js" ></script>