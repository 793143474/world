
layui.use(['laypage', 'layer'], function(){
  var laypage = layui.laypage
  ,layer = layui.layer;
   laypage({
    cont: 'yema'
    ,pages: 100
    ,skip: true
  }) 
});
$(function(){
	
		$('.photo_left img').each(function(){ //jquery.each()循环读取所有图片
	        var imgheight = $(this).height();
	        var imgwidth = $(this).width();
	        if(imgheight<imgwidth){
				$(this).css("width","200px").css("height","auto");
				var hei = $(this).height()
				var mga = 100-imgheight/2;
				$(this).css("margin-top",mga+"px");
				$(this).css("margin-bottom",mga+"px");
			}else{
				$(this).css("height","200px");
				var mga = 100-imgwidth/2;
				$(this).css("margin-left",mga+"px");
			}
	    });
	$('.pic_item img').each(function(){ //jquery.each()循环读取所有图片
	        var imgheight = $(this).height();
	        var imgwidth = $(this).width();
	        if(imgheight<imgwidth){
				$(this).css("width","120px").css("height","auto");
				var hei = $(this).height()
				var mga = 60-imgheight/2;
				$(this).css("margin-top",mga+"px");
				$(this).css("margin-bottom",mga+"px");
			}else{
				$(this).css("height","120px");
				var mga = 60-imgwidth/2;
				$(this).css("margin-left",mga+"px");
			}
	    });
});
