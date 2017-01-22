$(function(){
	$("#inputSearch").focus(function(){
		$(this).addClass("focus");
		if($(this).val()==this.defaultValue){
			$(this).val("");
		}
	}).blur(function(){
		$(this).removeClass("focus");
		if($(this).val()==""){
			$(this).val(this.defaultValue);
		}
	}).keyup(function(e){
		if(e.which == 13){
			alert("回车提交表单！");
		}
	})
})
$(function(){
	$("#nav li").hover(function(){
		$(this).find(".Xiao5Nav").show();
	},function(){
		$(this).find(".Xiao5Nav").hide();
	});
})
$(function(){
	$(".jnCatainfo .promoted").append('<s class = "hot"></s>');
})
$(function(){
	$(".fore .promoted").append('<s class = "hot"></s>');
})
/*大屏广告效果*/

$(function(){
	var $imgrolls = $("#Xiao5Imageroll div a");
	//$imgrolls.css("opacity","0.7");
	var len = $imgrolls.length;
	var index = 0;
	var adTimer = null;
	$imgrolls.mouseover(function(){
		index = $imgrolls.index(this);
		showImg(index);
	}).eq(0).mouseover();
	$("#Xiao5Imageroll").hover(function(){
		if(adTimer){
			clearInterval(adTimer);
		}
	},function(){
		adTimer = setInterval(function(){
			showImg(index);
			index++;
			if(index == len){index = 0;}
		},5000);
	}).trigger("mouseleave");
	
})

//显示不同的幻灯片
function showImg(index){
	var $rollobj = $("#Xiao5Imageroll");
	var $rolllist = $rollobj.find("div a");
	var newhref = $rolllist.eq(index).attr("href");
	$("#Xiao5_imgWrap").attr("href",newhref)
	                .find("img").eq(index).stop(true,true).fadeIn().siblings().fadeOut();
	$rolllist.removeClass("chos").css("opacity","0.7")
             .eq(index).addClass("chos").css("opacity","1");	
}
/*超链接提示文字*/
$(function(){
    var x = 10;  
	var y = 20;
	$("a.tooltip").mouseover(function(e){
       	this.myTitle = this.title;
		this.title = "";	
	    var tooltip = "<div id='tooltip'>"+ this.myTitle +"</div>"; //创建 div 元素
		$("body").append(tooltip);	//把它追加到文档中
		$("#tooltip")
			.css({
				"top": (e.pageY+y) + "px",
				"left": (e.pageX+x)  + "px"
			}).show("fast");	  //设置x坐标和y坐标，并且显示
    }).mouseout(function(){		
		this.title = this.myTitle;
		$("#tooltip").remove();   //移除 
    }).mousemove(function(e){
		$("#tooltip")
			.css({
				"top": (e.pageY+y) + "px",
				"left": (e.pageX+x)  + "px"
			});
	});
})

/*品牌活动模块横向滑动*/
$(function(){
	$("#jnBrandTab li a").click(function(){
		$(this).parent().addClass("chos").siblings().removeClass("chos");
		var idx = $("#jnBrandTab li a").index(this);
		showBrandList(idx);
		return false;
	}).eq(0).click();
});
function showBrandList(index){
	var $rollobj = $("#jnBrandList");
	var rollWidth = $rollobj.find("li").outerWidth();
	rollWidth = rollWidth * 4;
	$rollobj.stop(true,false).animate({left:-rollWidth*index},1000);
}
/*品牌活动模块横向滑动*/


 


