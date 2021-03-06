<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>图片放大实例</title>
    <script type="text/javascript" src="js/vvgbase.1.0.js"></script>
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
        }

        #zoomWarp {
            width: 1000px;
            margin: 20px auto;
            overflow: hidden;
        }

        #smallwarp {
            position: relative;
            border: 1px solid #000;
            width: 300px;
            height: 300px;
            float: left;
            overflow: hidden;
        }

        #minImg {
            float: left;
            display: inline;
            margin-right: 5px;
        }

        #minImg li {
            width: 70px;
            height: 70px;
            overflow: hidden;
            background: #ccc;
            margin-bottom: 5px;
            border: 1px solid #333;
            cursor: pointer;
            list-style: none;
        }

        #minImg li.lastChild {
            margin-bottom: 0;
        }
    </style>
</head>
<body>
<iframe src="http://greencat.w211141.fxdns.cn/jsplay/ImgZoomTest.html"></iframe>
<div id="zoomWarp">
    <ul id="minImg">
        <li><img src="images/small.jpg" width="70" height="70" zoom="images/big.jpg"></li>
        <li><img src="images/small1.jpg" width="70" height="70" zoom="images/big1.jpg"></li>
        <li><img src="images/small.jpg" width="70" height="70" zoom="images/big.jpg"></li>
        <li class="lastChild"><img src="images/small1.jpg" width="70" height="70" zoom="images/big1.jpg"></li>
    </ul>
    <div id="smallwarp">
        <img src="images/small.jpg" id="smallImg" zoom="images/big.jpg"/>
    </div>
</div>
<script type="text/javascript">
    var zoomImg = function () {
        return {
            init:function (warpId, options) {
                this.zoomWarp = VVG.$(warpId); //获取外层包裹层
                var sWarp = options.smallWarp || 'smallwarp'; //小图包裹层ID
                var smallWarp = this.smallWarp = VVG.$(sWarp); //获取小图包裹层
                this.targetImg = VVG.$$('img', smallWarp)[0];  //获取放大的目标图片对象
                this.bigImgUrl = this.targetImg.getAttribute('zoom'); //从目标图片对象的自定义属性读取大图的URL
                this.bindMove();
                this.bindMinImg();
            },
            createMask:function () {
                var mask = this.mask = document.createElement("div"); //创建MASK层
                mask.id = "mask";
                // 设置CSS
                VVG.setStyleById(mask, {
                    "position":"absolute",
                    "z-index":100,
                    "display":"none",
                    "width":"100px",
                    "height":"100px",
                    "background":"#999",
                    "border":"1px solid #000",
                    "cursor":"crosshair",
                    "opacity":80,
                    "left":0,
                    "top":0
                });
                this.smallWarp.appendChild(mask); //添加MASK层
            },
            createBigDiv:function () {
                var bigDiv = this.bigDiv = document.createElement("div"); //创建大图显示层
                bigDiv.id = "big";
                VVG.setStyleById(bigDiv, {
                    "float":"left",
                    "border":"1px solid #000",
                    "display":"none",
                    "width":"300px",
                    "height":"300px",
                    "overflow":"hidden",
                    "border-left":"none",
                    "position":"relative",
                    "z-index":"100"
                });
                // 创建大图
                var bigImg = this.bigImg = document.createElement('img');
                bigImg.setAttribute('src', this.bigImgUrl);
                bigImg.id = 'bigImg';
                bigImg.style.position = 'absolute';
                bigDiv.appendChild(bigImg);
                this.zoomWarp.appendChild(bigDiv); //添加大图显示层
            },
            show:function () { // 显示悬浮遮罩层和放大图片层
                this.mask.style.display = 'block';
                this.bigDiv.style.display = 'block';
            },
            hidden:function () { //隐藏层
                this.mask.style.display = 'none';
                this.bigDiv.style.display = 'none';
            },
            zoomIng:function (event) { //开始放大
                this.show(); //显示
                event = VVG.getEvent(event); //获取事件
                var target = this.mask;
                var maskW = target.offsetWidth;
                var maskH = target.offsetHeight;
                //console.log(maskW +':'+maskH);
                var sTop = document.documentElement.scrollTop || document.body.scrollTop;
                var mouseX = event.clientX;
                var mouseY = event.clientY + sTop;
                var smallX = this.smallWarp.offsetLeft;
                var smallY = this.smallWarp.offsetTop;
                var smallW = this.smallWarp.offsetWidth;
                var smallH = this.smallWarp.offsetHeight;
                //console.log('x=' + mouseX + ':y=' + mouseY + ':' + sTop + 'smallX:' + smallX);
                target.style.left = (mouseX - smallX - maskW / 2 ) + "px";
                target.style.top = (mouseY - smallY - maskH / 2 ) + "px";
                //显示位置计算
                if ((mouseX - smallX) < maskW / 2) {
                    target.style.left = "0px";
                } else if ((mouseX - smallX) > (smallW - maskW + maskW / 2)) {
                    target.style.left = (smallW - maskW ) + "px";
                }
                if ((mouseY - smallY) < maskH / 2) {
                    target.style.top = "0px";
                } else if ((mouseY - smallY) > (smallH - maskH + maskH / 2)) {
                    target.style.top = (smallH - maskH) + "px";
                }
                this.showBig(parseInt(target.style.left), parseInt(target.style.top));
            },
            showBig:function (left, top) {
                left = Math.ceil(left * 3);
                top = Math.ceil(top * 3);
                this.bigImg.style.left = -left + "px";
                this.bigImg.style.top = -top + "px";
            },
            bindMove:function () {
                this.createMask();
                this.createBigDiv();
                VVG.bindEvent(this.smallWarp, 'mousemove', VVG.bindFunction(this, this.zoomIng));
                VVG.bindEvent(this.smallWarp, 'mouseout', VVG.bindFunction(this, this.hidden));
            },
            // 以下是左侧小图鼠标放上去后右侧显示相应的大图
            bindMinImg:function () {
                var minImgUl = VVG.$('minImg'); //获取左侧的UL
                var minImgLis = VVG.$$('li', minImgUl); //获取左侧的li
                var thisObj = this; //this 赋值
                for (var i = 0, n = minImgLis.length; i < n; i++) {
                    var liImg = VVG.$$('img', minImgLis[i])[0];
                    var imgSrc = liImg.src;
                    var bImgSrc = liImg.getAttribute('zoom');
                    //以下闭包传值imgSrc,与bImgSrc，并绑定左侧迷你图点击事件
                    VVG.bindEvent(liImg, 'click', function (t,f) {
                        return function () {
                            thisObj.changeImg.call(thisObj,t,f); //此处调用changeImg方法
                        }
                    }(imgSrc,bImgSrc));
                }
            },
            changeImg:function (imgSrc, bImgSrc) { //改变右边的图片地址
                this.targetImg.src = imgSrc;
                this.bigImg.setAttribute('src', bImgSrc);
            }

        }
    }();
    zoomImg.init('zoomWarp', {});
</script>
</body>