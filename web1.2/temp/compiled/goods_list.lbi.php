  

    <div id="productList">
    <div style="clear:both;"></div>
    <div class="ti">
  <form method="GET" class="sort" name="listform">
  <?php echo $this->_var['lang']['btn_display']; ?>：
  
  <div style="display:none;">
  <a href="javascript:;" onClick="javascript:display_mode('list')"><img src="themes/default/images/display_mode_list<?php if ($this->_var['pager']['display'] == 'list'): ?>_act<?php endif; ?>.gif" alt="<?php echo $this->_var['lang']['display']['list']; ?>"></a>
  <a href="javascript:;" onClick="javascript:display_mode('grid')"><img src="themes/default/images/display_mode_grid<?php if ($this->_var['pager']['display'] == 'grid'): ?>_act<?php endif; ?>.gif" alt="<?php echo $this->_var['lang']['display']['grid']; ?>"></a>
  <a href="javascript:;" onClick="javascript:display_mode('text')"><img src="themes/default/images/display_mode_text<?php if ($this->_var['pager']['display'] == 'text'): ?>_act<?php endif; ?>.gif" alt="<?php echo $this->_var['lang']['display']['text']; ?>"></a>&nbsp;&nbsp;
  </div>
  
  <a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=goods_id&order=<?php if ($this->_var['pager']['sort'] == 'goods_id' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list" class="a">上架时间</a>
  <a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=shop_price&order=<?php if ($this->_var['pager']['sort'] == 'shop_price' && $this->_var['pager']['order'] == 'ASC'): ?>DESC<?php else: ?>ASC<?php endif; ?>#goods_list" class="a a1">价格</a>
  <a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=last_update&order=<?php if ($this->_var['pager']['sort'] == 'last_update' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list" class="a">更新时间</a>

  <input type="hidden" name="category" value="<?php echo $this->_var['category']; ?>" />
  <input type="hidden" name="display" value="<?php echo $this->_var['pager']['display']; ?>" id="display" />
  <input type="hidden" name="brand" value="<?php echo $this->_var['brand_id']; ?>" />
  <input type="hidden" name="price_min" value="<?php echo $this->_var['price_min']; ?>" />
  <input type="hidden" name="price_max" value="<?php echo $this->_var['price_max']; ?>" />
  <input type="hidden" name="filter_attr" value="<?php echo $this->_var['filter_attr']; ?>" />
  <input type="hidden" name="page" value="<?php echo $this->_var['pager']['page']; ?>" />
  <input type="hidden" name="sort" value="<?php echo $this->_var['pager']['sort']; ?>" />
  <input type="hidden" name="order" value="<?php echo $this->_var['pager']['order']; ?>" />
  </form>
  </div>
	
	
	
	
	
	
	
	<?php if ($this->_var['category'] > 0): ?>
  <form name="compareForm" action="compare.php" method="post" onSubmit="return compareGoods(this);">
    <?php endif; ?>
    <?php if ($this->_var['pager']['display'] == 'list'): ?>
    <div class="goodsList">
    <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_58114000_1461852545');$this->_foreach['goods_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods_list']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_58114000_1461852545']):
        $this->_foreach['goods_list']['iteration']++;
?>
    <ul class="clearfix bgcolor"<?php if (($this->_foreach['goods_list']['iteration'] - 1) % 2 == 0): ?>id=""<?php else: ?>id="bgcolor"<?php endif; ?>>
    <li>
    <br>
    <a href="javascript:;" id="compareLink" onClick="Compare.add(<?php echo $this->_var['goods_0_58114000_1461852545']['goods_id']; ?>,'<?php echo htmlspecialchars($this->_var['goods_0_58114000_1461852545']['goods_name']); ?>','<?php echo $this->_var['goods_0_58114000_1461852545']['type']; ?>')" class="f6">比较</a>
    </li>
    <li class="thumb"><a href="<?php echo $this->_var['goods_0_58114000_1461852545']['url']; ?>"><img src="<?php echo $this->_var['goods_0_58114000_1461852545']['goods_thumb']; ?>" alt="<?php echo $this->_var['goods_0_58114000_1461852545']['goods_name']; ?>" /></a></li>
    
	
	
	<li class="goodsName">
    <a href="<?php echo $this->_var['goods_0_58114000_1461852545']['url']; ?>" class="f6">
        <?php if ($this->_var['goods_0_58114000_1461852545']['goods_style_name']): ?>
        <?php echo $this->_var['goods_0_58114000_1461852545']['goods_style_name']; ?><br />
        <?php else: ?>
        <?php echo $this->_var['goods_0_58114000_1461852545']['goods_name']; ?><br />
        <?php endif; ?>
      </a>
     <?php if ($this->_var['goods_0_58114000_1461852545']['goods_brief']): ?>
    <?php echo $this->_var['lang']['goods_brief']; ?><?php echo $this->_var['goods_0_58114000_1461852545']['goods_brief']; ?><br />
    <?php endif; ?>
    </li>
    <li>
    <?php if ($this->_var['show_marketprice']): ?>
    <?php echo $this->_var['lang']['market_price']; ?><font class="market"><?php echo $this->_var['goods_0_58114000_1461852545']['market_price']; ?></font><br />
    <?php endif; ?>
    <?php if ($this->_var['goods_0_58114000_1461852545']['promote_price'] != ""): ?>
    <?php echo $this->_var['lang']['promote_price']; ?><font class="shop"><?php echo $this->_var['goods_0_58114000_1461852545']['promote_price']; ?></font><br />
    <?php else: ?>
    <?php echo $this->_var['lang']['shop_price']; ?><font class="shop"><?php echo $this->_var['goods_0_58114000_1461852545']['shop_price']; ?></font><br />
    <?php endif; ?>
    </li>
    <li class="action">
    <a href="javascript:collect(<?php echo $this->_var['goods_0_58114000_1461852545']['goods_id']; ?>);" class="abg f6"><?php echo $this->_var['lang']['favourable_goods']; ?></a>
    <a href="javascript:addToCart(<?php echo $this->_var['goods_0_58114000_1461852545']['goods_id']; ?>)"><img src="themes/default/images/bnt_buy_1.gif"></a>
    </li>
    </ul>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>
   
   
   
   
    <?php elseif ($this->_var['pager']['display'] == 'grid'): ?>
	

	<ul>
	<?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_58200600_1461852545');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_58200600_1461852545']):
?>
    <?php if ($this->_var['goods_0_58200600_1461852545']['goods_id']): ?>
	    <li>
		     <a href="<?php echo $this->_var['goods_0_58200600_1461852545']['url']; ?>"><img src="<?php echo $this->_var['goods_0_58200600_1461852545']['goods_thumb']; ?>" alt="<?php echo $this->_var['goods_0_58200600_1461852545']['goods_name']; ?>" class="goodsimg" width="200" height="200"/></a>
		    <h3><a href="<?php echo $this->_var['goods_0_58200600_1461852545']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_58200600_1461852545']['name']); ?>"><?php echo $this->_var['goods_0_58200600_1461852545']['goods_name']; ?></a></h3>
            
			
			<p>
				 <?php if ($this->_var['show_marketprice']): ?>
				
				<?php endif; ?>
				<?php if ($this->_var['goods_0_58200600_1461852545']['promote_price'] != ""): ?>
				<span><?php echo $this->_var['goods_0_58200600_1461852545']['promote_price']; ?></span>
				<?php else: ?>
				<span><?php echo $this->_var['goods_0_58200600_1461852545']['shop_price']; ?></span><?php endif; ?><a href="javascript:addToCart(<?php echo $this->_var['goods_0_58200600_1461852545']['goods_id']; ?>)" >立即购买</a>
			</p>
			    
				
				<p>本产品营销量：<font>400</font></p>
		</li>
		 <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</ul>

	
	
	
	
	
	
	
	
	
	
	
	
	<?php elseif ($this->_var['pager']['display'] == 'text'): ?>
    <div class="goodsList">
    <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_58252000_1461852545');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_58252000_1461852545']):
?>
     <ul class="clearfix bgcolor"<?php if (($this->_foreach['goods_list']['iteration'] - 1) % 2 == 0): ?>id=""<?php else: ?>id="bgcolor"<?php endif; ?>>
    <li style="margin-right:15px;">
    <a href="javascript:;" id="compareLink" onClick="Compare.add(<?php echo $this->_var['goods_0_58252000_1461852545']['goods_id']; ?>,'<?php echo htmlspecialchars($this->_var['goods_0_58252000_1461852545']['goods_name']); ?>','<?php echo $this->_var['goods_0_58252000_1461852545']['type']; ?>')" class="f6"><?php echo $this->_var['lang']['compare']; ?></a>
    </li>
    <li class="goodsName">
    <a href="<?php echo $this->_var['goods_0_58252000_1461852545']['url']; ?>" class="f6 f5">
        <?php if ($this->_var['goods_0_58252000_1461852545']['goods_style_name']): ?>
        <?php echo $this->_var['goods_0_58252000_1461852545']['goods_style_name']; ?><br />
        <?php else: ?>
        <?php echo $this->_var['goods_0_58252000_1461852545']['goods_name']; ?><br />
        <?php endif; ?>
      </a>
     <?php if ($this->_var['goods_0_58252000_1461852545']['goods_brief']): ?>
    <?php echo $this->_var['lang']['goods_brief']; ?><?php echo $this->_var['goods_0_58252000_1461852545']['goods_brief']; ?><br />
    <?php endif; ?>
    </li>
    <li>
    <?php if ($this->_var['show_marketprice']): ?>
    <?php echo $this->_var['lang']['market_price']; ?><font class="market"><?php echo $this->_var['goods_0_58252000_1461852545']['market_price']; ?></font><br />
    <?php endif; ?>
    <?php if ($this->_var['goods_0_58252000_1461852545']['promote_price'] != ""): ?>
    <?php echo $this->_var['lang']['promote_price']; ?><font class="shop"><?php echo $this->_var['goods_0_58252000_1461852545']['promote_price']; ?></font><br />
    <?php else: ?>
    <?php echo $this->_var['lang']['shop_price']; ?><font class="shop"><?php echo $this->_var['goods_0_58252000_1461852545']['shop_price']; ?></font><br />
    <?php endif; ?>
    </li>
    <li class="action">
    <a href="javascript:collect(<?php echo $this->_var['goods_0_58252000_1461852545']['goods_id']; ?>);" class="abg f6"><?php echo $this->_var['lang']['favourable_goods']; ?></a>
    <a href="javascript:addToCart(<?php echo $this->_var['goods_0_58252000_1461852545']['goods_id']; ?>)"><img src="themes/default/images/bnt_buy_1.gif"></a>
    </li>
    </ul>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>
    <?php endif; ?>
  <?php if ($this->_var['category'] > 0): ?>
  </form>
  <?php endif; ?>

	<div style="clear:both;"></div>
</div>

	


 
<div class="blank5"></div>
<script type="Text/Javascript" language="JavaScript">
<!--

function selectPage(sel)
{
  sel.form.submit();
}

//-->
</script>
<script type="text/javascript">
window.onload = function()
{
  Compare.init();
  fixpng();
}
<?php $_from = $this->_var['lang']['compare_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
<?php if ($this->_var['key'] != 'button_compare'): ?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php else: ?>
var button_compare = '';
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>