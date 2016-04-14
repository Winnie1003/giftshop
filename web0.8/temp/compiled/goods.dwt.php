<!doctype html>
<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
 <!--声明当前页面编码集（中文编码<gbk,gb2312>,国际编码<utf-8>）-->
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 
 <title>产品推荐页面</title>
 <link href="themes/default/style.css" type="text/css" rel="stylesheet" />
 <link href="themes/default/css/web.css" type="text/css" rel="stylesheet" />

 <meta name="keywords" content="关键词,关键词">
 <meta name="description" content="">

</head>

<body>


<?php echo $this->fetch('library/page_header.lbi'); ?>


 <div id="Prodetail">
    
	<div class="det_ProImg">
	   <div class="proshow">

	      
	      <div class="showsmall">
          <?php if ($this->_var['pictures']): ?>
              <img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" width="450" height="450" />
             <?php else: ?>
             <img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" width="450" height="450" />
           <?php endif; ?>
           
		    <span class="move"></span>
		    <span class="shade"></span>
		  </div>
          

		  
		  <div class="but">
				<?php echo $this->fetch('library/goods_gallery.lbi'); ?>
		  </div>
		  

		  
		  <div class="showbig">
             <?php if ($this->_var['pictures']): ?>
             <img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" width="450" height="450" />
             <?php else: ?>
             <img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" width="450" height="450" />
           	 <?php endif; ?>
          </div>
		  


	   </div>


	</div>
	

    
	<div class="det_Proinfo">
      <form action="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
      
      <h1><?php echo $this->_var['goods']['goods_style_name']; ?> </h1>
        <p>
            <?php if ($this->_var['cfg']['show_goodssn']): ?>
            <p><?php echo $this->_var['lang']['goods_sn']; ?><?php echo $this->_var['goods']['goods_sn']; ?></p>
            <?php endif; ?>
            <?php if ($this->_var['goods']['goods_number'] != "" && $this->_var['cfg']['show_goodsnumber']): ?>
            <?php if ($this->_var['goods']['goods_number'] == 0): ?>
            <p><?php echo $this->_var['lang']['goods_number']; ?>
            <font color='red'><?php echo $this->_var['lang']['stock_up']; ?></font></p>
            <?php else: ?>
            <p><?php echo $this->_var['lang']['goods_number']; ?>
          <?php echo $this->_var['goods']['goods_number']; ?> <?php echo $this->_var['goods']['measure_unit']; ?></p>
          <?php endif; ?>
          <?php endif; ?>
        </p>
		<p>
           <?php if ($this->_var['goods']['goods_brand'] != "" && $this->_var['cfg']['show_brand']): ?>
           <?php echo $this->_var['lang']['goods_brand']; ?><a href="<?php echo $this->_var['goods']['goods_brand_url']; ?>" ><?php echo $this->_var['goods']['goods_brand']; ?></a>
           <?php endif; ?>        
        </p>
        <p>
           <?php if ($this->_var['cfg']['show_goodsweight']): ?>
           <?php echo $this->_var['lang']['goods_weight']; ?><?php echo $this->_var['goods']['goods_weight']; ?>
           <?php endif; ?> 
        </p>
		<p class="bor">
                <?php if ($this->_var['cfg']['show_marketprice']): ?>
               <?php echo $this->_var['lang']['market_price']; ?><font class="market" style="font-size:16px;"><?php echo $this->_var['goods']['market_price']; ?></font>
               <?php endif; ?>
               
               <?php echo $this->_var['lang']['shop_price']; ?><font class="shop" id="ECS_SHOPPRICE" style="font-size:20px;"><?php echo $this->_var['goods']['shop_price_formated']; ?></font>
               <?php $_from = $this->_var['rank_prices']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'rank_price');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['rank_price']):
?>
               <?php echo $this->_var['rank_price']['rank_name']; ?>：<font class="shop" id="ECS_RANKPRICE_<?php echo $this->_var['key']; ?>" style="font-size:16px;"><?php echo $this->_var['rank_price']['price']; ?></font>
               <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </p>
		<p class="bor">消费保障：&nbsp;&nbsp;<img src="themes/default/images/zp.png" align="absmiddle" />&nbsp;&nbsp;正品保障 
					&nbsp;&nbsp;<img src="themes/default/images/bz.png" align="absmiddle" />&nbsp;&nbsp;三十天退货  货到付款</p>
		<p><?php echo $this->_var['lang']['number']; ?> : <input name="number" type="text" id="number" value="1" size="6" onblur="changePrice()" style="border:1px solid #ccc; "/></p>
        
        <p><?php echo $this->_var['lang']['amount']; ?>：<font id="ECS_GOODS_AMOUNT" class="shop"></font></p>

        
            
          
          
          <p> 
          <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');if (count($_from)):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
?>
          <?php echo $this->_var['spec']['name']; ?>:
            
                        <?php if ($this->_var['spec']['attr_type'] == 1): ?>
                          <?php if ($this->_var['cfg']['goodsattr_style'] == 1): ?>
                          
                            <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                            <label for="spec_value_<?php echo $this->_var['value']['id']; ?>">
                            <input type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> onclick="changePrice()" />
                            <?php echo $this->_var['value']['label']; ?> [<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?> <?php echo $this->_var['value']['format_price']; ?>] </label>
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            <br/>
                            <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                            <?php else: ?>
                            <select name="spec_<?php echo $this->_var['spec_key']; ?>" onchange="changePrice()">
                              <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                              <option label="<?php echo $this->_var['value']['label']; ?>" value="<?php echo $this->_var['value']['id']; ?>"><?php echo $this->_var['value']['label']; ?> <?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?><?php if ($this->_var['value']['price'] != 0): ?><?php echo $this->_var['value']['format_price']; ?><?php endif; ?></option>
                              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </select>
                            <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                            
                          <?php endif; ?>
                        <?php else: ?>
                          <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                          <label for="spec_value_<?php echo $this->_var['value']['id']; ?>">
                          <input type="checkbox" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" onclick="changePrice()" />
                          <?php echo $this->_var['value']['label']; ?> [<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?> <?php echo $this->_var['value']['format_price']; ?>] </label><br />
                          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                          <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                        <?php endif; ?>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </p>
          
          
        
        
        
        
		<p class="but">
			<a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)"><img src="themes/default/images/Webcar.png" /></a>
			<a href="javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>)"><img src="themes/default/images/Websc.png" /></a>
		</p>
		</form>
	</div>
    
 </div>


 
<div id="IntroProduct">
	<p class="ti">推荐产品</p>
	<ul>
		<li>
			<a href="#"><img src="themes/default/images/cake2.jpg" width="220px" height="220" /></a>
			<p><a href="#">创意生日蛋糕</a></p>
			<P class="money"><font>￥19.9</font>  <span>389人购买</span></p>
		</li>  
		<li>
			<a href="#"><img src="themes/default/images/cake7.jpg" width="220px" height="220" /></a>
			<p><a href="#">创意生日蛋糕</a></p>
			<P class="money"><font>￥19.9</font>  <span>389人购买</span></p>
		</li>  
		<li>
			<a href="#"><img src="themes/default/images/cake9.jpg" width="220px" height="220" /></a>
			<p><a href="#">创意生日蛋糕</a></p>
			<P class="money"><font>￥19.9</font>  <span>389人购买</span></p>
		</li>  
		<li>
			<a href="#"><img src="themes/default/images/cake12.jpg" width="220px" height="220" /></a>
			<p><a href="#">创意生日蛋糕</a></p>
			<P class="money"><font>￥19.9</font>  <span>389人购买</span></p>
		</li>  
 
	</ul>
</div>




<div id="ProductInfo">
	<ul class="sel">
		<li class="active">商品描述<span></span></li>
		<li>商品属性 <span></span></li>
		<li>用户评论<span></span></li>
		<li>商品购买记录<span></span></li>
	</ul>

	<div id="ProductSelect">
		<div class="selCon" style="display:block;">商品描述</div>
		<div class="selCon">商品属性</div>
		<div class="selCon">用户评论</div>
		<div class="selCon">商品购买记录</div>
	</div>
	

</div>








 <?php echo $this->fetch('library/page_footer.lbi'); ?> 



  
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.js,index.js')); ?>
 
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>

</body>

</html>