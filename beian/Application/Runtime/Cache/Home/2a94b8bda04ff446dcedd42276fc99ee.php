<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cmn-Hans">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>首页</title>
    <meta name="keywords" content="关键词">
    <meta name="description" content="网站描述">
    <meta name="author" content="heyunqiang99@163.com">
    <meta name="renderer" content="webkit">
    <link rel="shortcut icon" href="/beian/Public/home/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="/beian/Public/home/css/common.css">
    <link rel="stylesheet" type="text/css" href="/beian/Public/home/css/index.css">
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
<!-- 首页banner开始 -->
<div class="index-banner">
    <div class="public-container cl">
        <div class="imgscroll-introduction fl">
            <div class="imgscroll">
                <div id="demo1" class="picBtnTop">
                    <div class="hd">
                        <ul>
                            <?php if(is_array($result)): $i = 0; $__LIST__ = array_slice($result,0,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('news/news',array('nid'=>$vo['nid']));?>"><?php echo ($vo['ntitle']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>

                        </ul>
                    </div>
                    <div class="bd">
                        <ul>
                            <?php if(is_array($result)): $i = 0; $__LIST__ = array_slice($result,0,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                                    <div class="pic">
                                        <a href="<?php echo U('news/news',array('nid'=>$vo['nid']));?>"><img src="/beian/Public/Upload/<?php echo ($vo['banner']); ?>"/></a>
                                    </div>
                                </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="introduction">
                <ul>
                    <li>
                        <div class="one">
                            <h2><span>鉴证备案的价值</span><br><b>为艺术品<br>建立“身份证”</b></h2>
                            <p><a href="<?php echo U('value/value');?>" target="_blank">详细 &gt;&gt;</a></p>
                        </div>
                    </li>
                    <li>
                        <div class="two">
                            <h2><span>鉴证备案的价值</span><br><b>备案数据云存储，<br>可查询可验证</b></h2>
                            <p><a href="<?php echo U('value/value');?>" target="_blank">详细 &gt;&gt;</a></p>
                        </div>
                    </li>
                    <li>
                        <div class="three">
                            <h2><span>鉴证备案的价值</span><br><b>从此让中国<br>艺术品传承有序</b></h2>
                            <p><a href="<?php echo U('value/value');?>" target="_blank">详细 &gt;&gt;</a></p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- 藏品送鉴流程 -->
        <div class="send-process fr">
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
                    <form action="index" method="post" enctype="multipart/form-data">
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
        </div>
    </div>
</div>
<!-- 首页banner结束 -->
<!-- 新闻资讯常见问题开始 -->
<div class="index-panel">
    <div class="public-container cl">
        <div class="index-panel-left">
            <div class="index-panel-header cl">
                <h3 class="fl">新闻资讯</h3>
                <a class="more-links fr" href="<?php echo U('news/news_list');?>">更多&gt;&gt;</a>
            </div>
            <div class="index-panel-body">
                <div class="newslist">
                    <!-- 显示八条资讯 -->
                    <ul>
                        <?php if(is_array($result)): $i = 0; $__LIST__ = array_slice($result,0,8,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                                <a href="<?php echo U('news/news',array('nid'=>$vo['nid']));?>" target="_blank" title="<?php echo ($vo['name']); ?>"><em>●</em>[<?php echo ($vo['name']); ?>]</a>
                                <a class="title" href="<?php echo U('news/news',array('nid'=>$vo['nid']));?>" target="_blank" title="<?php echo ($vo['ntitle']); ?>">
                                    <?php echo ($vo['ntitle']); ?></a>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>

                    </ul>
                </div>
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
                        <?php if(is_array($dpr)): $i = 0; $__LIST__ = array_slice($dpr,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                                <a href="<?php echo U('news/news',array('id'=>$vo['id']));?>" target="_blank" title="观点"><em>●</em>[回答]</a>
                                <a href="<?php echo U('news/news',array('id'=>$vo['id']));?>"><?php echo ($vo['title']); ?></a>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 新闻资讯常见问题结束 -->
<!-- 征集中艺术家 名家鉴证实录开始 -->
<div class="index-panel">
    <div class="public-container cl">
        <div class="index-panel-left">
            <div class="index-panel-header cl">
                <h3 class="fl"> 征集中艺术家</h3>
                <a class="more-links fr" href="<?php echo U('artist/artist_list');?>">更多&gt;&gt;</a>
                <a class="want-zj" href="<?php echo U('apply/apply');?>">我要征集</a>
            </div>
            <div class="index-panel-body">
                <ul class="forensic-artist cl">
                    <?php if(is_array($data)): $i = 0; $__LIST__ = array_slice($data,0,8,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                            <!--  遍历   征集中艺术家 名家鉴证实录开始 -->
                            <div class="img-artist">
                                <a href="<?php echo U('artist/Artist',array('yid'=>$vo['yid']));?>">
                                    <img src="/beian/Public/Upload/<?php echo ($vo['aphoto']); ?>" style="width: 160px;height: 160px">
                                </a>
                            </div>
                            <div class="artist-info">
                                <p class="zjmTit"><a href="<?php echo U('artist/Artist',array('yid'=>$vo['yid']));?>"><?php echo ($vo['yname']); ?></a></p>
                                <p class="zjmNum">已征集<span><?php echo ($vo['collect']); ?></span>件</p>
                                <p class="zjFq">发起:<a href="javacript:;">华地收藏</a></p>
                            </div>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>

                </ul>
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
                        <div class="info">
                            <?php if(is_array($result)): $i = 0; $__LIST__ = array_slice($result,0,2,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                                    <a href="<?php echo U('news/news',array('nid'=>$vo['nid']));?>">
                                        [<?php echo ($vo['name']); ?>]<?php echo ($vo['ntitle']); ?></a>
                                </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                        <a href="<?php echo U('news/news_list');?>" class="fr more-info">更多详情>></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 征集中艺术家 名家鉴证实录结束 -->
<!-- 最新鉴证 名家鉴证实录开始 -->
<div class="index-panel">
    <div class="public-container cl">
        <div class="index-panel-left">
            <div class="index-panel-header cl">
                <h3 class="fl">最新鉴证</h3>
                <a class="more-links fr" href="<?php echo U('work/works');?>">更多&gt;&gt;</a>
                <a class="want-zj" href="<?php echo U('apply/apply');?>">我要征集</a>
            </div>
            <div class="index-panel-body">
                <!-- liebiao -->
                <ul class="latest-appraisal cl">
                    <?php if(is_array($goods)): $i = 0; $__LIST__ = array_slice($goods,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                            <div class="img-appraisal">
                                <a href="<?php echo U('details/details',array('gid'=>$vo['gid']));?>">
                                    <img src="/beian/Public/Upload/<?php echo ($vo['banner']); ?>" style="width: 160px;height: 160px">
                                </a>
                            </div>
                            <div class="appraisal-info">
                                <p class="title"><a href="<?php echo U('details/details',array('gid'=>$vo['gid']));?>"><?php echo ($vo['name']); ?></a></p>
                                <p class="status-appraisal">已鉴定</p>
                            </div>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
                <!-- 已在线鉴定 -->
                <div class="instance cl">
                    <div class="instance-left fl">
                        <div class="insTit">
                            <span>已在线鉴定</span>
                        </div>
                        <ul class="txtlist">
                            <?php if(is_array($chushen)): $i = 0; $__LIST__ = array_slice($chushen,0,6,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="cl">
                                    <em>●</em>
                                    <a href="<?php echo U('details/details',array('gid'=>$vo['gid']));?>" target="_blank" title="<?php echo ($vo['auther']); ?>《<?php echo ($vo['cname']); ?>》"><?php echo ($vo['yname']); ?>《<?php echo ($vo['name']); ?>》</a><span class="fr">已鉴定</span>
                                </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                    <div class="instance-right fr">
                        <div class="insTit">
                            <span>已在线鉴定</span>
                        </div>
                        <ul class="txtlist">
                            <?php if(is_array($chushen)): $i = 0; $__LIST__ = array_slice($chushen,7,12,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="cl">
                                    <em>●</em>
                                    <a href="<?php echo U('details/details',array('gid'=>$vo['gid']));?>" target="_blank" title="<?php echo ($vo['auther']); ?>《<?php echo ($vo['cname']); ?>》"><?php echo ($vo['yname']); ?>《<?php echo ($vo['name']); ?>》</a><span class="fr">已鉴定</span>
                                </li><?php endforeach; endif; else: echo "" ;endif; ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="index-panel-right">
            <div class="index-panel-header cl">
                <h3 class="fl"><a href="<?php echo U('work/works');?>">已初审精品赏析</a></h3>
            </div>
            <div class="index-panel-body">
                <div class="show-works">
                    <ul class="cl">
                        <?php if(is_array($chushen)): $i = 0; $__LIST__ = array_slice($chushen,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                                <a href="<?php echo U('details/details',array('gid'=>$vo['gid']));?>">
                                    <img src="/beian/Public/Upload/<?php echo ($vo['banner']); ?>" style="width: 160px;height: 160px">
                                    <span class="title"><?php echo ($vo['name']); ?></span>
                                </a>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 最新鉴证 名家鉴证实录结束 -->
<!-- 现场图集开始 -->
<div class="index-panel">
    <div class="public-container">
        <div class="index-panel-header">
            <h3 class="fl"><a href="<?php echo U('photo/photo_list');?>">现场图集</a></h3>
        </div>
        <div class="index-panel-body">
            <ul class="img-box cl">
                <?php if(is_array($tuji)): $i = 0; $__LIST__ = array_slice($tuji,0,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                        <a href="<?php echo U('photo/photo',array('id'=>$vo['id']));?>">
                            <img src="/beian/Public/Upload/<?php echo ($vo['banner']); ?>" style="width: 160px;height: 160px">
                        </a>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
            <!--    <li>
                    <a href="<?php echo U('photo/photo_list');?>">
                        <img src="http://dummyimage.com/220x220/4d494d/686a82.gif&text=placeholder+image" alt="placeholder+image">
                    </a>
                </li>
                <li>
                    <a href="<?php echo U('photo/photo_list');?>">
                        <img src="http://dummyimage.com/220x220/4d494d/686a82.gif&text=placeholder+image" alt="placeholder+image">
                    </a>
                </li>
                <li>
                    <a href="<?php echo U('photo/photo_list');?>">
                        <img src="http://dummyimage.com/220x220/4d494d/686a82.gif&text=placeholder+image" alt="placeholder+image">
                    </a>
                </li>
                <li>
                    <a href="<?php echo U('photo/photo_list');?>">
                        <img src="http://dummyimage.com/220x220/4d494d/686a82.gif&text=placeholder+image" alt="placeholder+image">
                    </a>
                </li>
                <li>
                    <a href="javacript:;">
                        <img src="http://dummyimage.com/220x220/4d494d/686a82.gif&text=placeholder+image" alt="placeholder+image">
                    </a>
                </li>
                <li>
                    <a href="javacript:;">
                        <img src="http://dummyimage.com/220x220/4d494d/686a82.gif&text=placeholder+image" alt="placeholder+image">
                    </a>
                </li>
                <li>
                    <a href="javacript:;">
                        <img src="http://dummyimage.com/220x220/4d494d/686a82.gif&text=placeholder+image" alt="placeholder+image">
                    </a>
                </li>
                <li>
                    <a href="javacript:;">
                        <img src="http://dummyimage.com/220x220/4d494d/686a82.gif&text=placeholder+image" alt="placeholder+image">
                    </a>
                </li>
                <li>
                    <a href="javacript:;">
                        <img src="http://dummyimage.com/220x220/4d494d/686a82.gif&text=placeholder+image" alt="placeholder+image">
                    </a>
                </li>
                <li>
                    <a href="javacript:;">
                        <img src="http://dummyimage.com/220x220/4d494d/686a82.gif&text=placeholder+image" alt="placeholder+image">
                    </a>
                </li>-->
            </ul>
        </div>
    </div>
</div>
<!-- 现场图集结束 -->
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
<script src="/beian/Public/home/js/common.js"></script>
<script src="/beian/Public/home/lib/jquery.SuperSlide.2.1.1.js"></script>
<script type="text/javascript">
jQuery("#demo1").slide({
    mainCell: ".bd ul",
    effect: "top",
    autoPlay: true,
    triggerTime: 0
});
</script>