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
</aside>
<section class="rt_wrap content mCustomScrollbar">
    <div class="rt_content">
        <div class="page_title">
            <h2 class="fl"><a href="<?php echo U('news/problem_list');?>">常见问题列表</a></h2>
            <a href="<?php echo U('news/problem_detail');?>" class="fr top_rt_btn add_icon">添加问题</a>
        </div>
        <section class="mtb">
            <form action="problem_list" method="post" enctype="multipart/form-data">
                <select class="select" name="select">
                    <option value="1">问题标题</option>
                    <option value="2">责任编辑</option>
                    <option value="3">问题来源</option>
                </select>
                <input type="text" name="ser" class="textbox textbox_225" placeholder="输入产品关键词或产品货号..."/>
                <input type="submit" value="查询" class="group_btn"/>
            </form>
        </section>
        <form name="myform" id="myform" method="post">
        <table class="table">
            <tr>
                <th><button form="myform" onclick="return confirm('您确定要批量删除？')" formaction="del"　type="submit">批量删除</button></th>
                <th>标题</th>
                <th>发布日期</th>
                <th>责任编辑</th>
                <th>来源</th>
                <th>操作</th>
            </tr>
            <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                    <td class="center"><input type="checkbox" name="id[]" value="<?php echo ($vo['id']); ?>" /></td>
                    <td class="center"><?php echo ($vo['title']); ?></td>
                    <td class="center"><?php echo ($vo['btime']); ?></td>
                    <td class="center"><?php echo ($vo['edit']); ?></td>
                    <td class="center"><?php echo ($vo['laiyuan']); ?></td>
                    <td class="center">
                        <a href="<?php echo U('news/problem_edit',array('id'=>$vo['id']));?>" title="编辑" class="link_icon">&#101;</a>
                        <a href="<?php echo U('news/problem_list',array('id'=>$vo['id']));?>" title="删除" class="link_icon" onclick="return confirm('您确定要删除？')">&#100;</a>
                    </td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
            </form>
        <tr class="content">
            <td colspan="3" bgcolor="#FFFFFF"><div class="pages">
                <?php echo ($page); ?>
            </div></td>
        </tr>
    </div>
</section>
</body>
</html>