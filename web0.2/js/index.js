/*头部广告特效*/
	$("#Top img.close").click(function(){
		$("#Top").slideUp();//慢慢向上收缩
	});

/*导航滑动效果*/
$("#Logo ul li").not(".first,.last").hover(function(){
	//鼠标滑上去
	var _left=$(this).position().left;//获取 li与他相对定位元素 ul左边的距离
	var _width=$(this).width(); //获取到 li的宽度
	//document.title=_left +"--"+_width;
	$("#Logo ul li.last").css("width",_width).show().stop().animate({left:_left},200);
		
},function(){
	//鼠标移开
  $("#Logo ul li.last").hide();
});

//吸顶盒导航  
/*浏览器窗品的滚动事件 scroll*/
$(window).scroll(function(){
	var _top=$(window).scrollTop();//获取浏览器窗口滚动高度
	var _height=$("#TopMain").height();
	//document.title=_height;
	if(_top>=_height){
		$("#Logo").addClass("gd"); //加上样式 class="gd"
	}else{
		$("#Logo").removeClass("gd"); //移除样式class="gd"
	}

});