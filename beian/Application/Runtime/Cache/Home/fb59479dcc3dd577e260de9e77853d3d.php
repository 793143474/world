<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cmn-Hans">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>鉴证备案——艺术家申请</title>
    <meta name="keywords" content="关键词">
    <meta name="description" content="网站描述">
    <meta name="author" content="heyunqiang99@163.com">
    <meta name="renderer" content="webkit">
    <link rel="shortcut icon" href="/beian/Public/home/favicon.ico" />
    <link rel="stylesheet" href="/beian/Public/home/layui/css/layui.css" />
    <link rel="stylesheet" type="text/css" href="/beian/Public/home/css/common.css">
    <link rel="stylesheet" href="/beian/Public/home/css/apply.css" />
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
                <li><a href="<?php echo U('artist/artist_list');?>">艺术家</a></li>
                <li><a href="<?php echo U('work/works');?>">作品</a></li>
                <li class="on"><a href="<?php echo U('union/union');?>">诚信联盟</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- 顶部结束 -->
<div class="recovery_box">
    <div class="auth_nav">
        <span class="active">我是艺术家</span>
        <a href="<?php echo U('mechanism/mechanism');?>">我是机构</a>
    </div>

    <div class="authentication">
        <h2>请填写您的信息<span>（标有<i>*</i>为必填项）</span></h2>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="auth_item pic_item input">
                <span><em>*</em>上传真实头像：</span>
                <div class="upload">
                    <div class="img_div">
                    </div>
                    <a href="javascript:;" class="a-upload">
                        <input type="file" name="myFile" id="myFile" multiple="multiple"/>点击这里上传文件
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
                <strong class="tianjia">（图片格式为JPG、PNG，大小不超过1M）</strong>
            </div>
            <div class="auth_item input">
                <span><em>*</em>姓名：</span>
                <p>
                    <input placeholder="您的姓名" name="yname" maxlength="6"><strong>请填写您的真实姓名</strong>
                </p>
            </div>
            <div class="auth_item">
                <span>出生时间：</span>
                <p class="layui-inline">
                    <input class="layui-input" name="birthday" placeholder="年月日" onclick="layui.laydate({elem: this, festival: true})">
                    <strong></strong>
                </p>
            </div>

            <div class="auth_item">
                <span>籍贯：</span>
                <p>
                    <input type="text" placeholder="" maxlength="50" name="jiguan">
                    <strong>请填写您的地址</strong>
                </p>
            </div>

            <div class="auth_item">
                <span>居住地：</span>
                <p>
                    <input type="text" placeholder="" maxlength="50" name="address">
                    <strong>请填写您的地址</strong>
                </p>
            </div>

            <div class="auth_item input">
                <span><em>*</em>手机号：</span>
                <p>
                    <input id="tel" placeholder="您的手机号" name="mobile"><strong>请填写您的手机号，以方便我们联系您</strong>
                </p>
            </div>

            <div class="auth_item input">
                <span><em>*</em>电子邮箱：</span>
                <p>
                    <input id="email"  type="email" name="email" placeholder="您的电子邮箱"><strong>请填写您的电子邮箱</strong>
                </p>
            </div>
            <div class="auth_item">
                <span>毕业院校：</span>
                <p>
                    <input type="text" placeholder="" maxlength="50" name="university">
                    <strong>请填写您的毕业院校名称</strong>
                </p>
            </div>
            <div class="auth_item">
                <span>师承：</span>
                <p>
                    <input type="text" placeholder="" maxlength="50" name="apprentice">
                    <strong>请填写您的师承姓名</strong>
                </p>
            </div>
            <div class="auth_item">
                <span>职务及所属协会：</span>
                <p>
                    <input type="text" placeholder="" maxlength="50" name="position">
                    <strong>请填=填写所属协会</strong>
                </p>
            </div>

            <div class="auth_item">
                <span></span>
                <p>
                    <button type="submit" class="tijiao">提交</button>
                </p>
            </div>

        </form>
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
<script src="/beian/Public/home/layer/layer.js"></script>
<script type="text/javascript" src="/beian/Public/home/layui/lay/dest/layui.all.js"></script>
<script type="text/javascript" src="/beian/Public/home/js/apply.js"></script>