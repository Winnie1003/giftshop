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
  <link href="themes/default/style.css" rel="stylesheet" type="text/css" />
  <link href="themes/default/css/web.css" rel="stylesheet" type="text/css" />
 
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
<script type="text/javascript">
function $id(element) {
  return document.getElementById(element);
}
//切屏--是按钮，_v是内容平台，_h是内容库
function reg(str){
  var bt=$id(str+"_b").getElementsByTagName("h2");
  for(var i=0;i<bt.length;i++){
    bt[i].subj=str;
    bt[i].pai=i;
    bt[i].style.cursor="pointer";
    bt[i].onclick=function(){
      $id(this.subj+"_v").innerHTML=$id(this.subj+"_h").getElementsByTagName("blockquote")[this.pai].innerHTML;
      for(var j=0;j<$id(this.subj+"_b").getElementsByTagName("h2").length;j++){
        var _bt=$id(this.subj+"_b").getElementsByTagName("h2")[j];
        var ison=j==this.pai;
        _bt.className=(ison?"":"h2bg");
      }
    }
  }
  $id(str+"_h").className="none";
  $id(str+"_v").innerHTML=$id(str+"_h").getElementsByTagName("blockquote")[0].innerHTML;
}

</script>
 </head>
 <body>


  
<?php echo $this->fetch('library/page_header.lbi'); ?>


<div id="WebLogo">
      <?php echo $this->fetch('library/ur_here.lbi'); ?>
</div>



<div id="webCon">
    <div class="web_productImg">
	    
		<div class="s_Img">
		
		 <?php if ($this->_var['pictures']): ?>
         <img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>"  width="450" height="450"/>
   
         <?php else: ?>
         <img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>"  width="450" height="450"/>
         <?php endif; ?>
		   
			<span class="fk"></span>
			<span class="shadow"></span>
		</div>
	    

        
		<div class="q_Img">
		   <?php echo $this->fetch('library/goods_gallery.lbi'); ?>
		</div>
		

		
		<div class="b_Img">
		     <?php if ($this->_var['pictures']): ?>
                 <img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>"/>
             
			 <?php else: ?>
                 <img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>"/>
             
			 <?php endif; ?>
		</div>
		
	</div> 
	
 
   
   <div class="web_productXq">
	    <form action="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
		<ul>
		    <li>
		    <h1><?php echo $this->_var['goods']['goods_style_name']; ?></h1> 
			</li>
			
			<?php if ($this->_var['promotion']): ?>
			<li>
	  <?php $_from = $this->_var['promotion']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
	  <?php echo $this->_var['lang']['activity']; ?>
	  <?php if ($this->_var['item']['type'] == "snatch"): ?>
	  <a href="snatch.php" title="<?php echo $this->_var['lang']['snatch']; ?>" style="font-weight:100; color:#006bcd; text-decoration:none;">[<?php echo $this->_var['lang']['snatch']; ?>]</a>
	  <?php elseif ($this->_var['item']['type'] == "group_buy"): ?>
	  <a href="group_buy.php" title="<?php echo $this->_var['lang']['group_buy']; ?>" style="font-weight:100; color:#006bcd; text-decoration:none;">[<?php echo $this->_var['lang']['group_buy']; ?>]</a>
	  <?php elseif ($this->_var['item']['type'] == "auction"): ?>
	  <a href="auction.php" title="<?php echo $this->_var['lang']['auction']; ?>" style="font-weight:100; color:#006bcd; text-decoration:none;">[<?php echo $this->_var['lang']['auction']; ?>]</a>
	  <?php elseif ($this->_var['item']['type'] == "favourable"): ?>
	  <a href="activity.php" title="<?php echo $this->_var['lang']['favourable']; ?>" style="font-weight:100; color:#006bcd; text-decoration:none;">[<?php echo $this->_var['lang']['favourable']; ?>]</a>
	  <?php endif; ?>
	  <a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo $this->_var['lang'][$this->_var['item']['type']]; ?> <?php echo $this->_var['item']['act_name']; ?><?php echo $this->_var['item']['time']; ?>" style="font-weight:100; color:#006bcd;"><?php echo $this->_var['item']['act_name']; ?></a><br />
	  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</li>
			<?php endif; ?>
			
			<li>
			    <?php if ($this->_var['cfg']['show_goodssn']): ?>
				<p><strong><?php echo $this->_var['lang']['goods_sn']; ?></strong><?php echo $this->_var['goods']['goods_sn']; ?></p>
				<?php endif; ?>
				
				<?php if ($this->_var['goods']['goods_number'] != "" && $this->_var['cfg']['show_goodsnumber']): ?>
				<?php if ($this->_var['goods']['goods_number'] == 0): ?>
				  <p><strong><?php echo $this->_var['lang']['goods_number']; ?></strong>
				  <font class="f2"><?php echo $this->_var['lang']['stock_up']; ?></font></p>
				<?php else: ?>
				  <p><strong><?php echo $this->_var['lang']['goods_number']; ?></strong>
				  <?php echo $this->_var['goods']['goods_number']; ?> <?php echo $this->_var['goods']['measure_unit']; ?></p>
				<?php endif; ?>
			    <?php endif; ?>
			</li>
			<li>
			    <?php if ($this->_var['goods']['goods_brand'] != "" && $this->_var['cfg']['show_brand']): ?>
				<p> 
				   <strong><?php echo $this->_var['lang']['goods_brand']; ?></strong><a href="<?php echo $this->_var['goods']['goods_brand_url']; ?>" style="color:#000;"><?php echo $this->_var['goods']['goods_brand']; ?></a>
				</p>
				<?php endif; ?>
				<?php if ($this->_var['cfg']['show_goodsweight']): ?>
				<p style="padding-left:48px;"><strong><?php echo $this->_var['lang']['goods_weight']; ?></strong><?php echo $this->_var['goods']['goods_weight']; ?></p>
				<?php endif; ?>
            </li>
			<li style="border-bottom:1px solid #ddd;">
			    <p>
				   <?php if ($this->_var['cfg']['show_marketprice']): ?>
				       <strong><?php echo $this->_var['lang']['market_price']; ?></strong><font class="market"><?php echo $this->_var['goods']['market_price']; ?></font>&nbsp;&nbsp;&nbsp;
				   <?php endif; ?>
					   
					   <strong><?php echo $this->_var['lang']['shop_price']; ?></strong><font class="shop" id="ECS_SHOPPRICE" style="font-size:20px; color:#FF3366;"><?php echo $this->_var['goods']['shop_price_formated']; ?></font>&nbsp;&nbsp;&nbsp;
				   <?php $_from = $this->_var['rank_prices']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'rank_price');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['rank_price']):
?>
				       <strong><?php echo $this->_var['rank_price']['rank_name']; ?>：</strong><font class="shop" id="ECS_RANKPRICE_<?php echo $this->_var['key']; ?>"><?php echo $this->_var['rank_price']['price']; ?></font>&nbsp;&nbsp;&nbsp;
				   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				</p>
			</li>
			
			
			<?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?>
			    <?php echo $this->smarty_insert_scripts(array('files'=>'lefttime.js')); ?>
		    <li class="padd loop" style="margin-bottom:5px; border-bottom: 1px solid #ddd; line-height: 38px;;">
			  <strong><?php echo $this->_var['lang']['promote_price']; ?></strong><font class="shop" style="font-size:20px; color:#FF3366;"><?php echo $this->_var['goods']['promote_price']; ?></font>&nbsp;
			  <strong><?php echo $this->_var['lang']['residual_time']; ?></strong>
			  <font class="f4" id="leftTime" style="font-size:20px; color:#FF3366;"><?php echo $this->_var['lang']['please_waiting']; ?></font>
			</li>
			<?php endif; ?>
			
			
			<?php if ($this->_var['volume_price_list']): ?>
			<li class="yh">
			    <h3>购买商品达到以下数量区间时可享受的优惠价格：</h3>
			    <p class="yh1"><span><?php echo $this->_var['lang']['number_to']; ?></span><span><?php echo $this->_var['lang']['preferences_price']; ?></span></p>
			    
				<div class="yh3">
			    <?php $_from = $this->_var['volume_price_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('price_key', 'price_list');if (count($_from)):
    foreach ($_from AS $this->_var['price_key'] => $this->_var['price_list']):
?>
				<p class="yh2"><span><font><?php echo $this->_var['price_list']['number']; ?></font></span><span><font><?php echo $this->_var['price_list']['format_price']; ?></font></span></p>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				</div>
				
				<i>
			    <strong><?php echo $this->_var['lang']['amount']; ?>：</strong><font id="ECS_GOODS_AMOUNT" class="shop" style="color:#FF3366; font-size:22px;"></font>
				</i>
			
			<div style="clear:both;"></div>
			</li>
			<?php endif; ?>
			
			<?php if ($this->_var['goods']['bonus_money']): ?>
			<li class="padd loop" style="margin-bottom:5px; border-bottom:1px dashed #ccc;">
			<strong><?php echo $this->_var['lang']['goods_bonus']; ?></strong><font class="shop"><?php echo $this->_var['goods']['bonus_money']; ?></font>
			</li>
			<?php endif; ?>
			
			<li>	
				<p>
				购买数量：<input name="number" type="text" class="num" id="number" value="1" onblur="changePrice()" style="border:1px solid #ccc; "/>
				</p>
				
				<?php if ($this->_var['goods']['give_integral'] > 0): ?>
				<p style="margin-left:146px;"><strong><?php echo $this->_var['lang']['goods_give_integral']; ?></strong><font class="f4"><?php echo $this->_var['goods']['give_integral']; ?> <?php echo $this->_var['points_name']; ?></font>
				</p>
				<?php endif; ?>
			</li>
			
			
			
				 
      <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');if (count($_from)):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
?>
      <li class="padd loop bor">
	  <p>
      <strong><?php echo $this->_var['spec']['name']; ?>:</strong><br />
        
                    <?php if ($this->_var['spec']['attr_type'] == 1): ?>
                      <?php if ($this->_var['cfg']['goodsattr_style'] == 1): ?>
                        <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                        <label for="spec_value_<?php echo $this->_var['value']['id']; ?>">
                        <input type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> onclick="changePrice()" />
                        <?php echo $this->_var['value']['label']; ?> [<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?> <?php echo $this->_var['value']['format_price']; ?>] </label><br />
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
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
      </p>
	  </li>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      
	  <li>
	  <p class="but">
			<a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)"><img src="themes/default/images/Webcar.png"/></a>
			<a href="javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>)"><img src="themes/default/images/Websc.png"/></a>
	  </p>	
	  </li>
	  </ul>
	   
	 </form>
    <div style="clear:both;"></div>
	</div> 
   <div style="clear:both;"></div>
</div>

	  


<?php echo $this->fetch('library/goods_related.lbi'); ?>





<div id="ProductInfo">
    <ul class="sel">
	    <li class="active">商品描述<span></span></li>
		<li>商品属性<span></span></li>
		<li>用户评论<span></span></li>
		<li>商品购买记录<span></span></li>
	    <div style="clear:both;"></div>
	</ul>
	
	<div class="productSelect">
	    <div style="display:block;" class="selcon">
		     <?php echo $this->_var['goods']['goods_desc']; ?>
		</div>
		
		<div class="selcon">
		   <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#dddddd">
		   <?php $_from = $this->_var['properties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'property_group');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['property_group']):
?>
			 <tr>
			   <th colspan="2" bgcolor="#FFFFFF"><?php echo htmlspecialchars($this->_var['key']); ?></th>
			 </tr> 
		   <?php $_from = $this->_var['property_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'property');if (count($_from)):
    foreach ($_from AS $this->_var['property']):
?>
			 <tr>
			   <td bgcolor="#FFFFFF" align="left" width="30%" class="f1">[<?php echo htmlspecialchars($this->_var['property']['name']); ?>]</td>
			   <td bgcolor="#FFFFFF" align="left" width="70%"><?php echo $this->_var['property']['value']; ?></td>
			 </tr>
		   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		   </table>
		</div>
		<div class="selcon">
		    <?php echo $this->fetch('library/comments.lbi'); ?>
		</div>
		<div class="selcon">
		    <?php echo $this->fetch('library/bought_note_guide.lbi'); ?>
		</div>
	</div>
</div>



<?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,utils.js')); ?>

<script type="text/javascript" src="themes/default/js/jquery.js"></script>
<script type="text/javascript" src="themes/default/js/index.js"></script>
<script type="text/javascript">
var goods_id = <?php echo $this->_var['goods_id']; ?>;
var goodsattr_style = <?php echo empty($this->_var['cfg']['goodsattr_style']) ? '1' : $this->_var['cfg']['goodsattr_style']; ?>;
var gmt_end_time = <?php echo empty($this->_var['promote_end_time']) ? '0' : $this->_var['promote_end_time']; ?>;
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var goodsId = <?php echo $this->_var['goods_id']; ?>;
var now_time = <?php echo $this->_var['now_time']; ?>;


onload = function(){
  changePrice();
  fixpng();
  try {onload_leftTime();}
  catch (e) {}
}

/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice()
{
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;

  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
}

/**
 * 接收返回的信息
 */
function changePriceResponse(res)
{
  if (res.err_msg.length > 0)
  {
    alert(res.err_msg);
  }
  else
  {
    document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;

    if (document.getElementById('ECS_GOODS_AMOUNT'))
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
  }
}

</script>

<?php echo $this->fetch('library/page_footer.lbi'); ?>
  
 
</body>
</html>




