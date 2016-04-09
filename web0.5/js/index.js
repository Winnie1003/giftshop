/*头部广告特效*/
	$("#Top img.close").click(function(){
		$("#Top").slideUp();//慢慢向上收缩
	});
/*导航特效*/
    $("#Nav ul li.Fnav").hover(function(){
		var _left=$(this).position().left;
		var _width=$(this).width;
		$("#Nav ul li.last").css("width",_width).show().stop().animate({left:_left},200);
	},function(){
		//鼠标移开
		$("#Nav ul li.last").hide();

	});


//吸顶盒导航$(window)获取当前窗口
/*浏览器窗口的滚动事件scroll*/
$(window).scroll(function(){
	var _top=$(window).scrollTop();//获取浏览器滚动的高度

	var _height=$("#TopMain").height();
	if(_top >= _height){
		$("#Nav").addClass("gd");
       $(".Menu").hide();
		

	}else{
		$("#Nav").removeClass("gd");
		$(".Menu").show();
		
	}
});


/*显示二级菜单*/
$("#Nav ul li.first ol li").hover(function(){
	$(this).addClass("hover");
	//当前 li与Menu上面的距离
	var _top=$(this).position().top; //获取li与他相对定位元素上面的距离 top值
	var _height=$(this).find(".moreMenu").height()/3;


	if(_top>_height){
		if($(this).index()==5){
			$(this).find(".moreMenu").css("top",-(_height*3-68));
		}else{

			$(this).find(".moreMenu").css("top",-_height); //重新给.moreNav赋值
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


autoPlay();//一开始就要自动轮播
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
	$(".Btn span").eq(_index).addClass("hover").siblings("span").removeClass("hover");
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

/*节日提醒滚动效果*/
var y=0;
var _top=0;
var _t=0;
var newTop=0;
$(".scrollBtn").mousedown(function(e){
	y=e.clientY;  //鼠标按下的那个点与浏览器窗口上面的距离
	_top=$(".scrollBtn").offset().top;//滑块与浏览器窗口上面的距离
	_t=y-_top; //鼠标按下去的那个点与滚动条上面的距离
	var _height=$(".scrollBar").height()-$(".scrollBtn").height();
	$(document).mousemove(function(e){
		newTop=e.clientY-$(".scrollBar").offset().top-_t;//获取滑块与滚动条上面的距离

		if(newTop<0){ newTop=0;}
		if(newTop>_height){ newTop=_height;}

		$(".scrollBtn").css("top",newTop);
		//获取文字移动的比例
		var pl=newTop/_height;
		var _scrollHeight=pl*($(".Datatx ul").height()-120);
		$(".Datatx ul").css("top",-_scrollHeight);

	});
	$(document).mouseup(function(){
		$(document).unbind("mousemove");
		$(document).unbind("mouseup");
	});
	return false;//阻止默认的冒泡事件
});

/*倒计时*/
//第一个倒计时
var endTime1=new Date();
//设置结束时间
endTime1.setFullYear(2015);
endTime1.setMonth(11);
endTime1.setDate(20);
endTime1.setHours(20);
endTime1.setMinutes(00);
endTime1.setSeconds(00);
var endTimes1=endTime1.getTime();
var obj1=$("#NewProduct dt.time1 font");
setInterval(function(){
	changeTime(endTimes1,obj1)
},1000);
changeTime(endTimes1,obj1);

//第二个倒计时
var endTime2=new Date();
endTime2.setFullYear(2015);
endTime2.setMonth(11);
endTime2.setDate(16);
endTime2.setHours(20);
endTime2.setMinutes(00);
endTime2.setSeconds(00);
var endTimes2=endTime2.getTime();
var obj2=$("#NewProduct dt.time2 font");
setInterval(function(){
	changeTime(endTimes2,obj2)
},1000);
changeTime(endTimes2,obj2);

//第三个倒计时
var endTime3=new Date();
endTime3.setFullYear(2015);
endTime3.setMonth(11);
endTime3.setDate(19);
endTime3.setHours(20);
endTime3.setMinutes(00);
endTime3.setSeconds(00);
var endTimes3=endTime3.getTime();
var obj3=$("#NewProduct dt.time3 font");
setInterval(function(){
	changeTime(endTimes3,obj3)
},1000);
changeTime(endTimes3,obj3);

//第四个倒计时
var endTime4=new Date();
endTime4.setFullYear(2015);
endTime4.setMonth(11);
endTime4.setDate(15);
endTime4.setHours(20);
endTime4.setMinutes(00);
endTime4.setSeconds(00);
var endTimes4=endTime4.getTime();
var obj4=$("#NewProduct dt.time4 font");
setInterval(function(){
	changeTime(endTimes4,obj4)
},1000);
changeTime(endTimes4,obj4);

//第五个倒计时
var endTime5=new Date();
endTime5.setFullYear(2015);
endTime5.setMonth(11);
endTime5.setDate(20);
endTime5.setHours(20);
endTime5.setMinutes(00);
endTime5.setSeconds(00);
var endTimes5=endTime5.getTime();
var obj5=$("#NewProduct dt.time5 font");
setInterval(function(){
	changeTime(endTimes5,obj5)
},1000);
changeTime(endTimes5,obj5);

//第六个倒计时
var endTime6=new Date();
endTime6.setFullYear(2015);
endTime6.setMonth(11);
endTime6.setDate(20);
endTime6.setHours(20);
endTime6.setMinutes(00);
endTime6.setSeconds(00);
var endTimes6=endTime6.getTime();
var obj6=$("#NewProduct dt.time6 font");
setInterval(function(){
	changeTime(endTimes6,obj6)
},1000);
changeTime(endTimes6,obj6);


//第七个倒计时
var endTime7=new Date();
endTime7.setFullYear(2015);
endTime7.setMonth(11);
endTime7.setDate(20);
endTime7.setHours(20);
endTime7.setMinutes(00);
endTime7.setSeconds(00);
var endTimes7=endTime7.getTime();
var obj7=$("#NewProduct dt.time7 font");
setInterval(function(){
	changeTime(endTimes7,obj7)
},1000);
changeTime(endTimes7,obj7);

//第八个倒计时
var endTime8=new Date();
endTime8.setFullYear(2016);
endTime8.setMonth(11);
endTime8.setDate(20);
endTime8.setHours(20);
endTime8.setMinutes(00);
endTime8.setSeconds(00);
var endTimes8=endTime8.getTime();
var obj8=$("#NewProduct dt.time8 font");
setInterval(function(){
	changeTime(endTimes8,obj8)
},1000);
changeTime(endTimes8,obj8);




function changeTime(endTimes,obj){
	var nowTime=new Date();
	var s=(endTimes-nowTime.getTime())/1000;
	if(s>0){
		var day=Math.floor(s/86400);
		s=s%86400;
		var hours=Math.floor(s/3600);
		s=s%3600;
		var minutes=Math.floor(s/60);
		s=Math.floor(s%60);

		$(obj).eq(0).html(fullZero(day,2));
		$(obj).eq(1).html(fullZero(hours,2));
		$(obj).eq(2).html(fullZero(minutes,2));
		$(obj).eq(3).html(fullZero(s,2));
	}
}
//创建补0方法
function fullZero(itime,n){
	var str=""+itime;
	while(str.length<n){
		str="0"+str;
	}
	return str;

}


/*今日新品图片样式*/
$("#NewProduct .imgList dl").hover(function(){
	$(this).addClass("hover");
},function(){
	$(this).removeClass("hover");
});

/*今日新品:换一批*/
var mark=0;
var clearProductTime=null;
$("#NewProduct .title span.change").click(function(){
	product_antoPlay();
});

function product_antoPlay(){
	if(mark==0){
		mark=1;
	}else{
		mark=0;
	}
	$("#NewProduct .Product .imgList").eq(mark).fadeIn().siblings(".imgList").fadeOut();
}

$("#NewProduct .title span.change").hover(function(){
	clearInterval(clearProductTime);
},function(){
	clearProductTime=setInterval(product_antoPlay,2000);
});

clearProductTime=setInterval(product_antoPlay,2000);



/*Flower选项卡动画特效*/
$("#Flower ul.flower_nav li").mousemove(function(){
	$(this).addClass("hover").siblings("li").removeClass("hover");
	var _index=$(this).index();
	$("#Flower .flowerRight .flowerComm").eq(_index).show().siblings().hide();
});


/*flower flowerComm p事件*/
$("#Flower .flowerComm li").hover(function(){
	$(this).find("p").slideDown();
},function(){
	$(this).find("p").slideUp();
});


/*flower 手风琴效果*/
$("#Flower .accordion li").mousemove(function(){
	$(this).addClass("box").siblings().removeClass("box");
	$(this).find("h3").addClass("hover").parent().siblings("li").find("h3").removeClass("hover");
});


/*Cake part*/
//放大镜效果
$(".cake_left ul li").click(function(){
    $(".cake_left .gray").show();
    $(".cake_left .showCake").show();
	var img_cake=$(this).find("img").attr("src");
	$(".cake_left .showCake img.cake_img").attr("src",img_cake);
	//获取标题
	var title=$(this).find("h3.ti").text();
    $(".cake_left .showCake .productInfo h3").text(title);
	//获取简介
	var info=$(this).find("p.info").text();
    $(".cake_left .showCake .productInfo .profileCon").text(info);
	//获取产品详细地址
	var buyUrl=$(this).find("a.buyUrl").attr("href");
	$(".cake_left .showCake .productInfo a img.buy").attr("href",buyUrl);
	//款式的选择
	var _type=$(this).find("p.type").text();
	var html="";
	$(".cake_choice .caketype").html("");

	if(_type!=""){
	var _typeArr=_type.split(",");
	
	for(var i=0;i<_typeArr.length;i++){
	     html=html+"<dl>"
		 +"<dt><img src='images/cake10.jpg' width='24' height='24'/></dt>"
		 +"<dd>"+_typeArr[i]+"</dd>"
		 +"</dl>"
	}
	$(".cake_choice .caketype").prepend(html);
    }
   
	//点击款式类型，被选中
	var pk=0;
	$(".cake_choice dl").click(function(){
	   if(pk==0){
	      $(this).addClass("selected");
		  pk=1;
	   }else{
	      $(this).removeClass("selected");
		  pk=1;
	  }
	})
})
    //点击灰色图层时关闭
	 $(".cake_left .gray").click(function(){
	 $(".cake_left .gray").hide();
	 $(".cake_left .showCake").hide();
	});






//轮播特效重用
var GiftObj1=$("#Floor_one .commFlash ul.img_btn li");
var GiftObj1_scroll=$("#Floor_one .commFlash ul.flashImg");
var GiftObj1_next=$("#Floor_one .next");
var GiftObj1_prev=$("#Floor_one .prev");

var GiftObj2=$("#Floor_two .commFlash ul.img_btn li");
var GiftObj2_scroll=$("#Floor_two .commFlash ul.flashImg");
var GiftObj2_next=$("#Floor_two .next");
var GiftObj2_prev=$("#Floor_two .prev");


var GiftObj3=$("#Floor_three .commFlash ul.img_btn li");
var GiftObj3_scroll=$("#Floor_three .commFlash ul.flashImg");
var GiftObj3_next=$("#Floor_three .next");
var GiftObj3_prev=$("#Floor_three .prev");

var GiftObj4=$("#Floor_four .commFlash ul.img_btn li");
var GiftObj4_scroll=$("#Floor_four .commFlash ul.flashImg");
var GiftObj4_next=$("#Floor_four .next");
var GiftObj4_prev=$("#Floor_four .prev");




function commFlash(obj,objScroll,GiftObjNext,GiftObjPrev){
      var Flash_index=0;
      var timeInterval=null;
      /*轮播按钮*/
	  obj.hover(function(){
	     Flash_index=$(this).index();
		 scroll();
		 clearInterval(timeInterval);
	  },function(){
	     AutoFlash();
	  })
/*左切换按钮*/
	GiftObjNext.click(function(){
		Flash_index++;
		if(Flash_index>obj.length-1){
			Flash_index=0;
		}
		Scroll();
	});
	
	/*右切换按钮*/
	GiftObjPrev.click(function(){
		Flash_index--;
		if(Flash_index<0){
			Flash_index=obj.length-1;
		}
		Scroll();
	});
	
	/*当鼠标放到左右切换按钮时启停定时器*/
	GiftObjNext.hover(function(){
		clearInterval(timeInterval);
	},function(){
		AutoFlash();
	});
	GiftObjPrev.hover(function(){
		clearInterval(timeInterval);
	},function(){
		AutoFlash();
	});
	
	function AutoFlash(){
		timeInterval=setInterval(function(){
			Flash_index++;
			if(Flash_index>obj.length-1){
				Flash_index=0;
			}
			Scroll();
		},2000);
	}

	AutoFlash();

	function Scroll(){
		obj.eq(Flash_index).addClass("hover").siblings("li").removeClass("hover");
		objScroll.animate({left:Flash_index*-429},300);
	}
}
commFlash(GiftObj1,GiftObj1_scroll,GiftObj1_next,GiftObj1_prev);
commFlash(GiftObj2,GiftObj2_scroll,GiftObj2_next,GiftObj2_prev);
commFlash(GiftObj3,GiftObj3_scroll,GiftObj3_next,GiftObj3_prev);
commFlash(GiftObj4,GiftObj4_scroll,GiftObj4_next,GiftObj4_prev);




/*stair 特效*/
$("#StairNav li").not(".Top").hover(function(){
    $(this).addClass("hover");
},function(){
    $(this).removeClass("hover");
});

   var mark=1;//标记
$("#StairNav ul li").not(".Top").click(function(){
	mark=2;
   $("#StairNav ul li").find("span").removeClass("active");
   $(this).find("span").addClass("active");
   var _index=$(this).index();//获取楼梯式导航栏的index
   var _top=$("#Main div.LT").eq(_index).offset().top;//获取当前div与浏览器窗口的距离
   $("body,html").animate({scrollTop:_top-50},5000,function(){
		mark=1
	});//500毫秒内跳转到对应的div
});
$(window).scroll(function(){
	
	if(mark==1){
		var _STop=$(this).scrollTop();//获取浏览器滚动的高度
		var _TOP=$("#Main div.LT").eq(0).offset().top-100;
		if(_STop>_TOP){
			$("#StairNav").fadeIn();
		}else{
			$("#StairNav").fadeOut();
		}
		
		var obj=$("#Main div.LT");
		obj.each(function() {
			var _index=$(this).index();
			var _Height=obj.eq(_index).offset().top+$(this).height()/2;
			if(_STop<_Height){
				$("#StairNav ul li").find("span").removeClass("active");
				$("#StairNav ul li").eq(_index).find("span").addClass("active");
				return false;
			}
		});
	}
});

$("#StairNav li.Top").click(function(){
	$("body,html").animate({scrollTop:0},500);
	mark=1;
})