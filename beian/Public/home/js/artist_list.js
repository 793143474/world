$(".sort_one span").click(function(){
	$(this).addClass("active");
	$($(this).siblings()).removeClass("active");
})
$(function(){
	$(".artist_Pic img").load(function(){
		$('.artist_Pic img').each(function(){ //jquery.each()循环读取所有图片
	        var imgheight = $(this).height();
	        var imgwidth = $(this).width();
	        if(imgheight<imgwidth){
				$(this).css("width","180px").css("height","auto");
				var hei = $(this).height()
				var mga = 90-imgheight/2;
				$(this).css("margin-top",mga+"px");
				$(this).css("margin-bottom",mga+"px");
			}else{
				$(this).css("height","180px");
				var mga = 90-imgwidth/2;
				$(this).css("margin-left",mga+"px");
			}
	    });
	});
	$(".special_Pic img").load(function(){
		$('.special_Pic img').each(function(){ //jquery.each()循环读取所有图片
	        var imgheight = $(this).height();
	        var imgwidth = $(this).width();
	        if(imgheight<imgwidth){
				$(this).css("width","160px").css("height","auto");
				var hei = $(this).height()
				var mga = 80-imgheight/2;
				$(this).css("margin-top",mga+"px");
				$(this).css("margin-bottom",mga+"px");
			}else{
				$(this).css("height","160px");
				var mga = 80-imgwidth/2;
				$(this).css("margin-left",mga+"px");
			}
	    });
	})
});

layui.use(['laypage', 'layer'], function(){
  var laypage = layui.laypage
  ,layer = layui.layer;
   laypage({
    cont: 'yema'
    ,pages: 100
    ,skip: true
  }) 
});