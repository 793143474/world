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
<!--header-->
<header>
    <h1><img src="/beian/Public/admin/images/admin_logo.png"/></h1>
    <ul class="rt_nav">
        <li><a href="http://www.deathghost.cn" target="_blank" class="website_icon">站点首页</a></li>
        <li><a href="#" class="clear_icon">清除缓存</a></li>
        <li><a href="#" class="admin_icon">DeathGhost</a></li>
        <li><a href="#" class="set_icon">账号设置</a></li>
        <li><a href="<?php echo U('admin/login/login');?>" class="quit_icon">安全退出</a></li>
    </ul>
</header>
<!--aside nav-->

<!--aside nav-->
<aside class="lt_aside_nav content mCustomScrollbar">
    <h2><a href="<?php echo U('admin/index/index');?>">系统首页</a></h2>
    <ul>
        <li>
            <dl>
                <dt>作品管理</dt>
                <!--当前链接则添加class:active-->
                <dd><a href="<?php echo U('product/product_list');?>" class="active">作品列表</a></dd>
                <dd><a href="<?php echo U('product/product_detail');?>">添加作品</a></dd>
                <dd><a href="<?php echo U('product/product_category');?>">作品分类</a></dd>
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
                <dd><a href="<?php echo U('artist/artist_list');?>">艺术家管理</a></dd>
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
            <h2 class="fl">组织机构</h2>
            <a class="fr top_rt_btn" href="<?php echo U('zuzhi/zuzhi');?>">返回机构列表</a>
        </div>
        <section>
            <ul class="ulColumn2">
                <form action="<?php echo U('zuzhi/zuzhi_edit',array('id'=>$data['id']));?>" method="post" enctype="multipart/form-data">
                    <li>
                        <span class="item_name" style="width:120px;">机构名称：</span>
                        <input name="name" type="text" class="textbox textbox_295" value="<?php echo ($data['mechanism_name']); ?>" onfocus="this.blur()"/>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">机构类型：</span>
                        <input name="cate" type="text" class="textbox textbox_295" value="<?php echo ($data['mechanism_cate']); ?>" onfocus="this.blur()"/>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">法人姓名：</span>
                        <input type="text" class="textbox textbox_295" value="<?php echo ($data['mechanism_faren']); ?>" onfocus="this.blur()"/>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">机构地址：</span>
                        <input type="text" class="textbox textbox_295" value="<?php echo ($data['mechanism_address']); ?>" onfocus="this.blur()"/>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">联系人姓名：</span>
                        <input type="text" class="textbox textbox_295" value="<?php echo ($data['mechanism_contacts']); ?>" onfocus="this.blur()"/>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">手机号：</span>
                        <input type="text" class="textbox textbox_295" value="<?php echo ($data['mobile']); ?>" onfocus="this.blur()"/>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">电子邮箱：</span>
                        <input type="text" class="textbox textbox_295" value="<?php echo ($data['email']); ?>" onfocus="this.blur()"/>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">职务及所属协会：</span>
                        <input type="text" class="textbox textbox_295" value="<?php echo ($data['position']); ?>" onfocus="this.blur()"/>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">营业执照扫描件：</span>
                        <label class="uploadImg" >
                            <img src="/beian/Public/Upload/<?php echo ($data['mechanism_photo']); ?>" width="80" height="80"/>
                        </label>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">组织机构代码证扫描件：</span>
                        <label class="uploadImg" >
                            <img src="/beian/Public/Upload/<?php echo ($data['mechanism_photo1']); ?>" width="80" height="80"/>
                        </label>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">上传时间：</span>
                        <input type="text" class="textbox textbox_295" value="<?php echo ($data['time']); ?>" onfocus="this.blur()"/>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">审批：</span>
                        <input type="radio" class="textbox textbox_295" name="style" style="width: 100px" value="1"/>同意
                        <input type="radio" class="textbox textbox_295" name="style" style="width: 100px" value="0"/>不同意
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
<script src="/beian/Public/admin/js/ueditor.config.js"></script>
<script src="/beian/Public/admin/js/ueditor.all.min.js"> </script>
<script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('editor');


    function isFocus(e){
        alert(UE.getEditor('editor').isFocus());
        UE.dom.domUtils.preventDefault(e)
    }
    function setblur(e){
        UE.getEditor('editor').blur();
        UE.dom.domUtils.preventDefault(e)
    }
    function insertHtml() {
        var value = prompt('插入html代码', '');
        UE.getEditor('editor').execCommand('insertHtml', value)
    }
    function createEditor() {
        enableBtn();
        UE.getEditor('editor');
    }
    function getAllHtml() {
        alert(UE.getEditor('editor').getAllHtml())
    }
    function getContent() {
        var arr = [];
        arr.push("使用editor.getContent()方法可以获得编辑器的内容");
        arr.push("内容为：");
        arr.push(UE.getEditor('editor').getContent());
        alert(arr.join("\n"));
    }
    function getPlainTxt() {
        var arr = [];
        arr.push("使用editor.getPlainTxt()方法可以获得编辑器的带格式的纯文本内容");
        arr.push("内容为：");
        arr.push(UE.getEditor('editor').getPlainTxt());
        alert(arr.join('\n'))
    }
    function setContent(isAppendTo) {
        var arr = [];
        arr.push("使用editor.setContent('欢迎使用ueditor')方法可以设置编辑器的内容");
        UE.getEditor('editor').setContent('欢迎使用ueditor', isAppendTo);
        alert(arr.join("\n"));
    }
    function setDisabled() {
        UE.getEditor('editor').setDisabled('fullscreen');
        disableBtn("enable");
    }

    function setEnabled() {
        UE.getEditor('editor').setEnabled();
        enableBtn();
    }

    function getText() {
        //当你点击按钮时编辑区域已经失去了焦点，如果直接用getText将不会得到内容，所以要在选回来，然后取得内容
        var range = UE.getEditor('editor').selection.getRange();
        range.select();
        var txt = UE.getEditor('editor').selection.getText();
        alert(txt)
    }

    function getContentTxt() {
        var arr = [];
        arr.push("使用editor.getContentTxt()方法可以获得编辑器的纯文本内容");
        arr.push("编辑器的纯文本内容为：");
        arr.push(UE.getEditor('editor').getContentTxt());
        alert(arr.join("\n"));
    }
    function hasContent() {
        var arr = [];
        arr.push("使用editor.hasContents()方法判断编辑器里是否有内容");
        arr.push("判断结果为：");
        arr.push(UE.getEditor('editor').hasContents());
        alert(arr.join("\n"));
    }
    function setFocus() {
        UE.getEditor('editor').focus();
    }
    function deleteEditor() {
        disableBtn();
        UE.getEditor('editor').destroy();
    }
    function disableBtn(str) {
        var div = document.getElementById('btns');
        var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
        for (var i = 0, btn; btn = btns[i++];) {
            if (btn.id == str) {
                UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
            } else {
                btn.setAttribute("disabled", "true");
            }
        }
    }
    function enableBtn() {
        var div = document.getElementById('btns');
        var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
        for (var i = 0, btn; btn = btns[i++];) {
            UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
        }
    }

    function getLocalData () {
        alert(UE.getEditor('editor').execCommand( "getlocaldata" ));
    }

    function clearLocalData () {
        UE.getEditor('editor').execCommand( "clearlocaldata" );
        alert("已清空草稿箱")
    }
</script>
</body>
</html>