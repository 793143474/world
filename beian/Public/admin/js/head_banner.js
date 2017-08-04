/**
 * Created by Administrator on 2017/7/27.
 */


        //显示子菜单里的内容
    function displaySubMenu(li) {
        var subMenu = li.getElementsByTagName("ul")[0];
        subMenu.style.display = "block";
    }
    //隐藏子菜单里的内容
    function hideSubMenu(li) {
        var subMenu = li.getElementsByTagName("ul")[0];
        subMenu.style.display = "none";
    }


$(function (){
    body {
        margin: 0 auto;
        font-family:Arial,sans-serif;
    }

    /*将header固定在最上面，并设置高度和宽度*/
.header {
        background-color: #0096d6;
        height: 50px;
        position:fixed;
        width:100%;
        left:0px;
        top:0px;
    };

    /*设计nav的定位方式*/
.nav {
        position: absolute;
    };

    /*去掉ul里的符号*/
.nav > ul {
        list-style-type: none;

    }

    /*将子菜单里的ul的内容隐藏*/
.nav > ul > li > ul {
        display: none;
        list-style-type: none;
        padding:0px;

    }

    /*设计子菜单里的字体大小和间距*/
.nav > ul > li > ul>li {
        font-size: 20px;
        padding:5px 5px;
    }

    /*设置主主菜单li里的浮动方向，每个li的宽度，背景颜色，字体大小*/
.nav > ul > li {
        float: left;
        width: 150px;
        background-color: #0096d6;
        font-size: 25px;
        margin: 0px 5px;
    }

    /*去掉link里的设置*/
.nav a,a:hover, a:visited
    {
        text-decoration:none;
        color:white;
    }
    /*鼠标放到子菜单上面，背景颜色会变*/
.nav>ul>li>ul>li>a:hover
    {
        background-color:white;
        color:#0096d6;
    }

        #content {
        clear: both;
        margin-top: 60px;
    }
})

