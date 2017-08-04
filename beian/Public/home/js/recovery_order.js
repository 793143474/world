$(function() {
	$("#myFile").change(function() {
		var objUrl;
		var img_html;
		var num = -1;
		var img_div = $(this).parents(".upload").children(".img_div");
		var shade = $(this).parents(".upload").children(".shade");
		var text_span = $(this).parents(".upload").children(".text_span");
		var filepath = $("input[name='myFile']").val();
		for(var i = 0; i < this.files.length; i++) {
			objUrl = getObjectURL(this.files[i]);
			var extStart = filepath.lastIndexOf(".");
			var ext = filepath.substring(extStart, filepath.length).toUpperCase();
			/*
			 作者：z@qq.com
        	时间：2016-12-10
        	描述：鉴定每个图片上传尾椎限制
	 		* */
			if(ext != ".BMP" && ext != ".PNG" && ext != ".GIF" && ext != ".JPG" && ext != ".JPEG") {
				shade.fadeIn(500);
				text_span.text("图片限于bmp,png,gif,jpeg,jpg格式");
				this.value = "";
				img_div.html("");
				return false;
			} else {
				/*
				 若规则全部通过则在此提交url到后台数据库
				 * */
				img_html = "<div class='isImg'><img src='" + objUrl + "' onclick='javascript:lookBigImg(this)'/><button class='removeBtn' onclick='javascript:removeImg(this)'>x</button><input type='file' value='' ></div>";
				num++;
				var faile = $(".isImg").eq(num).children(" input").value;
				faile = $("input[name='myFile']").val();
				img_div.html(img_html);
				
			}
		}
		/*
		 作者：z@qq.com
    	时间：2016-12-10
    	描述：鉴定每个图片大小总和
	 	* */
		var file_size = 0;
		var all_size = 0;
		for(j = 0; j < this.files.length; j++) {
			file_size = this.files[j].size;
			all_size = all_size + this.files[j].size;
			var size = all_size / 1024;
			if(size > 1024) {
				shade.fadeIn(1024);
				text_span.text("上传的图片大小不能超过1024k！");
				this.value = "";
				img_div.html("");
				return false;
			}
		}
		/*
		 作者：z@qq.com
    	时间：2016-12-10
    	描述：鉴定每个图片宽高 以后会做优化 多个图片的宽高 暂时隐藏掉 想看效果可以取消注释就行
	 	* */
		//					var img = new Image();
		//					img.src = objUrl;
		//					img.onload = function() {
		//						if (img.width > 100 && img.height > 100) {
		//							alert("图片宽高不能大于一百");
		//							$("#myFile").val("");
		//							$(".img_div").html("");
		//							return false;
		//						}
		//					}
		$('.isImg img').load(function(){
		   var imgheight = $(this).height();
	        var imgwidth = $(this).width();
	        if(imgheight<imgwidth){
				$(this).css("width","120px");
				var mga = 60-imgheight/2;
				$(this).css("margin-top",mga+"px");
				$(this).css("margin-bottom",mga+"px");
			}else{
				$(this).css("height","120px");
				var mga = 60-imgwidth/2;
				$(this).css("margin-left",mga+"px");
			}  
		});
		return true;
					
	});
	$("#myFile1").change(function() {
		var objUrl;
		var img_html;
		var num = -1;
		var img_div = $(this).parents(".upload").children(".img_div");
		var shade = $(this).parents(".upload").children(".shade");
		var text_span = $(this).parents(".upload").children(".text_span");
		var filepath = $("input[name='myFile1']").val();
		for(var i = 0; i < this.files.length; i++) {
			objUrl = getObjectURL(this.files[i]);
			var extStart = filepath.lastIndexOf(".");
			var ext = filepath.substring(extStart, filepath.length).toUpperCase();
			/*
			 作者：z@qq.com
        	时间：2016-12-10
        	描述：鉴定每个图片上传尾椎限制
	 		* */
			if(ext != ".BMP" && ext != ".PNG" && ext != ".GIF" && ext != ".JPG" && ext != ".JPEG") {
				shade.fadeIn(500);
				text_span.text("图片限于bmp,png,gif,jpeg,jpg格式");
				this.value = "";
				img_div.html("");
				return false;
			} else {
				/*
				 若规则全部通过则在此提交url到后台数据库
				 * */
				img_html = "<div class='isImg'><img src='" + objUrl + "' onclick='javascript:lookBigImg(this)'/><button class='removeBtn' onclick='javascript:removeImg(this)'>x</button><input type='file' value='' ></div>";
				num++;
				var faile = $(".isImg").eq(num).children(" input").value;
				faile = $("input[name='myFile1']").val();
				img_div.html(img_html);
				
			}
		}
		/*
		 作者：z@qq.com
    	时间：2016-12-10
    	描述：鉴定每个图片大小总和
	 	* */
		var file_size = 0;
		var all_size = 0;
		for(j = 0; j < this.files.length; j++) {
			file_size = this.files[j].size;
			all_size = all_size + this.files[j].size;
			var size = all_size / 1024;
			if(size > 1024) {
				shade.fadeIn(1024);
				text_span.text("上传的图片大小不能超过1024k！");
				this.value = "";
				img_div.html("");
				return false;
			}
		}
		/*
		 作者：z@qq.com
    	时间：2016-12-10
    	描述：鉴定每个图片宽高 以后会做优化 多个图片的宽高 暂时隐藏掉 想看效果可以取消注释就行
	 	* */
		//					var img = new Image();
		//					img.src = objUrl;
		//					img.onload = function() {
		//						if (img.width > 100 && img.height > 100) {
		//							alert("图片宽高不能大于一百");
		//							$("#myFile").val("");
		//							$(".img_div").html("");
		//							return false;
		//						}
		//					}
		$('.isImg img').load(function(){
		   var imgheight = $(this).height();
	        var imgwidth = $(this).width();
	        if(imgheight<imgwidth){
				$(this).css("width","120px");
				var mga = 60-imgheight/2;
				$(this).css("margin-top",mga+"px");
				$(this).css("margin-bottom",mga+"px");
			}else{
				$(this).css("height","120px");
				var mga = 60-imgwidth/2;
				$(this).css("margin-left",mga+"px");
			}  
		});
		return true;
					
	});
	$("#myFile2").change(function() {
		var objUrl;
		var img_html;
		var num = -1;
		var img_div = $(this).parents(".upload").children(".img_div");
		var shade = $(this).parents(".upload").children(".shade");
		var text_span = $(this).parents(".upload").children(".text_span");
		var filepath = $("input[name='myFile2']").val();
		for(var i = 0; i < this.files.length; i++) {
			objUrl = getObjectURL(this.files[i]);
			var extStart = filepath.lastIndexOf(".");
			var ext = filepath.substring(extStart, filepath.length).toUpperCase();
			/*
			 作者：z@qq.com
        	时间：2016-12-10
        	描述：鉴定每个图片上传尾椎限制
	 		* */
			if(ext != ".BMP" && ext != ".PNG" && ext != ".GIF" && ext != ".JPG" && ext != ".JPEG") {
				shade.fadeIn(500);
				text_span.text("图片限于bmp,png,gif,jpeg,jpg格式");
				this.value = "";
				img_div.html("");
				return false;
			} else {
				/*
				 若规则全部通过则在此提交url到后台数据库
				 * */
				img_html = "<div class='isImg'><img src='" + objUrl + "' onclick='javascript:lookBigImg(this)'/><button class='removeBtn' onclick='javascript:removeImg(this)'>x</button><input type='file' value='' ></div>";
				num++;
				var faile = $(".isImg").eq(num).children(" input").value;
				faile = $("input[name='myFile2']").val();
				img_div.html(img_html);
				
			}
		}
		/*
		 作者：z@qq.com
    	时间：2016-12-10
    	描述：鉴定每个图片大小总和
	 	* */
		var file_size = 0;
		var all_size = 0;
		for(j = 0; j < this.files.length; j++) {
			file_size = this.files[j].size;
			all_size = all_size + this.files[j].size;
			var size = all_size / 1024;
			if(size > 1024) {
				shade.fadeIn(1024);
				text_span.text("上传的图片大小不能超过1024k！");
				this.value = "";
				img_div.html("");
				return false;
			}
		}
		/*
		 作者：z@qq.com
    	时间：2016-12-10
    	描述：鉴定每个图片宽高 以后会做优化 多个图片的宽高 暂时隐藏掉 想看效果可以取消注释就行
	 	* */
		//					var img = new Image();
		//					img.src = objUrl;
		//					img.onload = function() {
		//						if (img.width > 100 && img.height > 100) {
		//							alert("图片宽高不能大于一百");
		//							$("#myFile").val("");
		//							$(".img_div").html("");
		//							return false;
		//						}
		//					}
		$('.isImg img').load(function(){
		   var imgheight = $(this).height();
	        var imgwidth = $(this).width();
	        if(imgheight<imgwidth){
				$(this).css("width","120px");
				var mga = 60-imgheight/2;
				$(this).css("margin-top",mga+"px");
				$(this).css("margin-bottom",mga+"px");
			}else{
				$(this).css("height","120px");
				var mga = 60-imgwidth/2;
				$(this).css("margin-left",mga+"px");
			}  
		});
		return true;
					
	});
	$("#myFile3").change(function() {
		var objUrl;
		var img_html;
		var num = -1;
		var img_div = $(this).parents(".upload").children(".img_div");
		var shade = $(this).parents(".upload").children(".shade");
		var text_span = $(this).parents(".upload").children(".text_span");
		var filepath = $("input[name='myFile3']").val();
		for(var i = 0; i < this.files.length; i++) {
			objUrl = getObjectURL(this.files[i]);
			var extStart = filepath.lastIndexOf(".");
			var ext = filepath.substring(extStart, filepath.length).toUpperCase();
			/*
			 作者：z@qq.com
        	时间：2016-12-10
        	描述：鉴定每个图片上传尾椎限制
	 		* */
			if(ext != ".BMP" && ext != ".PNG" && ext != ".GIF" && ext != ".JPG" && ext != ".JPEG") {
				shade.fadeIn(500);
				text_span.text("图片限于bmp,png,gif,jpeg,jpg格式");
				this.value = "";
				img_div.html("");
				return false;
			} else {
				/*
				 若规则全部通过则在此提交url到后台数据库
				 * */
				img_html = "<div class='isImg'><img src='" + objUrl + "' onclick='javascript:lookBigImg(this)'/><button class='removeBtn' onclick='javascript:removeImg(this)'>x</button><input type='file' value='' ></div>";
				num++;
				var faile = $(".isImg").eq(num).children(" input").value;
				faile = $("input[name='myFile3']").val();
				img_div.html(img_html);
				
			}
		}
		/*
		 作者：z@qq.com
    	时间：2016-12-10
    	描述：鉴定每个图片大小总和
	 	* */
		var file_size = 0;
		var all_size = 0;
		for(j = 0; j < this.files.length; j++) {
			file_size = this.files[j].size;
			all_size = all_size + this.files[j].size;
			var size = all_size / 1024;
			if(size > 1024) {
				shade.fadeIn(1024);
				text_span.text("上传的图片大小不能超过1024k！");
				this.value = "";
				img_div.html("");
				return false;
			}
		}
		/*
		 作者：z@qq.com
    	时间：2016-12-10
    	描述：鉴定每个图片宽高 以后会做优化 多个图片的宽高 暂时隐藏掉 想看效果可以取消注释就行
	 	* */
		//					var img = new Image();
		//					img.src = objUrl;
		//					img.onload = function() {
		//						if (img.width > 100 && img.height > 100) {
		//							alert("图片宽高不能大于一百");
		//							$("#myFile").val("");
		//							$(".img_div").html("");
		//							return false;
		//						}
		//					}
		$('.isImg img').load(function(){
		   var imgheight = $(this).height();
	        var imgwidth = $(this).width();
	        if(imgheight<imgwidth){
				$(this).css("width","120px");
				var mga = 60-imgheight/2;
				$(this).css("margin-top",mga+"px");
				$(this).css("margin-bottom",mga+"px");
			}else{
				$(this).css("height","120px");
				var mga = 60-imgwidth/2;
				$(this).css("margin-left",mga+"px");
			}  
		});
		return true;
					
	});
	$("#myFile4").change(function() {
		var objUrl;
		var img_html;
		var num = -1;
		var img_div = $(this).parents(".upload").children(".img_div");
		var shade = $(this).parents(".upload").children(".shade");
		var text_span = $(this).parents(".upload").children(".text_span");
		var filepath = $("input[name='myFile4']").val();
		for(var i = 0; i < this.files.length; i++) {
			objUrl = getObjectURL(this.files[i]);
			var extStart = filepath.lastIndexOf(".");
			var ext = filepath.substring(extStart, filepath.length).toUpperCase();
			/*
			 作者：z@qq.com
        	时间：2016-12-10
        	描述：鉴定每个图片上传尾椎限制
	 		* */
			if(ext != ".BMP" && ext != ".PNG" && ext != ".GIF" && ext != ".JPG" && ext != ".JPEG") {
				shade.fadeIn(500);
				text_span.text("图片限于bmp,png,gif,jpeg,jpg格式");
				this.value = "";
				img_div.html("");
				return false;
			} else {
				/*
				 若规则全部通过则在此提交url到后台数据库
				 * */
				img_html = "<div class='isImg'><img src='" + objUrl + "' onclick='javascript:lookBigImg(this)'/><button class='removeBtn' onclick='javascript:removeImg(this)'>x</button><input type='file' value='' ></div>";
				num++;
				var faile = $(".isImg").eq(num).children(" input").value;
				faile = $("input[name='myFile4']").val();
				img_div.html(img_html);
				
			}
		}
		/*
		 作者：z@qq.com
    	时间：2016-12-10
    	描述：鉴定每个图片大小总和
	 	* */
		var file_size = 0;
		var all_size = 0;
		for(j = 0; j < this.files.length; j++) {
			file_size = this.files[j].size;
			all_size = all_size + this.files[j].size;
			var size = all_size / 1024;
			if(size > 1024) {
				shade.fadeIn(1024);
				text_span.text("上传的图片大小不能超过1024k！");
				this.value = "";
				img_div.html("");
				return false;
			}
		}
		/*
		 作者：z@qq.com
    	时间：2016-12-10
    	描述：鉴定每个图片宽高 以后会做优化 多个图片的宽高 暂时隐藏掉 想看效果可以取消注释就行
	 	* */
		//					var img = new Image();
		//					img.src = objUrl;
		//					img.onload = function() {
		//						if (img.width > 100 && img.height > 100) {
		//							alert("图片宽高不能大于一百");
		//							$("#myFile").val("");
		//							$(".img_div").html("");
		//							return false;
		//						}
		//					}
		$('.isImg img').load(function(){
		   var imgheight = $(this).height();
	        var imgwidth = $(this).width();
	        if(imgheight<imgwidth){
				$(this).css("width","120px");
				var mga = 60-imgheight/2;
				$(this).css("margin-top",mga+"px");
				$(this).css("margin-bottom",mga+"px");
			}else{
				$(this).css("height","120px");
				var mga = 60-imgwidth/2;
				$(this).css("margin-left",mga+"px");
			}  
		});
		return true;
					
	});
	
	/*
				 作者：z@qq.com
	        	时间：2016-12-10
	        	描述：鉴定每个浏览器上传图片url 目前没有合并到Ie
				 * */
				function getObjectURL(file) {
					var url = null;
					if(window.createObjectURL != undefined) { // basic
						url = window.createObjectURL(file);
					} else if(window.URL != undefined) { // mozilla(firefox)
						url = window.URL.createObjectURL(file);
					} else if(window.webkitURL != undefined) { // webkit or chrome
						url = window.webkitURL.createObjectURL(file);
					}
					//console.log(url);
					return url;
				}
			});
			/*
			 作者：z@qq.com
	       	 时间：2016-12-10
	      	  描述：上传图片附带删除 再次地方可以加上一个ajax进行提交到后台进行删除
			 * */
			function removeImg(r){
				$(r).parent().remove();
			}
			/*
			 作者：z@qq.com
	       	 时间：2016-12-10
	      	  描述：上传图片附带放大查看处理
			 * */
			function lookBigImg(b){
				$(".shadeImg").fadeIn(500);
				$(".showImg").attr("src",$(b).attr("src"))
				$('.showImg').each(function(){ //jquery.each()循环读取所有图片
			        var imgheight = $(this).height();
			        var imgwidth = $(this).width();
			        if(imgheight<imgwidth){
						$(this).css("width","600px").css("height","auto");
						var hei = $(this).height()
						var mga = 200-hei/2;
						
						$(this).css("margin-top",mga+"px");
						$(this).css("margin-bottom",mga+"px");
					}else{
						$(this).css("height","400px");
						var mga = 300-imgwidth/2;
						$(this).css("margin-left",mga+"px");
					}
			    });
			}
			/*
			 作者：z@qq.com
	       	 时间：2016-12-10
	      	  描述：关闭弹出层
			 * */
			function closeShade(){
				$(".shade").fadeOut(500);
			}
			/*
			 作者：z@qq.com
	       	 时间：2016-12-10
	      	  描述：关闭弹出层
			 * */
			function closeShadeImg(){
				$(".shadeImg").fadeOut(500);
			}
$(function(){

	$("#sjld").sjld("#shenfen","#chengshi","#quyu");
	$("#sjld").sjld("#shenfens","#chengshis","#quyus");
});
$(".remove_id").click(function(){
	$(this).parent("td").parent("tr").remove();
})
$(".auth_item input").blur(function(){
	var tr = $.trim($(this).val())
	if(tr == ""){
		$(this).parent("p").children("strong").addClass("active");
		$(this).parent("p").children("strong").html("该选项不能为空！");
	}
})