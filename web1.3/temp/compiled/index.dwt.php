<!doctype html>
<html lang="en">
 <head>
<meta name="Generator" content="ECSHOP v2.7.3" />
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="Ecshop开发">
  <meta name="Ecshop商城"">
  <title>鲜花礼品商城</title>
  <link href="themes/default/style.css" rel="stylesheet" type="text/css">
  <link href="themes/default/css/web.css" rel="stylesheet" type="text/css">
  
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,index.js')); ?>
 </head>
 <body>
  <?php echo $this->fetch('library/page_header.lbi'); ?>
  
  
  <div id="part1">
        <div class="partCon">
		     
			  <?php echo $this->fetch('library/category_tree.lbi'); ?>
		        
		    
			
            
			<div class="news">
			    <div class="newsOpacity"></div>
				<div class="newsCon">
                
				
				<div class="newsKx">
				    <h3>资讯快报</h3>

					<ul>
					  <?php $_from = $this->_var['personal']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'art');if (count($_from)):
    foreach ($_from AS $this->_var['art']):
?>
					  	<li style="margin-left: 6px;"><a href="<?php echo $this->_var['art']['url']; ?>" title="<?php echo $this->_var['art']['title']; ?>"><?php echo sub_str($this->_var['art']['title'],12); ?></a></li>
					  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					</ul>
				</div>
				




                
				<div class="newsKx Datex">
				    <h3>节日提醒</h3>

					<ul>
						<?php $_from = $this->_var['personal']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'art');if (count($_from)):
    foreach ($_from AS $this->_var['art']):
?>
						<li style="margin-left: -5px;"><a href="<?php echo $this->_var['art']['url']; ?>" title="<?php echo $this->_var['art']['title']; ?>"><?php echo sub_str($this->_var['art']['title'],12); ?></a></li>
						<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					</ul>
				</div>
				
				</div>
			</div>
			
			
			
			<div class="flash">
			    
			    <a href="javascript:void(0)" class="flash_prev"></a>
				<a href="javascript:void(0)" class="flash_next"></a>

				
				<div class="scroll">
				    <img src="themes/default/images/flash1.jpg" style="left:0px;">
					<img src="themes/default/images/flash2.jpg">
					<img src="themes/default/images/flash3.jpg">
					<img src="themes/default/images/flash4.jpg">
					<img src="themes/default/images/flash5.jpg">
					<img src="themes/default/images/flash6.jpg">
                </div>
                
				
				<div class="But">
				    <span class="hover"></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>

			</div>
			    
            
		</div>
  </div>
 


<div class="Louti">
 <div id="webIntro">
    <div class="webIntroCon" >
		<div class="hotIntro" style="width:1200px;position:relative;">
			<img src="themes/default/images/tj.jpg" class="hotImg" style="left:0;bottom:90px;"/>
			<div class="hotList" style="width:1200px;">
				<dl style="margin-left:57px;">
					<dt><a href=""><img src="themes/default/images/w2.jpg" /></a></dt>
					<dd class="ti">味多美 生日聚会送礼 水果蛋糕 缤纷盛果</dd>
					<dd class="money">特价：<font>￥198.00</font></dd>
					<dd class="buy"><a href="">立即购买</a></dd>
				</dl>
				<dl>
					<dt><a href=""><img src="themes/default/images/w1.jpg" /></a></dt>
					<dd class="ti">味多美 生日聚会送礼 水果蛋糕 缤纷盛果</dd>
					<dd class="money">特价：<font>￥198.00</font></dd>
					<dd class="buy"><a href="">立即购买</a></dd>
				</dl>
				<dl>
					<dt><a href=""><img src="themes/default/images/w3.jpg" /></a></dt>
					<dd class="ti">味多美 生日聚会送礼 水果蛋糕 缤纷盛果</dd>
					<dd class="money">特价：<font>￥198.00</font></dd>
					<dd class="buy"><a href="">立即购买</a></dd>
				</dl>

			</div>
			<div style="clear:both;"></div>
		</div>
	</div>
</div>
</div>
 
 
 <div id="Main">
 
 <div class="Louti">
  <div id="day_LowPrices">
        
		<div class="day_LowPricesL">
		    
			<div class="lowPricesL_ti">
			    <ul>
				    <li class="active">天天低价</li>
					<li>商品促销</li>
					<li>周末狂欢</li>
					<li>猜你喜欢</li>
				</ul>
			</div>
			

			
			<div class="lowPricesL_con">
			    <ul style="display:block;">
				    <li>
					    <a href="javascript:;"><img src="themes/default/images/bimg.png" width="200" height="200" alt=""/></a>
						<p><a href="javascript:;">个性定制色彩缤纷蛋糕</a></p>
						<font>￥300.0元</font>
					</li>
					<li>
					    <a href="javascript:;"><img src="themes/default/images/dgd6.jpg" width="200" height="200" alt=""/></a>
						<p><a href="javascript:;">个性定制色彩缤纷蛋糕</a></p>
						<font>￥300.0元</font> 
					</li>
					<li>
					    <a href="javascript:;"><img src="themes/default/images/dgd9.jpg" width="200" height="200" alt=""/></a>
						<p><a href="javascript:;">个性定制色彩缤纷蛋糕</a></p>
						<font>￥300.0元</font> 
					</li>
					<li>
					    <a href="javascript:;"><img src="themes/default/images/dg_img1.jpg" width="200" height="200" alt=""/></a>
						<p><a href="javascript:;">个性定制色彩缤纷蛋糕</a></p>
						<font>￥300.0元</font> 
					</li>
				</ul>
				<ul>
				    <li>
					    <a href="javascript:;"><img src="themes/default/images/bimg.png" width="200" height="200" alt=""/></a>
						<p><a href="javascript:;">个性定制色彩缤纷蛋糕</a></p>
						<font>￥300.0元</font>
					</li>
					<li>
					    <a href="javascript:;"><img src="themes/default/images/dgd9.jpg" width="200" height="200" alt=""/></a>
						<p><a href="javascript:;">个性定制色彩缤纷蛋糕</a></p>
						<font>￥300.0元</font> 
					</li>
					<li>
					    <a href="javascript:;"><img src="themes/default/images/dg_img1.jpg" width="200" height="200" alt=""/></a>
						<p><a href="javascript:;">个性定制色彩缤纷蛋糕</a></p>
						<font>￥300.0元</font> 
					</li>
					<li>
					    <a href="javascript:;"><img src="themes/default/images/dgd6.jpg" width="200" height="200" alt=""/></a>
						<p><a href="javascript:;">个性定制色彩缤纷蛋糕</a></p>
						<font>￥300.0元</font> 
					</li>
				</ul>
				<ul>
				    <li>
					    <a href="javascript:;"><img src="themes/default/images/bimg.png" width="200" height="200" alt=""/></a>
						<p><a href="javascript:;">个性定制色彩缤纷蛋糕</a></p>
						<font>￥300.0元</font>
					</li>
					<li>
					    <a href="javascript:;"><img src="themes/default/images/dg_img1.jpg" width="200" height="200" alt=""/></a>
						<p><a href="javascript:;">个性定制色彩缤纷蛋糕</a></p>
						<font>￥300.0元</font> 
					</li>
					<li>
					    <a href="javascript:;"><img src="themes/default/images/dgd9.jpg" width="200" height="200" alt=""/></a>
						<p><a href="javascript:;">个性定制色彩缤纷蛋糕</a></p>
						<font>￥300.0元</font> 
					</li>
					<li>
					   <a href="javascript:;"> <img src="themes/default/images/dgd6.jpg" width="200" height="200" alt=""/></a>
						<p><a href="javascript:;">个性定制色彩缤纷蛋糕</a></p>
						<font>￥300.0元</font> 
					</li>
				</ul>
				<ul>
				    <li>
					    <a href="javascript:;"><img src="themes/default/images/bimg.png" width="200" height="200" alt=""/></a>
						<p><a href="javascript:;">个性定制色彩缤纷蛋糕</a></p>
						<font>￥300.0元</font>
					</li>
					<li>
					    <a href="javascript:;"><img src="themes/default/images/dgd6.jpg" width="200" height="200" alt=""/></a>
						<p><a href="javascript:;">个性定制色彩缤纷蛋糕</a></p>
						<font>￥300.0元</font> 
					</li>
					<li>
					    <a href="javascript:;"><img src="themes/default/images/dgd9.jpg" width="200" height="200" alt=""/></a>
						<p><a href="javascript:;">个性定制色彩缤纷蛋糕</a></p>
						<font>￥300.0元</font> 
					</li>
					<li>
					    <a href="javascript:;"><img src="themes/default/images/dg_img1.jpg" width="200" height="200" alt=""/></a>
						<p><a href="javascript:;">个性定制色彩缤纷蛋糕</a></p>
						<font>￥300.0元</font> 
					</li>
				</ul>
			</div>
			
		</div>
		

		
        <div class="day_LowPricesR">
		   
			<div class="lowPricesR_ti lowPricesL_ti">
			    <ul>
				    <li class="active">热门活动</li>
					<li>频道精选</li>
				</ul>
			</div>
			

			
			<div class="lowPricesR_con lowPricesL_con">
			     <?php echo $this->fetch('library/daojishi.lbi'); ?> 
			</div>
			
		</div>
		
  </div>
  </div>
  
 
  
  <div class="Louti">
  <div id="Personal">
		
		<p class="ti">温馨小屋</p>
		

		
		<div class="con">
			
			<div class="partL">
			    
                <img src="themes/default/images/prev1.png" class="prev"/>
				<img src="themes/default/images/next1.png" class="next"/>
                
                <ul>
                	<li>
					    <img src="themes/default/images/jr_img2.jpg" alt="" width="280" height="280"/>
					    <p>瞌睡兔音乐枕 午休音乐枕头 可连接手<br/>机、MP3听音乐的玩偶公</p>
						<span>特价：<font>116.0元</font></span>
					</li>
					<li>
					    <img src="themes/default/images/jr_img3.jpg" alt="" width="280" height="280"/>
					    <p>瞌睡兔音乐枕 午休音乐枕头 可连接手<br/>机、MP3听音乐的玩偶公</p>
						<span>特价：<font>116.0元</font></span>
					</li>
					<li>
					    <img src="themes/default/images/jr_img4.jpg" alt="" width="280" height="280"/>
					    <p>瞌睡兔音乐枕 午休音乐枕头 可连接手<br/>机、MP3听音乐的玩偶公</p>
						<span>特价：<font>116.0元</font></span>
					</li>
				</ul> 
			</div>
			

			
			<div class="partM">
			    <ul>
				    <li class="active">照片定制<img src="themes/default/images/ico.png"/></li>
					<li>钥匙扣<img src="themes/default/images/ico.png"/></li>
					<li>围巾、帽子<img src="themes/default/images/ico.png"/></li>
					<li>香水座<img src="themes/default/images/ico.png"/></li>
					<li>台灯<img src="themes/default/images/ico.png"/></li>
				</ul>
				<img src="themes/default/images/zp4.jpg" width="175" height="150" alt=""/>
				<p>宠爱一生 925纯银<br/>紫水晶项链</p>
				<a href="javascript:;" class="hot">热销产品</a>
			</div>
			

			
			<div class="partR">
			      <?php echo $this->fetch('library/index_best_goods_19.lbi'); ?>
				    
				  <?php echo $this->fetch('library/index_best_goods_24.lbi'); ?>
				<ul>2</ul>
				<ul>3</ul>
				<ul>4</ul>
			</div>
			
		</div>
        
  </div>
  </div>
  

 
 <div class="Louti">
	  <div id="qgCon">
			<div class="qg_title">
				<span class="new">限时抢购</span>
			</div>
			  
			<div class="qgGift">
				<div class="Big">
					<ul>
						<li>
							<img src="themes/default/images/flash_Qg1.jpg"/>
							<div class="qg">
								<b>￥200.00</b><del>￥268</del>
								<input type="button" value="立即抢购" id="button_qg">
							</div>
							<div class="djTime">
								<p class="time1"><i class="iconfont">&#xe600;</i>剩余 
								   <font>10</font>天
								   <font>22</font>小时
								   <font>33</font>分
								   <font>56</font>秒
								</p>
							</div>
						</li>
						<li>
							<img src="themes/default/images/flash_Qg2.jpg"/>
							<div class="qg">
								<b>￥188.00</b><del>￥260</del>
								<input type="button" value="立即抢购" id="button_qg">
							</div>
							<div class="djTime">
								<p class="time2"><i class="iconfont">&#xe600;</i>剩余 
								   <font>10</font>天
								   <font>22</font>小时
								   <font>33</font>分
								   <font>56</font>秒
								</p>
							</div>
						</li>
						<li>
							<img src="themes/default/images/flash_Qg3.jpg"/>
							<div class="qg">
								<b>￥150.00</b><del>￥200</del>
								<input type="button" value="立即抢购" id="button_qg">
							</div>
							<div class="djTime">
								<p class="time3"><i class="iconfont">&#xe600;</i>剩余 
								   <font>10</font>天
								   <font>22</font>小时
								   <font>33</font>分
								   <font>56</font>秒
								</p>
							</div>
						</li>
						<li>
							<img src="themes/default/images/flash_Qg4.jpg"/>
							<div class="qg">
								<b>￥120.00</b><del>￥193</del>
								<input type="button" value="立即抢购" id="button_qg">
							</div>
							<div class="djTime">
								<p class="time4"><i class="iconfont">&#xe600;</i>剩余 
								   <font>10</font>天
								   <font>22</font>小时
								   <font>33</font>分
								   <font>56</font>秒
								</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
	  </div>
</div>
  

  
  
  <div class="xianhua Louti">
        
        <ul class="xianhuaNav">
		    <li class="first"><span>白玫瑰</span></li>
			<li><span>红玫瑰</span></li>
			<li><span>郁金香</span></li>
			<li><span>牡丹花</span></li>
			<li><span>法国玫瑰</span></li>
			<li class="last hover"><span>香槟玫</span></li>
			<li class="xh_nav"><span>鲜花</span></li>
		</ul>
        
        
		
        <div class="xianhuaCon">
		    
		    <div class="xianhuaLeft">
			    
			    <div class="xianhuaFlash"></div>
			    

				
				<div class="xianhuaType">
				    <ul>
					    <li class="first active">
						    <h3>白玫瑰</h3>
							<div><h2>&nbsp&nbsp&nbsp白玫瑰，玫瑰中的一种。<br/>
                                 &nbsp&nbsp&nbsp玫瑰花有紫、白两种，形似蔷薇和月季。玫瑰在植物分类学上是<br/>
                                 &nbsp&nbsp&nbsp指蔷薇科蔷薇属灌木，在日常生活中是蔷薇属一系列花大艳丽的<br/>
                                 &nbsp&nbsp&nbsp栽培品种的统称，这些栽培品种在植物分类学上应称做月季或蔷<br/>
                                 &nbsp&nbsp&nbsp薇。</h2>
							</div>
						</li>
						<li>
						    <h3>郁金香</h3>
							<div><h2>&nbsp&nbsp&nbsp白玫瑰，玫瑰中的一种。<br/>
                                 &nbsp&nbsp&nbsp玫瑰花有紫、白两种，形似蔷薇和月季。玫瑰在植物分类学上是<br/>
                                 &nbsp&nbsp&nbsp指蔷薇科蔷薇属灌木，在日常生活中是蔷薇属一系列花大艳丽的<br/>
                                 &nbsp&nbsp&nbsp栽培品种的统称，这些栽培品种在植物分类学上应称做月季或蔷<br/>
                                 &nbsp&nbsp&nbsp薇。</h2>
							</div>
						</li>
						<li>
						    <h3>红玫瑰</h3>
							<div><h2>&nbsp&nbsp&nbsp白玫瑰，玫瑰中的一种。<br/>
                                 &nbsp&nbsp&nbsp玫瑰花有紫、白两种，形似蔷薇和月季。玫瑰在植物分类学上是<br/>
                                 &nbsp&nbsp&nbsp指蔷薇科蔷薇属灌木，在日常生活中是蔷薇属一系列花大艳丽的<br/>
                                 &nbsp&nbsp&nbsp栽培品种的统称，这些栽培品种在植物分类学上应称做月季或蔷<br/>
                                 &nbsp&nbsp&nbsp薇。</h2>
							</div>
						</li>
						<li>
						    <h3>法国玫瑰</h3>
							<div><h2>&nbsp&nbsp&nbsp白玫瑰，玫瑰中的一种。<br/>
                                 &nbsp&nbsp&nbsp玫瑰花有紫、白两种，形似蔷薇和月季。玫瑰在植物分类学上是<br/>
                                 &nbsp&nbsp&nbsp指蔷薇科蔷薇属灌木，在日常生活中是蔷薇属一系列花大艳丽的<br/>
                                 &nbsp&nbsp&nbsp栽培品种的统称，这些栽培品种在植物分类学上应称做月季或蔷<br/>
                                 &nbsp&nbsp&nbsp薇。</h2>
							</div>
						</li>
						<li class="last">
						    <h3>香槟玫瑰</h3>
							<div>
							    
								<h2>&nbsp&nbsp&nbsp白玫瑰，玫瑰中的一种。<br/>
                                 &nbsp&nbsp&nbsp玫瑰花有紫、白两种，形似蔷薇和月季。玫瑰在植物分类学上是<br/>
                                 &nbsp&nbsp&nbsp指蔷薇科蔷薇属灌木，在日常生活中是蔷薇属一系列花大艳丽的<br/>
                                 &nbsp&nbsp&nbsp栽培品种的统称，这些栽培品种在植物分类学上应称做月季或蔷<br/>
                                 &nbsp&nbsp&nbsp薇。</h2>
							</div>
						</li>
					</ul>
				</div>
				
			</div>
			
			
			
			<div class="xianhuaRight">
			    <div class="xianhuaComm">
				    <ul>
					    <li><a href=""><img src="themes/default/images/xhComm1.jpg"/></a>
						    <p><a href="">爱诺啦鲜花速递
                            红玫瑰花百合花</a>
							</p>
						</li>
						<li><a href=""><img src="themes/default/images/xhComm2.jpg"/></a>
						    <p><a href="">爱诺啦鲜花速递
                            红玫瑰花百合花</a>
							</p>
						</li>
						<li><a href=""><img src="themes/default/images/xhComm3.jpg"/></a>
						    <p><a href="">爱诺啦鲜花速递
                            红玫瑰花百合花</a>
							</p>
						</li>
						<li><a href=""><img src="themes/default/images/xhComm1.jpg"/></a>
						    <p><a href="">爱诺啦鲜花速递
                            红玫瑰花百合花</a>
							</p>
						</li>
						<li><a href=""><img src="themes/default/images/xhComm2.jpg"/></a>
						    <p><a href="">爱诺啦鲜花速递
                            红玫瑰花百合花</a>
							</p>
						</li>
						<li><a href=""><img src="themes/default/images/xhComm3.jpg"/></a>
						    <p><a href="">爱诺啦鲜花速递
                            红玫瑰花百合花</a>
							</p>
						</li>
						<li><a href=""><img src="themes/default/images/xhComm1.jpg"/></a>
						    <p><a href="">爱诺啦鲜花速递
                            红玫瑰花百合花</a>
							</p>
						</li>
						<li><a href=""><img src="themes/default/images/xhComm2.jpg"/></a>
						    <p><a href="">爱诺啦鲜花速递
                            红玫瑰花百合花</a>
							</p>
						</li>
						<li><a href=""><img src="themes/default/images/xhComm3.jpg"/></a>
						    <p><a href="">爱诺啦鲜花速递
                            红玫瑰花百合花</a>
							</p>
						</li>
					</ul>
				</div>
				<div class="xianhuaComm">
				     <ul>
					    <li><a href=""><img src="themes/default/images/xhComm1.jpg"/></a>
						    <p><a href="">爱诺啦鲜花速递
                            红玫瑰花百合花</a>
							</p>
						</li>
						<li><a href=""><img src="themes/default/images/xhComm2.jpg"/></a>
						    <p><a href="">爱诺啦鲜花速递
                            红玫瑰花百合花</a>
							</p>
						</li>
						<li><a href=""><img src="themes/default/images/xhComm3.jpg"/></a>
						    <p><a href="">爱诺啦鲜花速递
                            红玫瑰花百合花</a>
							</p>
						</li>
						<li><a href=""><img src="themes/default/images/xhComm1.jpg"/></a>
						    <p><a href="">爱诺啦鲜花速递
                            红玫瑰花百合花</a>
							</p>
						</li>
						<li><a href=""><img src="themes/default/images/xhComm2.jpg"/></a>
						    <p><a href="">爱诺啦鲜花速递
                            红玫瑰花百合花</a>
							</p>
						</li>
						<li><a href=""><img src="themes/default/images/xhComm3.jpg"/></a>
						    <p><a href="">爱诺啦鲜花速递
                            红玫瑰花百合花</a>
							</p>
						</li>
						<li><a href=""><img src="themes/default/images/xhComm1.jpg"/></a>
						    <p><a href="">爱诺啦鲜花速递
                            红玫瑰花百合花</a>
							</p>
						</li>
						<li><a href=""><img src="themes/default/images/xhComm2.jpg"/></a>
						    <p><a href="">爱诺啦鲜花速递
                            红玫瑰花百合花</a>
							</p>
						</li>
						<li><a href=""><img src="themes/default/images/xhComm3.jpg"/></a>
						    <p><a href="">爱诺啦鲜花速递
                            红玫瑰花百合花</a>
							</p>
						</li>
					</ul>
				</div>
				<div class="xianhuaComm">
				     <ul>
					    <li><a href=""><img src="themes/default/images/xhComm1.jpg"/></a>
						    <p><a href="">爱诺啦鲜花速递
                            红玫瑰花百合花</a>
							</p>
						</li>
						<li><a href=""><img src="themes/default/images/xhComm2.jpg"/></a>
						    <p><a href="">爱诺啦鲜花速递
                            红玫瑰花百合花</a>
							</p>
						</li>
						<li><a href=""><img src="themes/default/images/xhComm3.jpg"/></a>
						    <p><a href="">爱诺啦鲜花速递
                            红玫瑰花百合花</a>
							</p>
						</li>
						<li><a href=""><img src="themes/default/images/xhComm1.jpg"/></a>
						    <p><a href="">爱诺啦鲜花速递
                            红玫瑰花百合花</a>
							</p>
						</li>
						<li><a href=""><img src="themes/default/images/xhComm2.jpg"/></a>
						    <p><a href="">爱诺啦鲜花速递
                            红玫瑰花百合花</a>
							</p>
						</li>
						<li><a href=""><img src="themes/default/images/xhComm3.jpg"/></a>
						    <p><a href="">爱诺啦鲜花速递
                            红玫瑰花百合花</a>
							</p>
						</li>
						<li><a href=""><img src="themes/default/images/xhComm1.jpg"/></a>
						    <p><a href="">爱诺啦鲜花速递
                            红玫瑰花百合花</a>
							</p>
						</li>
						<li><a href=""><img src="themes/default/images/xhComm2.jpg"/></a>
						    <p><a href="">爱诺啦鲜花速递
                            红玫瑰花百合花</a>
							</p>
						</li>
						<li><a href=""><img src="themes/default/images/xhComm3.jpg"/></a>
						    <p><a href="">爱诺啦鲜花速递
                            红玫瑰花百合花</a>
							</p>
						</li>
					</ul>
				</div>
				<div class="xianhuaComm">
				     <ul>
					    <li><a href=""><img src="themes/default/images/xhComm1.jpg"/></a>
						    <p><a href="">爱诺啦鲜花速递
                            红玫瑰花百合花</a>
							</p>
						</li>
						<li><a href=""><img src="themes/default/images/xhComm2.jpg"/></a>
						    <p><a href="">爱诺啦鲜花速递
                            红玫瑰花百合花</a>
							</p>
						</li>
						<li><a href=""><img src="themes/default/images/xhComm3.jpg"/></a>
						    <p><a href="">爱诺啦鲜花速递
                            红玫瑰花百合花</a>
							</p>
						</li>
						<li><a href=""><img src="themes/default/images/xhComm1.jpg"/></a>
						    <p><a href="">爱诺啦鲜花速递
                            红玫瑰花百合花</a>
							</p>
						</li>
						<li><a href=""><img src="themes/default/images/xhComm2.jpg"/></a>
						    <p><a href="">爱诺啦鲜花速递
                            红玫瑰花百合花</a>
							</p>
						</li>
						<li><a href=""><img src="themes/default/images/xhComm3.jpg"/></a>
						    <p><a href="">爱诺啦鲜花速递
                            红玫瑰花百合花</a>
							</p>
						</li>
						<li><a href=""><img src="themes/default/images/xhComm1.jpg"/></a>
						    <p><a href="">爱诺啦鲜花速递
                            红玫瑰花百合花</a>
							</p>
						</li>
						<li><a href=""><img src="themes/default/images/xhComm2.jpg"/></a>
						    <p><a href="">爱诺啦鲜花速递
                            红玫瑰花百合花</a>
							</p>
						</li>
						<li><a href=""><img src="themes/default/images/xhComm3.jpg"/></a>
						    <p><a href="">爱诺啦鲜花速递
                            红玫瑰花百合花</a>
							</p>
						</li>
					</ul>
				</div>
				<div class="xianhuaComm">
				     <ul>
					    <li><a href=""><img src="themes/default/images/xhComm1.jpg"/></a>
						    <p><a href="">爱诺啦鲜花速递
                            红玫瑰花百合花</a>
							</p>
						</li>
						<li><a href=""><img src="themes/default/images/xhComm2.jpg"/></a>
						    <p><a href="">爱诺啦鲜花速递
                            红玫瑰花百合花</a>
							</p>
						</li>
						<li><a href=""><img src="themes/default/images/xhComm3.jpg"/></a>
						    <p><a href="">爱诺啦鲜花速递
                            红玫瑰花百合花</a>
							</p>
						</li>
						<li><a href=""><img src="themes/default/images/xhComm1.jpg"/></a>
						    <p><a href="">爱诺啦鲜花速递
                            红玫瑰花百合花</a>
							</p>
						</li>
						<li><a href=""><img src="themes/default/images/xhComm2.jpg"/></a>
						    <p><a href="">爱诺啦鲜花速递
                            红玫瑰花百合花</a>
							</p>
						</li>
						<li><a href=""><img src="themes/default/images/xhComm3.jpg"/></a>
						    <p><a href="">爱诺啦鲜花速递
                            红玫瑰花百合花</a>
							</p>
						</li>
						<li><a href=""><img src="themes/default/images/xhComm1.jpg"/></a>
						    <p><a href="">爱诺啦鲜花速递
                            红玫瑰花百合花</a>
							</p>
						</li>
						<li><a href=""><img src="themes/default/images/xhComm2.jpg"/></a>
						    <p><a href="">爱诺啦鲜花速递
                            红玫瑰花百合花</a>
							</p>
						</li>
						<li><a href=""><img src="themes/default/images/xhComm3.jpg"/></a>
						    <p><a href="">爱诺啦鲜花速递
                            红玫瑰花百合花</a>
							</p>
						</li>
					</ul>
				</div>
				<div class="xianhuaComm" style="display:block;">
				     <ul>
					    <li><a href=""><img src="themes/default/images/xhComm1.jpg"/></a>
						    <p><a href="">爱诺啦鲜花速递
                            红玫瑰花百合花</a>
							</p>
						</li>
						<li><a href=""><img src="themes/default/images/xhComm2.jpg"/></a>
						    <p><a href="">爱诺啦鲜花速递
                            红玫瑰花百合花</a>
							</p>
						</li>
						<li><a href=""><img src="themes/default/images/xhComm3.jpg"/></a>
						    <p><a href="">爱诺啦鲜花速递
                            红玫瑰花百合花</a>
							</p>
						</li>
						<li><a href=""><img src="themes/default/images/xhComm1.jpg"/></a>
						    <p><a href="">爱诺啦鲜花速递
                            红玫瑰花百合花</a>
							</p>
						</li>
						<li><a href=""><img src="themes/default/images/xhComm2.jpg"/></a>
						    <p><a href="">爱诺啦鲜花速递
                            红玫瑰花百合花</a>
							</p>
						</li>
						<li><a href=""><img src="themes/default/images/xhComm3.jpg"/></a>
						    <p><a href="">爱诺啦鲜花速递
                            红玫瑰花百合花</a>
							</p>
						</li>
						<li><a href=""><img src="themes/default/images/xhComm1.jpg"/></a>
						    <p><a href="">爱诺啦鲜花速递
                            红玫瑰花百合花</a>
							</p>
						</li>
						<li><a href=""><img src="themes/default/images/xhComm2.jpg"/></a>
						    <p><a href="">爱诺啦鲜花速递
                            红玫瑰花百合花</a>
							</p>
						</li>
						<li><a href=""><img src="themes/default/images/xhComm3.jpg"/></a>
						    <p><a href="">爱诺啦鲜花速递
                            红玫瑰花百合花</a>
							</p>
						</li>
					</ul>
				</div>
			</div>
			
		</div>
		
    
	</div>
  
  
<div class="Louti">
	
	<div class="dgTitle"><span>生日蛋糕</span>  
	</div>
	
	
	

	<div id="dgCon">
	    
	    <div class="dgConL">
		    <ul>
			    <li><img src="themes/default/images/dgd1.jpg" width="231" height="233"/>
				<div style="display:none;">
				<a href="http://www.baidu.com" class="buyUrl"></a>
				<h3 class="ti">生日蛋糕配送 蛋糕鲜花速递 巧克力水果奶油蛋糕双层</h3>
                <p class="info">我为您搭建的，是光彩缤纷的世界，是畅想甜蜜的世界，是欢乐的爱心世界！蛋糕在哪里，你的爱心就散播在哪里 安逸静谧的晚年，一种休息，一种愉悦，一种至
	            高的享受!</p>
				<p class="type">式一,式二,式三</p>
				<p class="money">价格： ￥258.00</p>
				</div>
				</li>
				<li><img src="themes/default/images/dgd2.jpg" width="231" height="233"/>
				<div style="display:none;">
				<a href="http://www.baidu.com" class="buyUrl"></a>
				<h3 class="ti">生日蛋糕配送 蛋糕鲜花速递 巧克力水果奶油蛋糕双层</h3>
                <p class="info">我为您搭建的，是光彩缤纷的世界，是畅想甜蜜的世界，是欢乐的爱心世界！蛋糕在哪里，你的爱心就散播在哪里 安逸静谧的晚年，一种休息，一种愉悦，一种至
	            高的享受!</p>
				<p class="type">式一,式二,式三</p>
				<p class="money">价格： ￥258.00</p>
				</div>
				</li>
				<li><img src="themes/default/images/dgd3.jpg" width="231" height="233"/>
				<div style="display:none;">
				<a href="http://www.baidu.com" class="buyUrl"></a>
				<h3 class="ti">生日蛋糕配送 蛋糕鲜花速递 巧克力水果奶油蛋糕双层</h3>
                <p class="info">我为您搭建的，是光彩缤纷的世界，是畅想甜蜜的世界，是欢乐的爱心世界！蛋糕在哪里，你的爱心就散播在哪里 安逸静谧的晚年，一种休息，一种愉悦，一种至
	            高的享受!</p>
				<p class="type">式一,式二,式三</p>
				<p class="money">价格： ￥258.00</p>
				</div>
				</li>
				<li><img src="themes/default/images/dgd4.jpg" width="231" height="233"/>
				<div style="display:none;">
				<a href="http://www.baidu.com" class="buyUrl"></a>
				<h3 class="ti">生日蛋糕配送 蛋糕鲜花速递 巧克力水果奶油蛋糕双层</h3>
                <p class="info">我为您搭建的，是光彩缤纷的世界，是畅想甜蜜的世界，是欢乐的爱心世界！蛋糕在哪里，你的爱心就散播在哪里 安逸静谧的晚年，一种休息，一种愉悦，一种至
	            高的享受!</p>
				<p class="type">式一,式二,式三</p>
				<p class="money">价格： ￥258.00</p>
				</div>
				</li>
				<li><img src="themes/default/images/dgd5.jpg" width="231" height="233"/>
				<div style="display:none;">
				<a href="http://www.baidu.com" class="buyUrl"></a>
				<h3 class="ti">生日蛋糕配送 蛋糕鲜花速递 巧克力水果奶油蛋糕双层</h3>
                <p class="info">我为您搭建的，是光彩缤纷的世界，是畅想甜蜜的世界，是欢乐的爱心世界！蛋糕在哪里，你的爱心就散播在哪里 安逸静谧的晚年，一种休息，一种愉悦，一种至
	            高的享受!</p>
				<p class="type">式一,式二,式三</p>
				<p class="money">价格： ￥258.00</p>
				</div>
				</li>
				<li><img src="themes/default/images/dgd6.jpg" width="231" height="233"/>
				<div style="display:none;">
				<a href="http://www.baidu.com" class="buyUrl"></a>
				<h3 class="ti">生日蛋糕配送 蛋糕鲜花速递 巧克力水果奶油蛋糕双层</h3>
                <p class="info">我为您搭建的，是光彩缤纷的世界，是畅想甜蜜的世界，是欢乐的爱心世界！蛋糕在哪里，你的爱心就散播在哪里 安逸静谧的晚年，一种休息，一种愉悦，一种至
	            高的享受!</p>
				<p class="type">式一,式二,式三</p>
				<p class="money">价格： ￥258.00</p>
				</div>
				</li>
				<li><img src="themes/default/images/dgd7.jpg" width="231" height="233"/>
				<div style="display:none;">
				<a href="http://www.baidu.com" class="buyUrl"></a>
				<h3 class="ti">生日蛋糕配送 蛋糕鲜花速递 巧克力水果奶油蛋糕双层</h3>
                <p class="info">我为您搭建的，是光彩缤纷的世界，是畅想甜蜜的世界，是欢乐的爱心世界！蛋糕在哪里，你的爱心就散播在哪里 安逸静谧的晚年，一种休息，一种愉悦，一种至
	            高的享受!</p>
				<p class="type">式一,式二,式三</p>
				<p class="money">价格： ￥258.00</p>
				</div>
				</li>
				<li><img src="themes/default/images/dgd8.jpg" width="231" height="233"/>
				<div style="display:none;">
				<a href="http://www.baidu.com" class="buyUrl"></a>
				<h3 class="ti">生日蛋糕配送 蛋糕鲜花速递 巧克力水果奶油蛋糕双层</h3>
                <p class="info">我为您搭建的，是光彩缤纷的世界，是畅想甜蜜的世界，是欢乐的爱心世界！蛋糕在哪里，你的爱心就散播在哪里 安逸静谧的晚年，一种休息，一种愉悦，一种至
	            高的享受!</p>
				<p class="type">式一,式二,式三</p>
				<p class="money">价格： ￥258.00</p>
				</div>
				</li>
				<li><img src="themes/default/images/dgd9.jpg" width="231" height="233"/>
				<div style="display:none;">
				<a href="http://www.baidu.com" class="buyUrl"></a>
				<h3 class="ti">生日蛋糕配送 蛋糕鲜花速递 巧克力水果奶油蛋糕双层</h3>
                <p class="info">我为您搭建的，是光彩缤纷的世界，是畅想甜蜜的世界，是欢乐的爱心世界！蛋糕在哪里，你的爱心就散播在哪里 安逸静谧的晚年，一种休息，一种愉悦，一种至
	            高的享受!</p>
				<p class="type">式一,式二,式三</p>
				<p class="money">价格： ￥258.00</p>
				</div>
				</li>
				<li><img src="themes/default/images/dgd10.jpg" width="231" height="233"/>
				<div style="display:none;">
				<a href="http://www.baidu.com" class="buyUrl"></a>
				<h3 class="ti">生日蛋糕配送 蛋糕鲜花速递 巧克力水果奶油蛋糕双层</h3>
                <p class="info">我为您搭建的，是光彩缤纷的世界，是畅想甜蜜的世界，是欢乐的爱心世界！蛋糕在哪里，你的爱心就散播在哪里 安逸静谧的晚年，一种休息，一种愉悦，一种至
	            高的享受!</p>
				<p class="type">式一,式二,式三</p>
				<p class="money">价格： ￥258.00</p>
				</div>
				</li>
				<li><img src="themes/default/images/dgd11.jpg" width="231" height="233"/>
				<div style="display:none;">
				<a href="http://www.baidu.com" class="buyUrl"></a>
				<h3 class="ti">生日蛋糕配送 蛋糕鲜花速递 巧克力水果奶油蛋糕双层</h3>
                <p class="info">我为您搭建的，是光彩缤纷的世界，是畅想甜蜜的世界，是欢乐的爱心世界！蛋糕在哪里，你的爱心就散播在哪里 安逸静谧的晚年，一种休息，一种愉悦，一种至
	            高的享受!</p>
				<p class="type">式一,式二,式三</p>
				<p class="money">价格： ￥258.00</p>
				</div>
				</li>
				<li><img src="themes/default/images/dgd12.jpg" width="231" height="233"/>
				<div style="display:none;">
				<a href="http://www.baidu.com" class="buyUrl"></a>
				<h3 class="ti">生日蛋糕配送 蛋糕鲜花速递 巧克力水果奶油蛋糕双层</h3>
                <p class="info">我为您搭建的，是光彩缤纷的世界，是畅想甜蜜的世界，是欢乐的爱心世界！蛋糕在哪里，你的爱心就散播在哪里 安逸静谧的晚年，一种休息，一种愉悦，一种至
	            高的享受!</p>
				<p class="type">式一,式二,式三</p>
				<p class="money">价格： ￥258.00</p>
				</div>
				</li>
			</ul>
        
		
        <div class="gray"></div>
		<div class="showImg">
		    <img src="themes/default/images/dgdg1.jpg" width="363" height="406" class="bigImg">
			<div class="moreInfo">
			    <h3>生日蛋糕配送 蛋糕鲜花速递 巧克力水果奶油蛋糕双层</h3>
				<p class="col">选择颜色</p>
				<div class="dg_col">
				    <div class="dgtype">
				    <!--
					<dl>
					    <dt><img src="themes/default/images/dgdg1.jpg" width="24" height="24"></dt>
						<dd>款式一</dd>
					</dl>
					 <dl>
					    <dt><img src="themes/default/images/dgd1.jpg" width="24" height="24"></dt>
						<dd>款式二</dd>
					</dl>
					 <dl>
					    <dt><img src="themes/default/images/dgd2.jpg" width="24" height="24"></dt>
						<dd>款式三</dd>
					</dl>
					<dl>
					    <dt><img src="themes/default/images/dgd3.jpg" width="24" height="24"></dt>
						<dd>款式四</dd>
					</dl>-->
				    </div>
				<div style="clear:both;"></div></div>
				<p class="Info">礼物简介</p>
				<p class="xq">我为您搭建的，是光彩缤纷的世界，是畅想甜蜜的世界，是欢乐的爱心世界！蛋糕在哪里，你的爱心就散播在哪里 安逸静谧的晚年，一种休息，一种愉悦，一种至
	            高的享受!祝您福如东海长流水、寿比南山不老松! </p>
			    
				<p class="but">
				    <a href="" class="buy">立即购买</a>
					<a href="" class="join">加入购物车</a>
				</p>
            </div>
			
		    <img src="themes/default/images/prev.png" class="prev">
		    <img src="themes/default/images/next.png" class="next">
		</div>
		</div>
		

		
		<div class="dgConR">
		    <h3><i class="iconfont">&#xf0039;</i>精品推荐</h3>
			<dl>
			    <dt><a href=""><img src="themes/default/images/dg1.jpg" width="96" height="96"/></a></dt>
				<dd><a href="">元祖 鲜奶蛋糕 可指定日期送到 玫瑰圆舞曲 10寸</a></dd>
				<dd class="price">价格: ￥258.00</dd>
			</dl>
			<dl>
			    <dt><a href=""><img src="themes/default/images/dg2.jpg" width="96" height="96"/></a></dt>
				<dd><a href="">味多美 天然乳脂奶油 生日蛋糕 儿童蛋糕 阳光乐园</a></dd>
				<dd class="price">价格: ￥148.00</dd>
			</dl>
			<dl>
			    <dt><a href=""><img src="themes/default/images/dg3.jpg" width="96" height="96"/></a></dt>
				<dd><a href="">爱唯一鲜花速递 生日蛋糕8寸10寸12寸14寸</a></dd>
				<dd class="price">价格: ￥149.00</dd>
			</dl>
			<dl>
			    <dt><a href=""><img src="themes/default/images/dg4.jpg" width="96" height="96"/></a></dt>
				<dd><a href="">元祖 鲜奶蛋糕 可指定日期送到 我的歌声里 8寸</a></dd>
				<dd class="price">价格: ￥188.00</dd>
			</dl>
			<dl>
			    <dt><a href=""><img src="themes/default/images/dg5.jpg" width="96" height="96"/></a></dt>
				<dd><a href="">鲜花蛋糕预定水果奶油蛋糕双层生日蛋糕预定</a></dd>
				<dd class="price">价格: ￥158.00</dd>
			</dl>
		</div>
		
	</div>
</div>
	
      
 
 
 
<div class="Louti">
	 <div class="CommProduct" id="Louti1">
		
		<div class="CommNav L">
			<img src="themes/default/images/f1.jpg" />
			<img src="themes/default/images/f1_pic.jpg" class="adv" />
			<P class="ti">如何选择生日蛋糕</p>
			<ul>
				<li>不同造型蛋糕寓意</li>
				<li>蛋糕造型的函义？？</li>
				<li>送什么样的蛋糕给送女友</li>
				<li>不同造型蛋糕寓意</li>
			</ul>
		</div>
		
		
		
		<div class="CommFlash L">
			<div class="comFlash">

				<ul class="scroll">
					<li><img src="themes/default/images/dg_flash1.jpg" width="450" height="456"/></li>
					<li><img src="themes/default/images/dg_flash2.jpg" width="450" height="456"/></li>
					<li><img src="themes/default/images/dg_flash3.jpg" width="450" height="456"/></li>
					<li><img src="themes/default/images/dg_flash4.jpg" width="450" height="456"/></li>
				</ul>

				<img src="themes/default/images/prev.png" class="prev"/>
				<img src="themes/default/images/next.png" class="next"/>

				<ul class="But">
					<li class="hh"></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>	

			</div>
		</div>
		

		
		<div class="CommList R">
			<ul>
				<li><a href=""><img src="themes/default/images/1.jpg" height="224"/></a></li>
				<li><a href=""><img src="themes/default/images/8.jpg" height="224"/></a></li>
				<li><a href=""><img src="themes/default/images/3.jpg" height="224"/></a></li>
				<li><a href=""><img src="themes/default/images/4.jpg"/></a></li>
				<li><a href=""><img src="themes/default/images/5.jpg"/></a></li>
				<li><a href=""><img src="themes/default/images/6.jpg"/></a></li>
			</ul>
		</div>
		
	</div>
</div>



<div class="Louti">
	<div class="CommProduct" id="Louti2">
		<div class="CommNav L">
			<img src="themes/default/images/f2.jpg" />
			<img src="themes/default/images/f2_pic.jpg" class="adv" />
			<P class="ti">如何选择节日礼物</p>
			<ul>
				<li>礼物对女朋友的重要性</li>
				<li>不同礼物的含义</li>
				<li>送什么样的礼物给送女友</li>
				<li>礼物选择的方法</li>
			</ul>
		</div>
		<div class="CommList L">
			<ul>
				<li><a href=""><img src="themes/default/images/9.jpg" height="224"/></a></li>
				<li><a href=""><img src="themes/default/images/10.jpg" height="224"/></a></li>
				<li><a href=""><img src="themes/default/images/15.jpg" height="224"/></a></li>
				<li><a href=""><img src="themes/default/images/12.jpg"/></a></li>
				<li><a href=""><img src="themes/default/images/13.jpg"/></a></li>
				<li><a href=""><img src="themes/default/images/14.jpg"/></a></li>
			</ul>
		</div>
		<div class="CommFlash R">
			<div class="comFlash">

				<ul class="scroll">
					<li><img src="themes/default/images/dg_flash1.jpg" width="450" height="456"/></li>
					<li><img src="themes/default/images/dg_flash2.jpg" width="450" height="456"/></li>
					<li><img src="themes/default/images/dg_flash3.jpg" width="450" height="456"/></li>
					<li><img src="themes/default/images/dg_flash4.jpg" width="450" height="456"/></li>
				</ul>

				<img src="themes/default/images/prev.png" class="prev"/>
				<img src="themes/default/images/next.png" class="next"/>

				<ul class="But">
					<li class="hover"></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>	

			</div>
		</div>
	</div>
</div>

  

<div class="Louti">
	<div class="CommProduct" id="Louti3">
		
		<div class="CommNav L">
			<img src="themes/default/images/f3.jpg" />
			<img src="themes/default/images/f3_pic.jpg" class="adv" />
			<P class="ti">个性定制的优势</p>
			<ul>
				<li>体现个体的独特性</li>
				<li>在人群中突显出个体的存在</li>
				<li>更帅 更酷 更有面子</li>
				<li>如何突显出优势？？</li>
			</ul>
		</div>
		
		
		
		<div class="CommFlash L">
			<div class="comFlash">

				<ul class="scroll">
					<li><img src="themes/default/images/dg_flash1.jpg" width="450" height="456"/></li>
					<li><img src="themes/default/images/dg_flash2.jpg" width="450" height="456"/></li>
					<li><img src="themes/default/images/dg_flash3.jpg" width="450" height="456"/></li>
					<li><img src="themes/default/images/dg_flash4.jpg" width="450" height="456"/></li>
				</ul>

				<img src="themes/default/images/prev.png" class="prev"/>
				<img src="themes/default/images/next.png" class="next"/>

				<ul class="But">
					<li class="hh"></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>	

			</div>
		</div>
		

		
		<div class="CommList R">
			<ul>
				<li><a href=""><img src="themes/default/images/16.jpg" height="224"/></a></li>
				<li><a href=""><img src="themes/default/images/17.jpg" height="224"/></a></li>
				<li><a href=""><img src="themes/default/images/5.jpg" height="224"/></a></li>
				<li><a href=""><img src="themes/default/images/4.jpg"/></a></li>
				<li><a href=""><img src="themes/default/images/1.jpg"/></a></li>
				<li><a href=""><img src="themes/default/images/3.jpg"/></a></li>
			</ul>
		</div>
		

	</div>
</div>



<div class="Louti">
	<div class="CommProduct Louti" id="Louti4">
		<div class="CommNav L">
			<img src="themes/default/images/f4.jpg" />
			<img src="themes/default/images/f4_pic.jpg" class="adv" />
			<P class="ti">职场送礼送什么好</p>
			<ul>
				<li>商务礼物对上司的重要性</li>
				<li>升官发财打法</li>
				<li>想升官吗？进来看看</li>
				<li>官场竞争必备礼物</li>
			</ul>
		</div>
		<div class="CommList L">
			<ul>
				<li><a href=""><img src="themes/default/images/20.jpg" height="224"/></a></li>
				<li><a href=""><img src="themes/default/images/21.jpg" height="224"/></a></li>
				<li><a href=""><img src="themes/default/images/22.jpg" height="224"/></a></li>
				<li><a href=""><img src="themes/default/images/23.jpg"/></a></li>
				<li><a href=""><img src="themes/default/images/16.jpg"/></a></li>
				<li><a href=""><img src="themes/default/images/12.jpg"/></a></li>
			</ul>
		</div>
		<div class="CommFlash R">
			<div class="comFlash">

				<ul class="scroll">
					<li><img src="themes/default/images/dg_flash1.jpg" width="450" height="456"/></li>
					<li><img src="themes/default/images/dg_flash2.jpg" width="450" height="456"/></li>
					<li><img src="themes/default/images/dg_flash3.jpg" width="450" height="456"/></li>
					<li><img src="themes/default/images/dg_flash4.jpg" width="450" height="456"/></li>
				</ul>

				<img src="themes/default/images/prev.png" class="prev"/>
				<img src="themes/default/images/next.png" class="next"/>

				<ul class="But">
					<li class="hover"></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>	

			</div>
		</div>
	</div>
</div>

  
  <div class="bjb"></div>
  </div>
  


<div id="LoutiNav">
    <ul>
		<li>1F <span>新品</span></li>
		<li>2F <span>小屋</span></li>
		<li>3F <span>抢购</span></li>
		<li>4F <span>鲜花</span></li>
		<li>5F <span>蛋糕</span></li>
		<li>6F <span>生日</span></li>
		<li>7F <span>节日</span></li>
		<li>8F <span>个性</span></li>
		<li>9F <span>商务</span></li>
		<li class="last">Top</li>
	</ul>
</div>


 <?php echo $this->fetch('library/page_footer.lbi'); ?>
  
  </body>
 <script type="text/javascript" src="themes/default/js/jquery.js"></script>
 <script type="text/javascript" src="themes/default/js/index.js"></script>

</html>



