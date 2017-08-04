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
    <div class="rt_content">
        <div class="page_title">
            <h2 class="fl">作品分类管理</h2>
            <a class="fr top_rt_btn" href="<?php echo U('product/product_list');?>">返回作品列表</a>
        </div>
        <section>
            <ul class="ulColumn2">
              <form action="category" method="post" enctype="multipart/form-data" >
                    <li>
                        <span class="item_name" style="width:120px;">作品分类：</span>

                        <select class="select" name="category">
                            <option value="0" class="on">顶级分类</option>
                            <?php if(is_array($aaa)): $i = 0; $__LIST__ = $aaa;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['cid']); ?>"><?php echo ($vo['pcategory']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                        <input type="text" name="pcategory" class="textbox textbox_295" placeholder="商品分类名称"/>
                        <input type="submit" class="item_name" style="height: 38px" name="submit" id="submit" value="确定添加" >
                    </li>
             </form>
            </ul>
            <table class="table">
                <tr>

                    <th>分类结构</th>
                    <th>操作属性</th>
                    <th>分类值</th>
                    <th>排序</th>
                    <th>操作</th>
                </tr>
                <?php if(is_array($arr)): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><form action="product_category" method="post" >
                    <tr>
                        <input type="hidden" name="cid" class="textbox" value="<?php echo ($vo['cid']); ?>"/>
                        <td><?php echo ($vo['h']); echo ($vo['pcategory']); ?></td>
                        <td><select name="P_A" class="select">
                            <option value="2">所有选择</option>
                            <option value="0">修改分类</option>
                            <option value="1">删除分类</option>
                        </select></td>
                        <td><input type="text" name="newname"  placeholder="" ></td>
                        <td><input type="text" name="newname"  placeholder="" value="<?php echo ($vo['zhi']); ?>" onfocus="this.blur()"></td>
                        <td class="center">
                            <input type="submit" value="确定">
                        </td>
                    </tr>
                    </form><?php endforeach; endif; else: echo "" ;endif; ?>
            </table>
        </section>
    </div>
</section>
<script src="/beian/Public/admin/js/ueditor.config.js"></script>
<!--<script src="/beian/Public/admin/js/ueditor.all.min.js"> </script>-->
</body>
<!--<script>
    $(document).ready(function() {
        $("#submit").click(function(){
            var pcategory=$('#pcategory');
            $.ajax({
                type: 'post',
                url:"<?php echo U('admin/Product/product_gory');?>",
                data: {pcategory:pcategory.val()},
                dataType: "json",
                success: function(data){
                    if(data == 1){
                        window.location.href = "<?php echo U('admin/Product/product_category');?>";
                    }else{
                        alert(data);
                    }
                },
                error:function(jqXHR, textStatus, errorThrown){
                    alert("服务器没有返回数据，可能服务器忙，请重试"+errorThrown);
                }
            });
        });
    });
</script>-->
</html>