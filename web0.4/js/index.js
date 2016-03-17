/*头部广告特效*/
	$("#Top img.close").click(function(){
		$("#Top").slideUp();//慢慢向上收缩
	});

/*导航滑动效果 删除.not(".first,.last")*/
$("#Logo ul li.nav").hover(function(){
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
		$(".Menu").hide();
	}else{
		$("#Logo").removeClass("gd"); //移除样式class="gd"
		$(".Menu").show();
	}

});

//显示二级菜单内容
$("#Logo ul li.first ol li").hover(function(){
	$(this).addClass("hover");
	//当前 li与Menu上面的距离
	var _top=$(this).position().top; //获取li与他相对定位元素上面的距离 top值
	var _height=$(this).find(".moreNav").height()/3;
	if(_top>_height){
		if($(this).index()==5){
			$(this).find(".moreNav").css("top",-(_height*3-68));
		}else{

		$(this).find(".moreNav").css("top",-_height); //重新给.moreNav赋值
		}
	}
},function(){
	$(this).removeClass("hover");
});



/*首页轮播图特效*/
var _index=0;
var _qindex=0;
var clearTime=null;


$(".But span").mouseover(function(){
	clearInterval(clearTime);
	_index=$(this).index();//获取序列号
	scrollPlay();//调用播放方法
	_qindex=_index;//把当前的值赋作为下一次的前一个序列号
	
}).mouseout(function(){
	autoPlay();
});

//右切换按扭
$(".flash a.next").click(function(){
	_index++;//序列号加1 
	if(_index>5){
		_index=0;
		_qindex=5;
	}
	scrollPlay();
	_qindex=_index;

});

$(".flash a.prev").click(function(){
	_index--;
	if(_index<0){
		_qindex=0;
		_index=5;
	}
		scrollPlay();
	_qindex=_index;
});


autoPlay();
//自动轮播
function autoPlay(){
	clearTime=setInterval(function(){
		_index++;//序列号加1 

		if(_index>5){
			_index=0;
			_qindex=5;
		}
		scrollPlay();
		_qindex=_index;

	},2000);
	

}


function scrollPlay(){
	$(".But span").eq(_index).addClass("hover").siblings("span").removeClass("hover");
	if(_index==0 && _qindex==5){
		next();
	}else if(_index==5 && _qindex==0){
		prev();
	}else if(_index>_qindex){//左移
		next();
	}else if(_index<_qindex){//往右移
		prev();
	}

}

//下一张，左移
function next(){
		$(".scroll img").eq(_qindex).animate({"left":"-820px"},300);
		$(".scroll img").eq(_index).css("left","820px").animate({"left":"0px"},300);

};

//上一张 ，右移
function prev(){
		$(".scroll img").eq(_qindex).animate({"left":"820px"},300);
		$(".scroll img").eq(_index).css("left","-820px").animate({"left":"0px"},300);
}
//按扭显示隐藏
$(".flash").hover(function(){
	//显示
	$("a.prev,a.next").show();
},function(){
	//隐藏
	$("a.prev,a.next").hide();
});