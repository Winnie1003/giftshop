
   
   /*头部广告样式特效*/
   $("#Top img.close").click(function(){
     $("#Top").slideUp();
   });
 
   /*导航滑动效果   删除first last*/
   $("#Logo ul li.nav").hover(function(){
            var _left=$(this).position().left;
			var _width=$(this).width();

			
			
            $("#Logo ul li.last").show().css("width",_width).stop().animate({left:_left},200);
   },function(){  $("#Logo ul li.last").hide();
      //鼠标移开
   });

   
   
   
   //吸顶盒导航
   /*浏览器窗体滚动事件 scroll
   $(window).scroll(function(){
       var _top=$(window).scrollTop();//获取浏览器滚动高度
	   var _height=$("#TopMain").height();//获取盒子高度
	   if(_top>=_height){
	   
	      $("#Logo").addClass("gd");
		  $("#Logo ul li .Menu").css("display","none");
	   }
	   else{
	      $("#Logo").removeClass("gd");
		  $("#Logo ul li .Menu").css("display","block");
	   }
  })
  */

 
  
  
  //左侧二级菜单内容
  $("#part1 .partCon .Menu ol li").hover(function(){
        $(this).addClass("hover");
        var _top=$(this).position().top;
		var _height=$(this).find(".moreNav").height()/3;
		if(_top>_height){
		    if($(this).index()==5){
			    
				$(this).find(".moreNav").css("top",-(_height*3-70));
			}
			else{
			$(this).find(".moreNav").css("top",-_height);
	        
			}	
		}
  },function(){
        $(this).removeClass("hover");
  });
   
      
  //限时抢购倒计时特效
  var endTime1=new Date();//结束时间
 //设置第一个礼品的结束时间
  endTime1.setFullYear(2017); //年
  endTime1.setMonth(12);//月
  endTime1.setDate(6);//天
  endTime1.setHours(12);//小时
  endTime1.setMinutes(10);//分钟
  endTime1.setSeconds(20);//秒
  
  var obj5=$("p.time1 font");
  var endTimes1=endTime1.getTime();
  changeTime(endTimes1,obj5);
  
  //设置定时器
  setInterval(function(){
  
        changeTime(endTimes1,obj5);
  
  
  },1000);




  var endTime2=new Date();//结束时间
  //设置第二个礼品结束时间
  endTime2.setFullYear(2017); //年
  endTime2.setMonth(7);//月
  endTime2.setDate(5);//天
  endTime2.setHours(11);//小时
  endTime2.setMinutes(8);//分钟
  endTime2.setSeconds(6);//秒
  
  var obj6=$("p.time2 font");
  var endTimes2=endTime2.getTime();
  changeTime(endTimes2,obj6);

  //设置定时器
  setInterval(function(){
  
        changeTime(endTimes2,obj6);
  
  
  },1000);





  var endTime3=new Date();//结束时间
  //设置第三个礼品结束时间
  endTime3.setFullYear(2017); //年
  endTime3.setMonth(12);//月
  endTime3.setDate(4);//天
  endTime3.setHours(2);//小时
  endTime3.setMinutes(50);//分钟
  endTime3.setSeconds(14);//秒
  
  var obj7=$("p.time3 font");
  var endTimes3=endTime3.getTime();
  changeTime(endTimes3,obj7);

  //设置定时器
  setInterval(function(){
  
        changeTime(endTimes3,obj7);
  
  
  },1000);





  var endTime4=new Date();//结束时间
  //设置第四个礼品结束时间
  endTime4.setFullYear(2017); //年
  endTime4.setMonth(3);//月
  endTime4.setDate(2);//天
  endTime4.setHours(1);//小时
  endTime4.setMinutes(3);//分钟
  endTime4.setSeconds(4);//秒
  
  var obj8=$("p.time4 font");
  var endTimes4=endTime4.getTime();
  changeTime(endTimes4,obj8);

  //设置定时器
  setInterval(function(){
  
        changeTime(endTimes4,obj8);
  
  
  },1000);




//封装倒计时特效
function changeTime(endTimes,obj){
  //剩余时间=结束时间-现在的时间
  var nowTime=new Date();//现在时间
  
  if(endTimes>nowTime.getTime()){
  //结束时间毫秒数-现在时间的毫秒数=相差时间毫秒数
  var s=(endTimes-nowTime.getTime())/1000;//相差时间毫秒数
  
  //把毫秒数化成 天 小时 分钟 秒
  var day=Math.floor(s/86400);//天数
      s=s%86400;//剩下的秒数
  var hours=Math.floor(s/3600);//小时
      s=s%3600;//剩下的秒数
  var minutes=Math.floor(s/60);//分钟
      s=Math.floor(s%60);//秒
  obj.eq(0).html(fullZero(day,2));
  obj.eq(1).html(fullZero(hours,2));
  obj.eq(2).html(fullZero(minutes,2));
  obj.eq(3).html(fullZero(s,2));
 }
 else{
   alert("时间小了");
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

 /*天天低价js特效*/
 var object1=".day_LowPricesL .lowPricesL_ti ul li";
 var object2=".day_LowPricesR .lowPricesL_ti ul li";

 var object11=".day_LowPricesL .lowPricesL_con ul";
 var object22=".day_LowPricesR .lowPricesL_con ul";

 function lowPrice(objectF,objectS){ 
	$(objectF).mouseover(function(){
		var _index=$(this).index();
		$(this).addClass("active").siblings("li").removeClass("active");
		$(objectS).eq(_index).show().siblings("ul").hide();
    });
 } 

 lowPrice(object1,object11);
 lowPrice(object2,object22);
 
  var endTime5=new Date();//结束时间
  //设置热门活动倒计时
  endTime5.setFullYear(2017); //年
  endTime5.setMonth(12);//月
  endTime5.setDate(4);//天
  endTime5.setHours(2);//小时
  endTime5.setMinutes(50);//分钟
  endTime5.setSeconds(14);//秒
  
  var obj9=$("p.time5 font");
  var endTimes5=endTime5.getTime();
  changeTime(endTimes5,obj9);

  //设置定时器
  setInterval(function(){
  
        changeTime(endTimes5,obj9);
  
  
  },1000);

  var endTime6=new Date();//结束时间
  //设置频道精选倒计时
  endTime6.setFullYear(2017); //年
  endTime6.setMonth(12);//月
  endTime6.setDate(3);//天
  endTime6.setHours(1);//小时
  endTime6.setMinutes(50);//分钟
  endTime6.setSeconds(14);//秒
  
  var obj10=$("p.time6 font");
  var endTimes6=endTime6.getTime();
  changeTime(endTimes6,obj10);

  //设置定时器
  setInterval(function(){
  
        changeTime(endTimes6,obj10);
  
  
  },1000);


 
 //个性定制动画效果
 //左按钮
  $("#Personal .partL .prev").click(function(){
    $(".partL ul").animate({"left":-320},500,function(){
	        $(this).append($(this).find("li:first"));
	        $(this).css("left",0);
	});
   
 });

 //右按钮
 $("#Personal .partL .next").click(function(){
       auto();
	        
 });
 
 //定时器
 var cleartime=setInterval(auto,3000);
 
 //轮播
 $("#Personal .partL .prev,#Personal .partL .next").hover(function(){
    clearInterval(cleartime);
    /*alert("ddd");*/
 },function(){
    cleartime=setInterval(auto,3000); 
 })
 
  //封装
	function auto(){
   
	    $(".partL ul").css("left",-280);
		$(".partL ul").prepend($(".partL ul").find("li:last"));
		$(".partL ul").animate({"left":0});
 };
  

  $(".partM ul li").mouseover(function(){
        var _index=$(this).index();
		$(this).addClass("active").siblings("li").removeClass("active");
        $(".partR ul").eq(_index).show().siblings("ul").hide();
  });
  
   
 
 
 
 
 
 
 
 
 //选项卡动画特效
 $("ul.xianhuaNav li").not(".xianhua ul li.xh_nav").mouseover(function(){
        $(this).addClass("hover").siblings("li").removeClass("hover");
        var _index=$(this).index();
        $(".xianhua .xianhuaCon .xianhuaRight .xianhuaComm").eq(_index).show().siblings(".xianhuaComm").hide();
 });


 //鲜花显示动画效果
$(".xianhuaComm ul li").hover(function(){
        $(this).find("p").stop(true,true).slideDown();
   
},function(){
        $(this).find("p").stop(true,true).slideUp();
})

 
 //手风琴动画效果
 $(".xianhuaType ul li").mouseover(function(){
        $(this).stop().animate({"width":"434px"},300).siblings("li").stop().animate({"width":"50px"},300);
        $(this).find("h3").addClass("hover").parent().siblings("li").find("h3").removeClass("hover");
 });

 
 //生日蛋糕动画效果
 $(".dgConL ul li").click(function(){
        $(".dgConL .gray").show();
        $(".dgConL .showImg").show();
        //获取图片地址
		var bigSrc=$(this).find("img").attr("src");
		$(".dgConL .showImg img.bigImg").attr("src",bigSrc);
        //获取标题
		var title=$(this).find("h3.ti").text();
		$(".dgConL .showImg .moreInfo h3").text(title);
		//获取简介
        var Info=$(this).find("p.info").text();
		$(".dgConL .showImg .moreInfo .xq").text(Info);
		//获取产品详细地址
		var buyUrl=$(this).find("a.buyUrl").attr("href");
		$(".dgConL .showImg .moreInfo p.but a.buy").attr("href",buyUrl);
        //款式式的选择
	var _type=$(this).find("p.type").text();
	var html="";
	$(".dg_col .dgtype").html("");
	if(_type!=""){
		var _typeArr=_type.split(",");
			
		for(var i=0;i<_typeArr.length;i++){
			
			html=html+"<dl>"
						+"<dt><img src='images/dgdg1.jpg' width='24' height='24'/></dt>"
						+"<dd>"+_typeArr[i]+"</dd>"
						+"</dl>"
		}
		
		$(".dg_col .dgtype").prepend(html);
	}

	
		
	//点击款式类型，被选中
	var pk=0;
	$(".dg_col dl").click(function(){
		if(pk==0){
			$(this).addClass("selected");
			pk=1;
		}else{
			$(this).removeClass("selected");
			pk=0;
		}

	});






});

 //点击灰色图层关闭
 $(".dgConL .gray").click(function(){
    $(".dgConL .gray").hide();
    $(".dgConL .showImg").hide();       
 })



 //轮播图样式的重用

var obj1=$("#Louti1 .comFlash ul.But li");
var obj1_scroll=$("#Louti1 .comFlash .scroll");
var obj1_next=$("#Louti1 .comFlash  img.next");
var obj1_prev=$("#Louti1 .comFlash  img.prev");

var obj2=$("#Louti2 .comFlash ul.But li");
var obj2_scroll=$("#Louti2 .comFlash .scroll");
var obj2_next=$("#Louti2 .comFlash  img.next");
var obj2_prev=$("#Louti2 .comFlash  img.prev");

var obj3=$("#Louti3 .comFlash ul.But li");
var obj3_scroll=$("#Louti3 .comFlash .scroll");
var obj3_next=$("#Louti3 .comFlash  img.next");
var obj3_prev=$("#Louti3 .comFlash  img.prev");

var obj4=$("#Louti4 .comFlash ul.But li");
var obj4_scroll=$("#Louti4 .comFlash .scroll");
var obj4_next=$("#Louti4 .comFlash  img.next");
var obj4_prev=$("#Louti4 .comFlash  img.prev");

function commFlash(obj,objScroll,objNext,objPrev){	
	var clearTime=null;
	var Comm_index=0;
	//轮播按扭
	obj.hover(function(){
		clearInterval(clearTime);
		Comm_index=$(this).index();
		nextAndPrev();

	},function(){ AutoPlay(); });

	//左切换按扭
	objNext.click(function(){
		Comm_index++;
		if(Comm_index>obj.length-1){Comm_index=0;} //当到了最后一张，回到第一张
		nextAndPrev();

	});

	//右切换按扭
	objPrev.click(function(){
		Comm_index--;
		if(Comm_index<0){Comm_index=obj.length-1;} //当到了第一张时，回到最后一张
		nextAndPrev();

	});

	//滑动到左右切换按扭时暂停自动播放，移开再播
	objNext.hover(function(){
		clearInterval(clearTime);
	},function(){
		 AutoPlay();
	});

	objPrev.hover(function(){
		clearInterval(clearTime);
	},function(){
		 AutoPlay();
	});

	//自动轮播函数
	function AutoPlay(){

		clearTime=setInterval(function(){
			Comm_index++;
			if(Comm_index>obj.length-1){Comm_index=0;} //当到了最后一张，回到第一张
			nextAndPrev();

		},2000);
		
		

	}

	AutoPlay();


	//切换效果（上下）
	function nextAndPrev(){

		obj.eq(Comm_index).addClass("hh").siblings("li").removeClass("hh");
		objScroll.stop().animate({left:Comm_index*-450},500);

	}

}

	


//#Louti1动画
commFlash(obj1,obj1_scroll,obj1_next,obj1_prev);
//#Louti2动画
commFlash(obj2,obj2_scroll,obj2_next,obj2_prev);
//#Louti3动画
commFlash(obj3,obj3_scroll,obj3_next,obj3_prev);
//#Louti4动画
commFlash(obj4,obj4_scroll,obj4_next,obj4_prev);


/*商品详情选项卡效果*/
$("#ProductInfo ul.sel li").mouseover(function(){
	var _index=$(this).index();
	/*alert(_index);*/
    $(this).addClass("active").siblings("li").removeClass("active");
    $("#ProductInfo .productSelect .selcon").eq(_index).show().siblings("div").hide();
});

/*楼梯导航效果*/
$("#LoutiNav ul li").not("last").hover(function(){
    $(this).addClass("hover");
 
},function(){
    $(this).removeClass("hover");

});

var mark=2;
//导航点击事件
$("#LoutiNav ul li").not("last").click(function(){
     mark=1;
	$("#LoutiNav ul li").find("span").removeClass("active");
	$(this).find("span").addClass("active");
    //获取导航序列号
    var _index=$(this).index();
	//获取楼层高度
	var _top=$("#Main .Louti").eq(_index).offset().top;
	/*alert($("#LoutiNav ul li").size());*/
	if(_index!=$("#LoutiNav ul li").size()-1){
		$("body,html").animate({scrollTop:_top},500,function(){
			mark=2;
		});
	}
	else{
	    $("body,html").animate({scrollTop:0},1000);    
	
	}
});

//楼梯滚动事件
$(window).scroll(function(){
  var _t=$(this).scrollTop();
  
  if(_t>600){
    $("#LoutiNav").fadeIn();
  }
  else{
    $("#LoutiNav").hide();
  }
if(mark==2){
  var obj=$("#Main .Louti");
  obj.each(function(){
        var _index=$(this).index();
	    /*alert(_index);*/
		var _height=obj.eq(_index).offset().top+$(this).height()/2;
		/*document.title=_t+"--"+_height;*/
		if(_t<_height){
			$("#LoutiNav ul li").find("span").removeClass("active");
		    $("#LoutiNav ul li").eq(_index).find("span").addClass("active");
		    return false;
		}
    })
    }
});



/*用户购买时登录和注册页面*/
$("#LoginAndRegister .ti ul li").mouseover(function(){
	var _index=$(this).index();
    $(this).addClass("hover").siblings("li").removeClass("hover");
    $("#LoginAndRegister .LogReg div").eq(_index).show().siblings("div").hide();
})


//用户名
	$("input#user").keyup(function(){
		//用户名不能为空
		var txt=$(this).val();
		if(txt==""){
			$("label#l_user").css("color","red");
		}else{
			$("label#l_user").css("color","#666");
		}

		//当用户名不符合要求时
		/**用户名规则：
		   1、字母、数字、下划线组成，字母开头，4-16位。
		   2、 re = /^[0-9a-zA-Z]\w{3,15}$/;
		**/
		var re=/^[a-zA-Z]\w{3,15}$/;
		var bool=re.test(txt);
		if(!bool){
			$("label#l_user").css("color","red");
		}

	});



	//邮箱验证
	$("input#email").keyup(function(){
		var txt=$(this).val();
		if(txt==""){
			$("label#l_email").css("color","red");
		}else{
			$("label#l_email").css("color","#666");
		}
		 /** 邮箱验证规则：
			 1、姑且把邮箱地址分成“第一部分@第二部分”这样  905wlm   @   qq.com
			 2、第一部分：由字母、数字、下划线、短线“-”、点号“.”组成，
			 3、第二部分：为一个域名，域名由字母、数字、短线“-”、域名后缀组成，
			 4、而域名后缀一般为.xxx或.xxx.xx，一区的域名后缀一般为2-4位字母，如cn,com,net，
			 现在域名有的也会大于4位
		 myreg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,4}$/;
		 **/

		 var re=/^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,4}$/;
		 var bool=re.test(txt);
		 if(!bool){

			$("label#l_email").css("color","red");
		}
	});


	//密码
	$("input#pwd").keyup(function(){
		//密码不能为空
		var txt=$(this).val();
		if(txt==""){
			$("label#l_pwd").css("color","red");
			return;
		}else{
			$("label#l_pwd").css("color","#666");
		}

		//当用户名不符合要求时
		/**用户名规则：
		   1、字母、数字、下划线组成，字母开头，4-16位。
		   2、 re = /^[0-9a-zA-Z]\w{3,15}$/;
		**/
		var re=/^[0-9a-zA-Z]\w{3,15}$/;
		var bool=re.test(txt);
		if(!bool){
			$("label#l_pwd").css("color","red");
			return;
		}

	});
	
	//确认密码
	$("input#qrpwd").blur(function(){
		var txt2=$(this).val();
		var txt=$("input#pwd").val();
		if(txt!=txt2){

			$("label#l_qrpwd").css("color","red");
			return;
		}

	});

	/**用户名规则：
   1、字母、数字、下划线组成，字母开头，4-16位。
   2、 re = /^[a-zA-z]\w{3,15}$/;
   **/


/**  邮政编码
	/^[0-9]{6}$/
**/

/**手机号码规则：
   1、11位数字，以1开头。
   2、 re = /^1\d{10}$/
   **/

/**电话号码规则：
   1、区号+号码，区号以0开头，3位或4位
	2、号码由7位或8位数字组成
	3、区号与号码之间可以无连接符，也可以“-”连接
	4、如01088888888,010-88888888,0955-7777777 。
	re = /^0\d{2,3}-?\d{7,8}$/;
   **/

 /** 邮箱验证规则：
 1、姑且把邮箱地址分成“第一部分@第二部分”这样
 2、第一部分：由字母、数字、下划线、短线“-”、点号“.”组成，
 3、第二部分：为一个域名，域名由字母、数字、短线“-”、域名后缀组成，
 4、而域名后缀一般为.xxx或.xxx.xx，一区的域名后缀一般为2-4位字母，如cn,com,net，现在域名有的也会大于4位
	myreg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,4}$/;
re=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z]{2,4})+$/
 **/


/*放大镜特效*/
$(".q_Img ul li").mouseover(function(){
    //鼠标滑动切换底部小图片    
	$(this).addClass("active").siblings("li").removeClass("active");
    //切换上部小图片
    var sImg=$(this).find("img").attr("dataSrc");
	$(".s_Img img").attr("src",sImg);
	$(".b_Img img").attr("src",sImg);
});

/*移到透明层上显示效果*/
$(".s_Img .shadow").hover(function(){
    $(".s_Img span.fk,.b_Img").show()

},function(){
    $(".s_Img span.fk,.b_Img").hide()
});

/*在透明层上移动效果*/
$(".s_Img .shadow").mousemove(function(e){
    //获取鼠标的位置
	var x=e.clientX;
    var y=e.clientY;
	

	//获取图片与屏幕左边和上边与屏幕的距离
	var t=$(this).offset().top-$(document).scrollTop();;
	var l=$(this).offset().left;
    /*document.title=t+"--"+l;*/
	//获取小方块的宽度和高度的一半
	var w=$(".s_Img span.fk").width()/2;
    var h=$(".s_Img span.fk").height()/2;

	//计算得到小方块与图片的top和left
	var _top=y-t-h;
    var _left=x-l-w;
   
    
	//能滑动的最大高度和宽度
	var bigW=$(".s_Img .shadow").width()-w*2;
	var bigH=$(".s_Img .shadow").height()-h*2


	if(_top<0){
	    _top=0;
	}
	else if(_top>bigH){
	    _top=bigH;
	}
	
	if(_left<0){
	    _left=0;
	}
	else if(_left>bigW){
	    _left=bigW;
	}
	
	//通过改变css动态改变小方块与图片的绝对位置
	$(".s_Img span.fk").css({"left":_left,"top":_top});
	
    //获取图片的移动比例
    var _l=_left/bigW;
	var _h=_top/bigH;
    
	//大图移动的距离
    var _bigL=($(".b_Img img").width()-$(".b_Img").width())*_l;
	var _bigT=($(".b_Img img").height()-$(".b_Img").height())*_h;
     
	/*document.title=_bigL+"--"+_bigT;*/
	
	//动态改变大图的绝对位置
	$(".b_Img img").css({"left":-_bigL,"top":-_bigT});
});
