$(".mian_search_box span").click(function(){
	$(this).prev().prev("input").val("")
})
$(function(){
	$(".auction-img img").load(function(){
		$('.auction-img img').each(function(){ //jquery.each()循环读取所有图片
        var imgheight = $(this).height();
        var imgwidth = $(this).width();
        if(imgheight<imgwidth){
			$(this).css("width","278px").css("height","auto");
			var hei = $(this).height()
			var mga = 137-imgheight/2;
			$(this).css("margin-top",mga+"px");
			$(this).css("margin-bottom",mga+"px");
		}else{
			$(this).css("height","274px");
			var mga = 139-imgwidth/2;
			$(this).css("margin-left",mga+"px");
		}
    });
	});
	
	$(".tiem_class a").click(function(){
	$(this).addClass("active");
	$($(this).siblings()).removeClass("active");
	RetSelecteds();
	Ajxs();
	});
	$(".works_sort span").click(function(){
		$(this).addClass("active");
		$($(this).siblings()).removeClass("active");
		RetSelecteds();
		Ajxs();
	});
	
	$(".tiem_class input").blur(function(){
	  RetSelecteds();
	  Ajxs();
	});
	RetSelecteds();
	Ajxs();
//	alert(RetSelecteds().split(",")[1]);
   function RetSelecteds() {
        var result = "";
        $(".tiem_class a[class='active']").each(function () {
            result += ","+$(this).data("type")+"\n";
        });
         $(".tiem_class input[class='layui-input']").each(function () {
            result += ","+$(this).val()+"\n";
        });
        $(".works_sort span.active a").each(function () {
            result += ","+$(this).data("type")+"\n";
        });
        return result;
   };
 
/*分页*/
function Ajxs(){
	 	var one = RetSelecteds().split(",")[1];
        var two = RetSelecteds().split(",")[2];
        var three = RetSelecteds().split(",")[3];
        var four = RetSelecteds().split(",")[4]!=0 ? RetSelecteds().split(",")[4] : '';
        var five = RetSelecteds().split(",")[5]!=0 ? RetSelecteds().split(",")[5] : '';
        var six = RetSelecteds().split(",")[6];
        var container = $('.works_list ul');
        $.ajax({
        	url:'http://192.168.0.179/beian/index.php/work/works2',
        	type:"post",
        	dataType:'json',
        	data:{
        		'sorce':parseInt(one),
				'years':parseInt(two),
				'type':parseInt(three),
				'starttime':four,
				'endtime':five,
				'rid':six
        	},
        	success:function(data){
        		eval(data);
			console.log(data);
//			var list = '';
//			//$("#waterfull ul")
//			for(var i = 0 ; i < data.length; i++){
//					list+="<li><div class='auction-img'><a href='"+data[i].url+"'><img src="+data[i].banner+"></a></div>";
//					list+="<p class='auction_time'>编号：<span>"+data[i].bianhao+"</span></p>";
//					list+="<p class='auction_title'><a href='"+data[i].url+"'>"+data[i].name+"</a></p>";
//					list+="<div class='auction_meta'><p class='price'>来源:<span>"+data[i].lainame+"</span></p>";
//					list+="<p class='price'>作者:<span>"+data[i].yname+"</span></p><p class='price'>年代:<span>"+data[i].cztime+"</span></p><p class='price'>尺寸:<span>"+data[i].size+"</span></p></div></li>";	
//			}
//			container.html(list);·
			 layui.use(['laypage', 'layer'], function(){
				var laypage = layui.laypage
				,layer = layui.layer;
					var nums = 6; //每页出现的数据量

				  //模拟渲染
				  var render = function(data, curr){
				    var arr = []
				    ,thisData = data.concat().splice(curr*nums-nums, nums);
				    layui.each(thisData, function(index, item){
				    console.log(item);
				      arr.push('<li><div class="auction-img"><a href="'+item.url+'"><img src="http://192.168.0.179//beian/public/upload/'+item.banner+'"></a></div><p class="auction_time">编号：<span>'+item.bianhao+'</span></p><p class="auction_title"><a href="'+item.url+'">'+item.name+'</a></p><div class="auction_meta"><p class="price">来源:<span>'+item.lainame+'</span></p><p class="price">作者:<span>'+item.yname+'</span></p><p class="price">年代:<span>'+item.cztime+'</span></p><p class="price">尺寸:<span>'+item.size+'</span></p></div></li>');
				     
				    });
				    return arr.join('');
				  };
				  
				  //调用分页
				  laypage({
				    cont: 'yema'
				    ,pages: Math.ceil(data.length/nums) //得到总页数
				    ,jump: function(obj){
				      document.getElementById('yeconnet').innerHTML = render(data, obj.curr);
				    }
				  });
				});	
			  
			
//			alert(one)
//			alert(two)
//			alert(three)
//			alert(four)
//			alert(five)
        	},
        	error:function(){
        		alert("网络出错!请刷新重试!")
        	}
        })
        
}
    
	
});
/*日期*/
layui.use('laydate', function(){
  var laydate = layui.laydate;
  
  var start = {
    min: '2000-01-01 00:00:00'
    ,max: '2099-06-16 23:59:59'
    ,istoday: false
    ,choose: function(datas){
      end.min = datas; //开始日选好后，重置结束日的最小日期
      end.start = datas //将结束日的初始值设定为开始日
    }
  };
  
  var end = {
    min: '2000-01-01 00:00:00'
    ,max: '2099-06-16 23:59:59'
    ,istoday: false
    ,choose: function(datas){
      start.max = datas; //结束日选好后，重置开始日的最大日期
    }
  };
  
  document.getElementById('LAY_demorange_s').onclick = function(){
    start.elem = this;
    laydate(start);
  }
  document.getElementById('LAY_demorange_e').onclick = function(){
    end.elem = this
    laydate(end);
  }
  
});


	
