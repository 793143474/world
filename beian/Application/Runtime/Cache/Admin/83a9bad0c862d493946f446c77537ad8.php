<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>后台管理系统</title>
    <meta name="author" content="DeathGhost" />
    <link rel="stylesheet" type="text/css" href="/beian/Public/admin/css/style.css">
    <!--[if lt IE 9]>
    <script src="/beian/Public/admin/js/html5.js"></script>
    <![endif]-->
    <script src="/beian/Public/admin/js/jquery.js"></script>
    <script src="/beian/Public/admin/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <link href="/beian/Public/admin/Css/mypage.css" rel="stylesheet" type="text/css"/>
    <script>

        (function($){
            $(window).load(function(){

                $("a[rel='load-content']").click(function(e){
                    e.preventDefault();
                    var url=$(this).attr("href");
                    $.get(url,function(data){
                        $(".content .mCSB_container").append(data); //load new content inside .mCSB_container
                        //scroll-to appended content
                        $(".content").mCustomScrollbar("scrollTo","h2:last");
                    });
                });

                $(".content").delegate("a[href='top']","click",function(e){
                    e.preventDefault();
                    $(".content").mCustomScrollbar("scrollTo",$(this).attr("href"));
                });

            });
        })(jQuery);
    </script>
</head>
<body>
<!--header-->

<header>
    <h1><img src="/beian/Public/admin/images/admin_logo.png"/></h1>
    <ul class="rt_nav">
        <li><a href="http://www.deathghost.cn" target="_blank" class="website_icon">站点首页</a></li>
        <li><a href="#" class="clear_icon">清除缓存</a></li>
        <li><a href="#" class="admin_icon">DeathGhost</a></li>
        <li><a href="<?php echo U('member/member_list');?>" class="set_icon">账号设置</a></li>
        <li><a href="#" target="_blank" class="website_icon"><?php echo (session('name')); ?></a></li>
        <li><a href="<?php echo U('admin/common/tuichu');?>" class="quit_icon">安全退出</a></li>
    </ul>
</header>
<aside class="lt_aside_nav content mCustomScrollbar">
    <div class="nav_nav" id="tabs_nav">
    <h2><a href="<?php echo U('admin/index/index');?>">系统首页</a></h2>
    <ul>
        <li>
            <dl>
                <dt>系统管理</dt>
                <dd><a href="<?php echo U('postion/postion_detail');?>">系统添加</a></dd>
            </dl>
        </li>
        <li>
            <dl>
                <dt>作品管理</dt>
                <!--当前链接则添加class:active-->
                <dd><a href="<?php echo U('product/product_list');?>" class="active">作品列表</a></dd>
                <!--<dd><a href="<?php echo U('product/product_detail');?>">添加作品</a></dd>-->
                <dd><a href="<?php echo U('product/product_category');?>">作品分类</a></dd>
                <dd><a href="<?php echo U('product/product_material');?>">作品材质分类</a></dd>
                <dd><a href="<?php echo U('product/songjian');?>">送鉴列表</a></dd>
            </dl>
        </li>
        <li>
            <dl>
                <dt>鉴定专场</dt>
                <dd><a href="<?php echo U('special/special_detail');?>">添加专场</a></dd>
                <dd><a href="<?php echo U('special/special_list');?>">专场列表</a></dd>
            </dl>
        </li>
        <li>
            <dl>
                <dt>新闻资讯</dt>
                <dd><a href="<?php echo U('news/news_list');?>">新闻资讯列表</a></dd>
                <dd><a href="<?php echo U('news/news_detail');?>">添加新闻资讯</a></dd>
                <dd><a href="<?php echo U('news/problem_list');?>">常见问题列表</a></dd>
                <dd><a href="<?php echo U('news/problem_detail');?>">添加常见问题</a></dd>
            </dl>
        </li>
        <li>
            <dl>
                <dt>艺术家管理</dt>
                <dd><a href="<?php echo U('artist/artist_detail');?>">添加艺术家</a></dd>
                <dd><a href="<?php echo U('artist/artist_list');?>">艺术家列表</a></dd>
                <dd><a href="<?php echo U('artist/artist_ex');?>">艺术家审核</a></dd>
            </dl>
        </li>
        <li>
            <dl>
                <dt>组织机构管理</dt>
                <dd><a href="<?php echo U('zuzhi/zuzhi');?>">机构列表</a></dd>
            </dl>
        </li>
        <li>
            <dl>
                <dt>联盟管理</dt>
                <dd><a href="<?php echo U('union/union');?>">联盟列表</a></dd>
            </dl>
        </li>
        <li>
            <dl>
                <dt>图集管理</dt>
                <dd><a href="<?php echo U('atlas/atlas_list');?>">图集列表</a></dd>
                <dd><a href="<?php echo U('atlas/atlas_detail');?>">添加图集</a></dd>
            </dl>
        </li>
        <li>
            <dl>
                <dt>会员管理</dt>
                <dd><a href="<?php echo U('user/user_list');?>">会员列表</a></dd>
                <dd><a href="<?php echo U('user/user_detail');?>">添加会员（详情）</a></dd>
                <!--    <dd><a href="<?php echo U('user/user_rank');?>">会员等级</a></dd>
                    <dd><a href="<?php echo U('adjust/adjust_funding');?>">会员资金管理</a></dd>-->
            </dl>
        </li>
    </ul>
        </div>
</aside>
<script type="text/javascript">
    //获取div下面所有的a标签（返回节点对象）
    var myNav = document.getElementByIdx_x("tabs_nav").getElementsByTagName_r("a");

    //获取当前窗口的url
    var myURL = document.location.href;

    //循环div下面所有的链接，
    for(var i=1;i<myNav.length;i++){
        //获取每一个a标签的herf属性
        var links = myNav[i].getAttribute("href");
        var myURL = document.location.href;

        //查看div下的链接是否包含当前窗口，如果存在，则给其添加样式
        if(myURL.indexOf(links) != -1){
            myNav[i].className="active";
            myNav[0].className="";
        }
    }
</script>
<section class="rt_wrap content mCustomScrollbar">

    <div class="page_title">
        <h2 class="fl">专场列表</h2>
        <a class="fr top_rt_btn">返回专场列表</a>
    </div>
    <div name="select">
        <a href="<?php echo U('special/special_list');?>"><input type="button" value="全部专场" class="group_btn" style="color: orange"/></a>
        <a href="<?php echo U('special/special_listone');?>"><input type="button" value="未开始专场" class="group_btn" /></a>
        <a href="<?php echo U('special/special_listtwo');?>"><input type="button" value="已结束专场" class="group_btn" /></a>
    </div>
    <div class="rt_content">
        <form name="myform" id="myform" method="post">
        <table class="table">
            <tr>
                <th><button form="myform" onclick="return confirm('您确定要批量删除？')" formaction="del"　type="submit">批量删除</button></th>
                <th>专场标题</th>
                <th>鉴证人</th>
                <th>开始时间</th>
                <th>结束时间</th>
                <th>鉴证会地址</th>
                <th>操作</th>
            </tr>
            <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                    <td class="center"><input type="checkbox" name="aid[]" value="<?php echo ($vo['aid']); ?>" /></td>
                    <td class="center"><?php echo ($vo['title']); ?></td>
                    <td class="center"><?php echo ($vo['attesters']); ?></td>
                    <td class="center"><?php echo ($vo['starttime']); ?></td>
                    <td class="center"><?php echo ($vo['endtime']); ?></td>
                    <td class="center"><?php echo ($vo['address']); ?></td>
                    <td class="center">
                        <a href="<?php echo U('special/special_edi',array('aid'=>$vo['aid']));?>" title="编辑" class="link_icon">&#101;</a>
                        <a href="<?php echo U('special/special_list',array('aid'=>$vo['aid']));?>" title="删除" name="delete" class="link_icon" onclick="return confirm('您确定要删除？')">&#100;</a>
                    </td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
            </form>
    </div>
    <tr class="content">
        <!--<td colspan="3" bgcolor="#FFFFFF">&nbsp;<?php echo ($page); ?></td>-->
        <td colspan="3" bgcolor="#FFFFFF"><div class="pages">
            <?php echo ($page); ?>
        </div></td>
    </tr>
</section>
<script src="/beian/Public/admin/js/ueditor.config.js"></script>
<script src="/beian/Public/admin/js/ueditor.all.min.js"> </script>
</body>
</html>