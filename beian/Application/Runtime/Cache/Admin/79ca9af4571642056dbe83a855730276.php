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
           <h2 class="fl">作品详情</h2>
           <a class="fr top_rt_btn">返回作品列表</a>
      </div>
     <section>
          <ul class="ulColumn2">
              <form action="postion_detail" method="post" enctype="multipart/form-data">

                  <li>
                      <span class="item_name" style="width:120px;">公司名：</span>
                      <input type="text"  name="name" placeholder="请填写公司名...."/>
                  </li>
                  <li>
                      <span class="item_name" style="width:120px;" >上传logo图片：</span>
                      <label class="uploadImg">
                          <input type="file" name="pictures"/>
                          <img src="">
                          <span>上传图片</span>
                      </label>
                  </li>
                  <li>
                      <span class="item_name" style="width:120px;" >上传水印图片：</span>
                      <label class="uploadImg">
                          <input type="file" name="picture"/>
                          <img src="">
                          <span>上传图片</span>
                      </label>
                  </li>

                  <li>
                      <span class="item_name" style="width:120px;"></span>
                      <input type="submit" class="link_btn" value="提交"/>
                  </li>
              </form>
          </ul>
     </section>
 </div>
</section>
</body>
</html>