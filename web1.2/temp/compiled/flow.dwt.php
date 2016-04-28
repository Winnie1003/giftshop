<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
 <link href="themes/default/style.css" rel="stylesheet" type="text/css" />
 <link href="themes/default/css/web.css" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,shopping_flow.js')); ?>

</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>



<div id="WebLogo">
      <?php echo $this->fetch('library/ur_here.lbi'); ?>
</div>



<div class="blank"></div>
<div class="block">
  <?php if ($this->_var['step'] == "cart"): ?>
  
  
  <?php echo $this->smarty_insert_scripts(array('files'=>'showdiv.js')); ?>
  <script type="text/javascript">
  <?php $_from = $this->_var['lang']['password_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
    var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </script>
  
  
<div id="dd_address">
    <ul>
	    <li>
		    <span class="btn btn_active">1</span>
			<span class="txt txt_active">提交订单</span>
			<span class="line line_active1"></span>
		</li>
		<li>
		    <span class="btn">2</span>
			<span class="txt">确认订单并支付</span>
			<span class="line line2"></span>
		</li>
		<li class="last">
		    <span class="btn">3</span>
			<span class="txt">已完成</span>
		</li>
		
	</ul>
</div>


  


<div id="dd_list">
    <form id="formCart" name="formCart" method="post" action="flow.php">
    
	<ul class="ti">
	    <li class="first"><?php echo $this->_var['lang']['goods_name']; ?></li>
	    <?php if ($this->_var['show_goods_attribute'] == 1): ?>
		<li><?php echo $this->_var['lang']['goods_attr']; ?></li>
		<?php endif; ?>
		<?php if ($this->_var['show_marketprice']): ?>
		<li><?php echo $this->_var['lang']['market_prices']; ?></li>
		<?php endif; ?>
		<li><?php echo $this->_var['lang']['shop_prices']; ?></li>
		<li><?php echo $this->_var['lang']['number']; ?></li>
		<li><?php echo $this->_var['lang']['subtotal']; ?></li>
		<li><?php echo $this->_var['lang']['handle']; ?></li>
	</ul>
    

    
	
	<?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
    <ul class="List">
	    <li class="first" style="padding-top:30px;">
		   <tr>
              <td bgcolor="#ffffff" align="center">
                <?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] != 'package_buy'): ?>
                  <?php if ($this->_var['show_goods_thumb'] == 1): ?>
                    <a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank" class="f6" style="color:#000;"><?php echo $this->_var['goods']['goods_name']; ?></a>
                  <?php elseif ($this->_var['show_goods_thumb'] == 2): ?>
                    <a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" border="0" title="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" width="100" height="100" /></a>
                  <?php else: ?>
                    <a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" border="0" title="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" width="100" height="100" /></a><br />
                    <a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank" class="f6" style="color:#000;"><?php echo $this->_var['goods']['goods_name']; ?></a>
                  <?php endif; ?>
                  <?php if ($this->_var['goods']['parent_id'] > 0): ?>
                  <span style="color:#FF0000">（<?php echo $this->_var['lang']['accessories']; ?>）</span>
                  <?php endif; ?>
                  <?php if ($this->_var['goods']['is_gift'] > 0): ?>
                  <span style="color:#FF0000">（<?php echo $this->_var['lang']['largess']; ?>）</span>
                  <?php endif; ?>
                <?php elseif ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] == 'package_buy'): ?>
                  <a href="javascript:void(0)" onclick="setSuitShow(<?php echo $this->_var['goods']['goods_id']; ?>)" class="f6"><?php echo $this->_var['goods']['goods_name']; ?><span style="color:#FF0000;">（<?php echo $this->_var['lang']['remark_package']; ?>）</span></a>
                  <div id="suit_<?php echo $this->_var['goods']['goods_id']; ?>" style="display:none">
                      <?php $_from = $this->_var['goods']['package_goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'package_goods_list');if (count($_from)):
    foreach ($_from AS $this->_var['package_goods_list']):
?>
                        <a href="goods.php?id=<?php echo $this->_var['package_goods_list']['goods_id']; ?>" target="_blank" class="f6"><?php echo $this->_var['package_goods_list']['goods_name']; ?></a><br />
                      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                  </div>
                <?php else: ?>
                  <?php echo $this->_var['goods']['goods_name']; ?>
                <?php endif; ?>
              </td>
		</li>
		<?php if ($this->_var['show_goods_attribute'] == 1): ?>
	    <li><?php echo nl2br($this->_var['goods']['goods_attr']); ?></li>
	    <?php endif; ?>
        
		<?php if ($this->_var['show_marketprice']): ?>
              <li><?php echo $this->_var['goods']['market_price']; ?></li>
              <?php endif; ?>
              
			  <li><?php echo $this->_var['goods']['goods_price']; ?></li>
              <li><?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['is_gift'] == 0 && $this->_var['goods']['parent_id'] == 0): ?>
                <input type="text" name="goods_number[<?php echo $this->_var['goods']['rec_id']; ?>]" id="goods_number_<?php echo $this->_var['goods']['rec_id']; ?>" value="<?php echo $this->_var['goods']['goods_number']; ?>" size="4" class="inputBg" style="text-align:center " onkeydown="showdiv(this)"/>
                <?php else: ?>
                <?php echo $this->_var['goods']['goods_number']; ?>
                <?php endif; ?>
		</li>
		<li><?php echo $this->_var['goods']['subtotal']; ?></li>
		<li class="last"> <a href="javascript:if (confirm('<?php echo $this->_var['lang']['drop_goods_confirm']; ?>')) location.href='flow.php?step=drop_goods&amp;id=<?php echo $this->_var['goods']['rec_id']; ?>'; " class="f6"><?php echo $this->_var['lang']['drop']; ?></a>
                <?php if ($_SESSION['user_id'] > 0 && $this->_var['goods']['extension_code'] != 'package_buy'): ?>
                <a href="javascript:if (confirm('<?php echo $this->_var['lang']['drop_goods_confirm']; ?>')) location.href='flow.php?step=drop_to_collect&amp;id=<?php echo $this->_var['goods']['rec_id']; ?>'; " class="f6"><?php echo $this->_var['lang']['drop_to_collect']; ?></a>
                <?php endif; ?>    
		 </li>
		<div style="clear:both;"></div>
	</ul>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	
</div>



<div id="dd_end">
    <?php if ($this->_var['discount'] > 0): ?><?php echo $this->_var['your_discount']; ?><?php endif; ?>
    <?php echo $this->_var['shopping_money']; ?><?php if ($this->_var['show_marketprice']): ?>，<?php echo $this->_var['market_price_desc']; ?><?php endif; ?>
	<input type="button" value="<?php echo $this->_var['lang']['clear_cart']; ?>" class="bnt_blue_1" onclick="location.href='flow.php?step=clear'" />
    <input name="submit" type="submit" class="bnt_blue_1" value="<?php echo $this->_var['lang']['update_cart']; ?>" />
	<input type="hidden" name="step" value="update_cart" />
  
    <p>
	    <a href="./" class="go"><img src="themes/default/images/20130425D_03.png"></a>
	    <a href="flow.php?step=checkout" class="end"><img src="themes/default/images/20130425D_01.png"></a>
	</p>
	<div style="clear:both;"></div>
</div>
</form>


   <?php if ($_SESSION['user_id'] > 0): ?>
       <?php echo $this->smarty_insert_scripts(array('files'=>'transport.js')); ?>
       <script type="text/javascript" charset="utf-8">
        function collect_to_flow(goodsId)
        {
          var goods        = new Object();
          var spec_arr     = new Array();
          var fittings_arr = new Array();
          var number       = 1;
          goods.spec     = spec_arr;
          goods.goods_id = goodsId;
          goods.number   = number;
          goods.parent   = 0;
          Ajax.call('flow.php?step=add_to_cart', 'goods=' + goods.toJSONString(), collect_to_flow_response, 'POST', 'JSON');
        }
        function collect_to_flow_response(result)
        {
          if (result.error > 0)
          {
            // 如果需要缺货登记，跳转
            if (result.error == 2)
            {
              if (confirm(result.message))
              {
                location.href = 'user.php?act=add_booking&id=' + result.goods_id;
              }
            }
            else if (result.error == 6)
            {
              openSpeDiv(result.message, result.goods_id);
            }
            else
            {
              alert(result.message);
            }
          }
          else
          {
            location.href = 'flow.php';
          }
        }
      </script>
  </div>
    <div class="blank"></div>
  <?php endif; ?>

  <?php if ($this->_var['collection_goods']): ?>
  <div class="flowBox">
    <h6><span><?php echo $this->_var['lang']['label_collection']; ?></span></h6>
    <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
      <?php $_from = $this->_var['collection_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
          <tr>
            <td bgcolor="#ffffff"><a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" class="f6"><?php echo $this->_var['goods']['goods_name']; ?></a></td>
            <td bgcolor="#ffffff" align="center" width="100"><a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" class="f6"><?php echo $this->_var['lang']['collect_to_flow']; ?></a></td>
          </tr>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </table>
      <?php endif; ?>
  </div>
    <div class="blank5"></div>
  <?php endif; ?>

  <?php if ($this->_var['fittings_list']): ?>
  <?php echo $this->smarty_insert_scripts(array('files'=>'transport.js')); ?>
  <script type="text/javascript" charset="utf-8">
  function fittings_to_flow(goodsId,parentId)
  {
    var goods        = new Object();
    var spec_arr     = new Array();
    var number       = 1;
    goods.spec     = spec_arr;
    goods.goods_id = goodsId;
    goods.number   = number;
    goods.parent   = parentId;
    Ajax.call('flow.php?step=add_to_cart', 'goods=' + goods.toJSONString(), fittings_to_flow_response, 'POST', 'JSON');
  }
  function fittings_to_flow_response(result)
  {
    if (result.error > 0)
    {
      // 如果需要缺货登记，跳转
      if (result.error == 2)
      {
        if (confirm(result.message))
        {
          location.href = 'user.php?act=add_booking&id=' + result.goods_id;
        }
      }
      else if (result.error == 6)
      {
        openSpeDiv(result.message, result.goods_id, result.parent);
      }
      else
      {
        alert(result.message);
      }
    }
    else
    {
      location.href = 'flow.php';
    }
  }
  </script>
  <div class="block" >
    <div class="flowBox">
    <h6><span><?php echo $this->_var['lang']['goods_fittings']; ?></span></h6>
    <form action="flow.php" method="post">
        <div class="flowGoodsFittings clearfix">
          <?php $_from = $this->_var['fittings_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'fittings');if (count($_from)):
    foreach ($_from AS $this->_var['fittings']):
?>
            <ul class="clearfix">
              <li class="goodsimg">
                <a href="<?php echo $this->_var['fittings']['url']; ?>" target="_blank"><img src="<?php echo $this->_var['fittings']['goods_thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['fittings']['name']); ?>" class="B_blue" /></a>
              </li>
              <li>
                <a href="<?php echo $this->_var['fittings']['url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['fittings']['goods_name']); ?>" class="f6"><?php echo htmlspecialchars($this->_var['fittings']['short_name']); ?></a><br />
                <?php echo $this->_var['lang']['fittings_price']; ?><font class="f1"><?php echo $this->_var['fittings']['fittings_price']; ?></font><br />
                <?php echo $this->_var['lang']['parent_name']; ?><?php echo $this->_var['fittings']['parent_short_name']; ?><br />
                <a href="javascript:fittings_to_flow(<?php echo $this->_var['fittings']['goods_id']; ?>,<?php echo $this->_var['fittings']['parent_id']; ?>)"><img src="themes/default/images/bnt_buy.gif" alt="<?php echo $this->_var['lang']['collect_to_flow']; ?>" /></a>
              </li>
            </ul>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </div>
    </form>
    </div>
  </div>
  <div class="blank5"></div>
  <?php endif; ?>

  <?php if ($this->_var['favourable_list']): ?>
  <div class="block">
    <div class="flowBox">
    <h6><span><?php echo $this->_var['lang']['label_favourable']; ?></span></h6>
        <?php $_from = $this->_var['favourable_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'favourable');if (count($_from)):
    foreach ($_from AS $this->_var['favourable']):
?>
        <form action="flow.php" method="post">
          <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
            <tr>
              <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['favourable_name']; ?></td>
              <td bgcolor="#ffffff"><strong><?php echo $this->_var['favourable']['act_name']; ?></strong></td>
            </tr>
            <tr>
              <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['favourable_period']; ?></td>
              <td bgcolor="#ffffff"><?php echo $this->_var['favourable']['start_time']; ?> --- <?php echo $this->_var['favourable']['end_time']; ?></td>
            </tr>
            <tr>
              <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['favourable_range']; ?></td>
              <td bgcolor="#ffffff"><?php echo $this->_var['lang']['far_ext'][$this->_var['favourable']['act_range']]; ?><br />
              <?php echo $this->_var['favourable']['act_range_desc']; ?></td>
            </tr>
            <tr>
              <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['favourable_amount']; ?></td>
              <td bgcolor="#ffffff"><?php echo $this->_var['favourable']['formated_min_amount']; ?> --- <?php echo $this->_var['favourable']['formated_max_amount']; ?></td>
            </tr>
            <tr>
              <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['favourable_type']; ?></td>
              <td bgcolor="#ffffff">
                <span class="STYLE1"><?php echo $this->_var['favourable']['act_type_desc']; ?></span>
                <?php if ($this->_var['favourable']['act_type'] == 0): ?>
                <?php $_from = $this->_var['favourable']['gift']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'gift');if (count($_from)):
    foreach ($_from AS $this->_var['gift']):
?><br />
                  <input type="checkbox" value="<?php echo $this->_var['gift']['id']; ?>" name="gift[]" />
                  <a href="goods.php?id=<?php echo $this->_var['gift']['id']; ?>" target="_blank" class="f6"><?php echo $this->_var['gift']['name']; ?></a> [<?php echo $this->_var['gift']['formated_price']; ?>]
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              <?php endif; ?>          </td>
            </tr>
            <?php if ($this->_var['favourable']['available']): ?>
            <tr>
              <td align="right" bgcolor="#ffffff">&nbsp;</td>
              <td align="center" bgcolor="#ffffff"><input type="image" src="themes/default/images/bnt_cat.gif" alt="Add to cart"  border="0" /></td>
            </tr>
            <?php endif; ?>
          </table>
          <input type="hidden" name="act_id" value="<?php echo $this->_var['favourable']['act_id']; ?>" />
          <input type="hidden" name="step" value="add_favourable" />
        </form>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </div>
  </div>
  <?php endif; ?>


        <?php if ($this->_var['step'] == "consignee"): ?>
        
        <?php echo $this->smarty_insert_scripts(array('files'=>'region.js,utils.js')); ?>
        <script type="text/javascript">
          region.isAdmin = false;
          <?php $_from = $this->_var['lang']['flow_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
          var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

          
          onload = function() {
            if (!document.all)
            {
              document.forms['theForm'].reset();
            }
          }
          
        </script>
        
        <?php $_from = $this->_var['consignee_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('sn', 'consignee');if (count($_from)):
    foreach ($_from AS $this->_var['sn'] => $this->_var['consignee']):
?>
        <form action="flow.php" method="post" name="theForm" id="theForm" onsubmit="return checkConsignee(this)">
        <?php echo $this->fetch('library/consignee.lbi'); ?>
        </form>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php endif; ?>
		
	   
	  
		
		
		<?php if ($this->_var['step'] == "checkout"): ?>
        <form action="flow.php" method="post" name="theForm" id="theForm" onsubmit="return checkOrderForm(this)">
        <script type="text/javascript">
        var flow_no_payment = "<?php echo $this->_var['lang']['flow_no_payment']; ?>";
        var flow_no_shipping = "<?php echo $this->_var['lang']['flow_no_shipping']; ?>";
        </script>
       
	   
		<div id="dd_address">
			<ul>
				<li>
					<span class="btn btn_active">1</span>
					<span class="txt txt_active">提交订单</span>
					<span class="line line_active2"></span>
				</li>
				<li>
					<span class="btn btn_active">2</span>
					<span class="txt txt_active">确认订单并支付</span>
					<span class="line line2 line_active1"></span>
				</li>
				<li class="last">
					<span class="btn">3</span>
					<span class="txt">已完成</span>
				</li>
				
			</ul>
		</div>
		
			   
	    
<div id="goodsList" class="goodsList">
    <h3><?php if ($this->_var['allow_edit_cart']): ?><a href="flow.php" class="f6"><?php echo $this->_var['lang']['modify']; ?></a><?php endif; ?>商品列表</h3>
    <table>
		<tbody>	
			<tr>
				<th><?php echo $this->_var['lang']['goods_name']; ?></th>
				<th><?php echo $this->_var['lang']['goods_attr']; ?></th>
				<?php if ($this->_var['show_marketprice']): ?>
				<th><?php echo $this->_var['lang']['market_prices']; ?></th>
				<?php endif; ?>
				<th><?php if ($this->_var['gb_deposit']): ?><?php echo $this->_var['lang']['deposit']; ?><?php else: ?><?php echo $this->_var['lang']['shop_prices']; ?><?php endif; ?></th>
				<th><?php echo $this->_var['lang']['number']; ?></th>
				<th><?php echo $this->_var['lang']['subtotal']; ?></th>
			</tr>
			
			<?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
			<tr>
				<td class="ti">
				  <?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] == 'package_buy'): ?>
          <a href="javascript:void(0)" onclick="setSuitShow(<?php echo $this->_var['goods']['goods_id']; ?>)" class="f6"><?php echo $this->_var['goods']['goods_name']; ?><span style="color:#FF0000;">          （<?php echo $this->_var['lang']['remark_package']; ?>）</span></a>
          <div id="suit_<?php echo $this->_var['goods']['goods_id']; ?>" style="display:none">
              <?php $_from = $this->_var['goods']['package_goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'package_goods_list');if (count($_from)):
    foreach ($_from AS $this->_var['package_goods_list']):
?>
            <a href="goods.php?id=<?php echo $this->_var['package_goods_list']['goods_id']; ?>" target="_blank" class="f6"><?php echo $this->_var['package_goods_list']['goods_name']; ?></a><br />
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </div>
          <?php else: ?>
          <a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank" class="f6"><?php echo $this->_var['goods']['goods_name']; ?></a>
                <?php if ($this->_var['goods']['parent_id'] > 0): ?>
                <span style="color:#FF0000">（<?php echo $this->_var['lang']['accessories']; ?>）</span>
                <?php elseif ($this->_var['goods']['is_gift']): ?>
                <span style="color:#FF0000">（<?php echo $this->_var['lang']['largess']; ?>）</span>
                <?php endif; ?>
          <?php endif; ?>
          <?php if ($this->_var['goods']['is_shipping']): ?>(<span style="color:#FF0000"><?php echo $this->_var['lang']['free_goods']; ?></span>)<?php endif; ?>
				</td>
				
				<td><?php echo nl2br($this->_var['goods']['goods_attr']); ?></td>
				<?php if ($this->_var['show_marketprice']): ?>
				<td><?php echo $this->_var['goods']['formated_market_price']; ?></td>
				<?php endif; ?>
				<td><?php echo $this->_var['goods']['formated_goods_price']; ?></td>
				<td><?php echo $this->_var['goods']['goods_number']; ?></td>
				<td><?php echo $this->_var['goods']['formated_subtotal']; ?></td>
			</tr>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			
			<?php if (! $this->_var['gb_deposit']): ?>
			<tr>
				<td class="end" colspan="6"> 
				 <?php if ($this->_var['discount'] > 0): ?><?php echo $this->_var['your_discount']; ?><br /><?php endif; ?>
                <?php echo $this->_var['shopping_money']; ?><?php if ($this->_var['show_marketprice']): ?>，<?php echo $this->_var['market_price_desc']; ?><?php endif; ?>
			    </td>
			</tr>
			<?php endif; ?>
	    </tbody>
	</table>
</div>



<div id="UserInfo" class="goodsList">
    <h3><a href="flow.php?step=consignee">点击修改</a>收货人信息</h3>
    <table>
		<tbody>	
			<tr>
				<th style="background:#eee;"><?php echo $this->_var['lang']['consignee_name']; ?>:</th>
				<th style="font-weight:100;"><?php echo htmlspecialchars($this->_var['consignee']['consignee']); ?></th>
				<th style="background:#eee;"><?php echo $this->_var['lang']['email_address']; ?>:</th>
				<th style="font-weight:100;"><?php echo htmlspecialchars($this->_var['consignee']['email']); ?></th>
			</tr>
			 <?php if ($this->_var['total']['real_goods_count'] > 0): ?>
			<tr>
			    <td class="title"><?php echo $this->_var['lang']['detailed_address']; ?>:</td>
				<td><?php echo htmlspecialchars($this->_var['consignee']['address']); ?> </td>
				<td class="title"><?php echo $this->_var['lang']['postalcode']; ?>:</td>
				<td><?php echo htmlspecialchars($this->_var['consignee']['zipcode']); ?></td>
			</tr>
			<?php endif; ?>
			<tr>
			    <td class="title"><?php echo $this->_var['lang']['phone']; ?>:</td>
				<td><?php echo $this->_var['consignee']['tel']; ?></td>
				<td class="title"><?php echo $this->_var['lang']['backup_phone']; ?>:</td>
				<td><?php echo htmlspecialchars($this->_var['consignee']['mobile']); ?></td>
			</tr>
			<?php if ($this->_var['total']['real_goods_count'] > 0): ?>
			<tr>
			    <td class="title"><?php echo $this->_var['lang']['sign_building']; ?>:</td>
				<td><?php echo htmlspecialchars($this->_var['consignee']['sign_building']); ?> </td>
				<td class="title"><?php echo $this->_var['lang']['deliver_goods_time']; ?>:</td>
				<td><?php echo htmlspecialchars($this->_var['consignee']['best_time']); ?></td>
			</tr>
			<?php endif; ?>
	    </tbody>
	</table>
</div>

	   
	   
	   

<?php if ($this->_var['total']['real_goods_count'] != 0): ?>
<div id="payType" class="goodsList">
    <h3>配送方式</h3>
    <table>
		<tbody>	
			<tr>
			    <th>&nbsp;</th>
				<th><?php echo $this->_var['lang']['name']; ?></th>
				<th><?php echo $this->_var['lang']['describe']; ?></th>
				<th><?php echo $this->_var['lang']['fee']; ?></th>
				<th><?php echo $this->_var['lang']['free_money']; ?></th>
				<th><?php echo $this->_var['lang']['insure_fee']; ?></th>
			</tr>
		
		
			<?php $_from = $this->_var['shipping_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'shipping');if (count($_from)):
    foreach ($_from AS $this->_var['shipping']):
?>
			<tr>
				<td class="tr"><input name="shipping" type="radio" value="<?php echo $this->_var['shipping']['shipping_id']; ?>" <?php if ($this->_var['order']['shipping_id'] == $this->_var['shipping']['shipping_id']): ?>checked="true"<?php endif; ?> supportCod="<?php echo $this->_var['shipping']['support_cod']; ?>" insure="<?php echo $this->_var['shipping']['insure']; ?>" onclick="selectShipping(this)" />
				</td>
				<td><?php echo $this->_var['shipping']['shipping_name']; ?></td>
				<td class="ti"><?php echo $this->_var['shipping']['shipping_desc']; ?></td>
				<td><?php echo $this->_var['shipping']['format_shipping_fee']; ?></td>
				<td><?php echo $this->_var['shipping']['free_money']; ?></td>
				<td><?php if ($this->_var['shipping']['insure'] != 0): ?><?php echo $this->_var['shipping']['insure_formated']; ?><?php else: ?><?php echo $this->_var['lang']['not_support_insure']; ?><?php endif; ?></td>
			</tr>
			 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
			
			<tr>
              <td colspan="6" style="text-align:right;">  <label for="ECS_NEEDINSURE"><input type="checkbox" name="need_insure" id="ECS_NEEDINSURE"  onclick="selectInsure(this.checked)" value="1" <?php if ($this->_var['order']['need_insure']): ?>checked="true"<?php endif; ?> <?php if ($this->_var['insure_disabled']): ?>disabled="true"<?php endif; ?> />
                <?php echo $this->_var['lang']['need_insure']; ?> </label>
			  </td>
            </tr>
	    </tbody>	
	</table>
</div>
	   




<?php else: ?>
	<input name = "shipping" type="radio" value = "-1" checked="checked"  style="display:none"/>
	<?php endif; ?>
<?php if ($this->_var['is_exchange_goods'] != 1 || $this->_var['total']['real_goods_count'] != 0): ?>
<div id="payType" class="goodsList">
    <h3><?php echo $this->_var['lang']['payment_method']; ?></h3>
    <table>
		<tbody>	
			<tr>
				<th>&nbsp;</th>
				<th><?php echo $this->_var['lang']['name']; ?></th>
				<th><?php echo $this->_var['lang']['describe']; ?></th>
				<th><?php echo $this->_var['lang']['pay_fee']; ?></th>
			</tr>
			<?php $_from = $this->_var['payment_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'payment');if (count($_from)):
    foreach ($_from AS $this->_var['payment']):
?>
            
			<tr>
				<td class="tr">
				<input type="radio" name="payment" value="<?php echo $this->_var['payment']['pay_id']; ?>" <?php if ($this->_var['order']['pay_id'] == $this->_var['payment']['pay_id']): ?>checked<?php endif; ?> isCod="<?php echo $this->_var['payment']['is_cod']; ?>" onclick="selectPayment(this)" <?php if ($this->_var['cod_disabled'] && $this->_var['payment']['is_cod'] == "1"): ?>disabled="true"<?php endif; ?>/>
				</td>
				<td><?php echo $this->_var['payment']['pay_name']; ?></td>
				<td class="ti"><?php echo $this->_var['payment']['pay_desc']; ?></td>
				<td><?php echo $this->_var['payment']['format_pay_fee']; ?></td>
			</tr>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</tbody>
	</table>
</div>

    
	<?php else: ?>
        <input name = "payment" type="radio" value = "-1" checked="checked"  style="display:none"/>
    <?php endif; ?>
    <div class="blank" style="display:none;"></div>
          <?php if ($this->_var['pack_list']): ?>
          <div class="flowBox" style="display:none;">
          <h6><span><?php echo $this->_var['lang']['goods_package']; ?></span></h6>
          <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd" id="packTable">
            <tr>
              <th width="5%" scope="col" bgcolor="#ffffff">&nbsp;</th>
              <th width="35%" scope="col" bgcolor="#ffffff"><?php echo $this->_var['lang']['name']; ?></th>
              <th width="22%" scope="col" bgcolor="#ffffff"><?php echo $this->_var['lang']['price']; ?></th>
              <th width="22%" scope="col" bgcolor="#ffffff"><?php echo $this->_var['lang']['free_money']; ?></th>
              <th scope="col" bgcolor="#ffffff"><?php echo $this->_var['lang']['img']; ?></th>
            </tr>
            <tr>
              <td valign="top" bgcolor="#ffffff"><input type="radio" name="pack" value="0" <?php if ($this->_var['order']['pack_id'] == 0): ?>checked="true"<?php endif; ?> onclick="selectPack(this)" /></td>
              <td valign="top" bgcolor="#ffffff"><strong><?php echo $this->_var['lang']['no_pack']; ?></strong></td>
              <td valign="top" bgcolor="#ffffff">&nbsp;</td>
              <td valign="top" bgcolor="#ffffff">&nbsp;</td>
              <td valign="top" bgcolor="#ffffff">&nbsp;</td>
            </tr>
            <?php $_from = $this->_var['pack_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pack');if (count($_from)):
    foreach ($_from AS $this->_var['pack']):
?>
            <tr>
              <td valign="top" bgcolor="#ffffff"><input type="radio" name="pack" value="<?php echo $this->_var['pack']['pack_id']; ?>" <?php if ($this->_var['order']['pack_id'] == $this->_var['pack']['pack_id']): ?>checked="true"<?php endif; ?> onclick="selectPack(this)" />
              </td>
              <td valign="top" bgcolor="#ffffff"><strong><?php echo $this->_var['pack']['pack_name']; ?></strong></td>
              <td valign="top" bgcolor="#ffffff" align="right"><?php echo $this->_var['pack']['format_pack_fee']; ?></td>
              <td valign="top" bgcolor="#ffffff" align="right"><?php echo $this->_var['pack']['format_free_money']; ?></td>
              <td valign="top" bgcolor="#ffffff" align="center">
                  <?php if ($this->_var['pack']['pack_img']): ?>
                  <a href="data/packimg/<?php echo $this->_var['pack']['pack_img']; ?>" target="_blank" class="f6"><?php echo $this->_var['lang']['view']; ?></a>
                  <?php else: ?>
                  <?php echo $this->_var['lang']['no']; ?>
                  <?php endif; ?>
               </td>
            </tr>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </table>
       </div>
             <div class="blank"></div>
          <?php endif; ?>

          <?php if ($this->_var['card_list']): ?>
          <div class="flowBox" style="display:none;">
          <h6><span><?php echo $this->_var['lang']['goods_card']; ?></span></h6>
          <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd" id="cardTable">
            <tr>
              <th bgcolor="#ffffff" width="5%" scope="col">&nbsp;</th>
              <th bgcolor="#ffffff" width="35%" scope="col"><?php echo $this->_var['lang']['name']; ?></th>
              <th bgcolor="#ffffff" width="22%" scope="col"><?php echo $this->_var['lang']['price']; ?></th>
              <th bgcolor="#ffffff" width="22%" scope="col"><?php echo $this->_var['lang']['free_money']; ?></th>
              <th bgcolor="#ffffff" scope="col"><?php echo $this->_var['lang']['img']; ?></th>
            </tr>
            <tr>
              <td bgcolor="#ffffff" valign="top"><input type="radio" name="card" value="0" <?php if ($this->_var['order']['card_id'] == 0): ?>checked="true"<?php endif; ?> onclick="selectCard(this)" /></td>
              <td bgcolor="#ffffff" valign="top"><strong><?php echo $this->_var['lang']['no_card']; ?></strong></td>
              <td bgcolor="#ffffff" valign="top">&nbsp;</td>
              <td bgcolor="#ffffff" valign="top">&nbsp;</td>
              <td bgcolor="#ffffff" valign="top">&nbsp;</td>
            </tr>
            <?php $_from = $this->_var['card_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'card');if (count($_from)):
    foreach ($_from AS $this->_var['card']):
?>
            <tr>
              <td valign="top" bgcolor="#ffffff"><input type="radio" name="card" value="<?php echo $this->_var['card']['card_id']; ?>" <?php if ($this->_var['order']['card_id'] == $this->_var['card']['card_id']): ?>checked="true"<?php endif; ?> onclick="selectCard(this)"  />
              </td>
              <td valign="top" bgcolor="#ffffff"><strong><?php echo $this->_var['card']['card_name']; ?></strong></td>
              <td valign="top" align="right" bgcolor="#ffffff"><?php echo $this->_var['card']['format_card_fee']; ?></td>
              <td valign="top" align="right" bgcolor="#ffffff"><?php echo $this->_var['card']['format_free_money']; ?></td>
              <td valign="top" align="center" bgcolor="#ffffff">
                  <?php if ($this->_var['card']['card_img']): ?>
                  <a href="data/cardimg/<?php echo $this->_var['card']['card_img']; ?>" target="_blank" class="f6"><?php echo $this->_var['lang']['view']; ?></a>
                  <?php else: ?>
                  <?php echo $this->_var['lang']['no']; ?>
                  <?php endif; ?>
                </td>
            </tr>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <tr>
              <td bgcolor="#ffffff"></td>
              <td bgcolor="#ffffff" valign="top"><strong><?php echo $this->_var['lang']['bless_note']; ?>:</strong></td>
              <td bgcolor="#ffffff" colspan="3"><textarea name="card_message" cols="60" rows="3" style="width:auto; border:1px solid #ccc;"><?php echo htmlspecialchars($this->_var['order']['card_message']); ?></textarea></td>
            </tr>
          </table>
        </div>
                <div class="blank"></div>
        <?php endif; ?>

       
	   
	    
<div id="otherType" class="goodsList">
    <h3>其它信息</h3>
    <table>
		<tbody>	
		
		    <?php if ($this->_var['allow_use_surplus']): ?>
            <tr>
              <td class="title"><?php echo $this->_var['lang']['use_surplus']; ?>: </td>
              <td><input name="surplus" type="text" class="inputBg" id="ECS_SURPLUS" size="10" value="<?php echo empty($this->_var['order']['surplus']) ? '0' : $this->_var['order']['surplus']; ?>" onblur="changeSurplus(this.value)" <?php if ($this->_var['disable_surplus']): ?>disabled="disabled"<?php endif; ?> />
              <?php echo $this->_var['lang']['your_surplus']; ?><?php echo empty($this->_var['your_surplus']) ? '0' : $this->_var['your_surplus']; ?> <span id="ECS_SURPLUS_NOTICE" class="notice"></span>
			  </td>
            </tr>
            <?php endif; ?>
            
			<?php if ($this->_var['allow_use_integral']): ?>
            <tr>
              <td class="title"><?php echo $this->_var['lang']['use_integral']; ?></td>
              <td><input name="integral" type="text" class="input" id="ECS_INTEGRAL" onblur="changeIntegral(this.value)" value="<?php echo empty($this->_var['order']['integral']) ? '0' : $this->_var['order']['integral']; ?>" size="10" />
              <?php echo $this->_var['lang']['can_use_integral']; ?>:<?php echo empty($this->_var['your_integral']) ? '0' : $this->_var['your_integral']; ?> <?php echo $this->_var['points_name']; ?>，<?php echo $this->_var['lang']['noworder_can_integral']; ?><?php echo $this->_var['order_max_integral']; ?>  <?php echo $this->_var['points_name']; ?>. <span id="ECS_INTEGRAL_NOTICE" class="notice"></span>
			  </td>
            </tr>
            <?php endif; ?>
		
		
		    <?php if ($this->_var['allow_use_bonus']): ?>
            <tr>
              <td class="title"><?php echo $this->_var['lang']['use_bonus']; ?>:</td>
              <td>
                <?php echo $this->_var['lang']['select_bonus']; ?>
                <select name="bonus" onchange="changeBonus(this.value)" id="ECS_BONUS" style="margin-right:10px;width:100px; border:1px solid #ccc;">
                  <option value="0" <?php if ($this->_var['order']['bonus_id'] == 0): ?>selected<?php endif; ?>><?php echo $this->_var['lang']['please_select']; ?></option>
                  <?php $_from = $this->_var['bonus_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'bonus');if (count($_from)):
    foreach ($_from AS $this->_var['bonus']):
?>
                  <option value="<?php echo $this->_var['bonus']['bonus_id']; ?>" <?php if ($this->_var['order']['bonus_id'] == $this->_var['bonus']['bonus_id']): ?>selected<?php endif; ?>><?php echo $this->_var['bonus']['type_name']; ?>[<?php echo $this->_var['bonus']['bonus_money_formated']; ?>]</option>
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </select>

                <?php echo $this->_var['lang']['input_bonus_no']; ?>
                <input name="bonus_sn" type="text" class="inputBg" size="15" value="<?php echo $this->_var['order']['bonus_sn']; ?>" />
                <input name="validate_bonus" type="button" class="bnt_blue_1" value="<?php echo $this->_var['lang']['validate_bonus']; ?>" onclick="validateBonus(document.forms['theForm'].elements['bonus_sn'].value)" style="vertical-align:middle;" />
              </td>
            </tr>
           <?php endif; ?>
           
		
		
		   <?php if ($this->_var['inv_content_list']): ?>
            <tr>
              <td class="title"><?php echo $this->_var['lang']['invoice']; ?>:
                <input name="need_inv" type="checkbox"  class="input" id="ECS_NEEDINV" onclick="changeNeedInv()" value="1" <?php if ($this->_var['order']['need_inv']): ?>checked="true"<?php endif; ?> />
              </td>
              <td>
                <?php if ($this->_var['inv_type_list']): ?>
                <?php echo $this->_var['lang']['invoice_type']; ?>
                <select name="inv_type" id="ECS_INVTYPE" <?php if ($this->_var['order']['need_inv'] != 1): ?>disabled="true"<?php endif; ?> onchange="changeNeedInv()" style="border:1px solid #ccc;">
                <?php echo $this->html_options(array('options'=>$this->_var['inv_type_list'],'selected'=>$this->_var['order']['inv_type'])); ?></select>
                <?php endif; ?>
                <?php echo $this->_var['lang']['invoice_title']; ?>
                <input name="inv_payee" type="text"  class="input" id="ECS_INVPAYEE" size="20" <?php if (! $this->_var['order']['need_inv']): ?>disabled="true"<?php endif; ?> value="<?php echo $this->_var['order']['inv_payee']; ?>" onblur="changeNeedInv()" />
                <?php echo $this->_var['lang']['invoice_content']; ?>
              <select name="inv_content" id="ECS_INVCONTENT" <?php if ($this->_var['order']['need_inv'] != 1): ?>disabled="true"<?php endif; ?>  onchange="changeNeedInv()" style="border:1px solid #ccc;">

                <?php echo $this->html_options(array('values'=>$this->_var['inv_content_list'],'output'=>$this->_var['inv_content_list'],'selected'=>$this->_var['order']['inv_content'])); ?>

                </select></td>
            </tr>
            <?php endif; ?>
		    
			
			<tr>
              <td class="title"><strong><?php echo $this->_var['lang']['order_postscript']; ?>:</strong></td>
              <td><textarea name="postscript" cols="80" rows="3" id="postscript" class="area" style="border:1px solid #ccc;"><?php echo htmlspecialchars($this->_var['order']['postscript']); ?></textarea></td>
            </tr>
           
		    <?php if ($this->_var['how_oos_list']): ?>
            <tr>
              <td class="title"><strong><?php echo $this->_var['lang']['booking_process']; ?>:</strong></td>
              <td><?php $_from = $this->_var['how_oos_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('how_oos_id', 'how_oos_name');if (count($_from)):
    foreach ($_from AS $this->_var['how_oos_id'] => $this->_var['how_oos_name']):
?>
                <label>
                <input name="how_oos" type="radio" value="<?php echo $this->_var['how_oos_id']; ?>" <?php if ($this->_var['order']['how_oos'] == $this->_var['how_oos_id']): ?>checked<?php endif; ?> onclick="changeOOS(this)" />
                <?php echo $this->_var['how_oos_name']; ?></label>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              </td>
            </tr>
            <?php endif; ?>
		</tbody>
	</table>
</div>
   
	   



<div id="allMoney" class="goodsList"  style="padding-bottom:10px">
    <h3><?php echo $this->_var['lang']['fee_total']; ?></h3>
    <?php echo $this->fetch('library/order_total.lbi'); ?>
	 <input type="image" src="themes/default/images/bnt_subOrder.gif" style="float:right;" />
     <input type="hidden" name="step" value="done" />
	 <div style="clear:both;"></div>
</div>
	    

</form>
        <?php endif; ?>

        <?php if ($this->_var['step'] == "done"): ?>
		
		
		<div id="dd_address">
			<ul>
				<li>
					<span class="btn btn_active">1</span>
					<span class="txt txt_active">提交订单</span>
					<span class="line line_active2"></span>
				</li>
				<li>
					<span class="btn btn_active">2</span>
					<span class="txt txt_active">确认订单并支付</span>
					<span class="line line2 line_active2"></span>
				</li>
				<li class="last">
					<span class="btn btn_active">3</span>
					<span class="txt txt_active">已完成</span>
				</li>
				
			</ul>
		</div>
		
		
        
        <div class="flowBox" style="margin:30px auto 70px auto;">
         <h6 style="text-align:center; height:30px; line-height:30px;"><?php echo $this->_var['lang']['remember_order_number']; ?>: <font style="color:red"><?php echo $this->_var['order']['order_sn']; ?></font></h6>
          <table width="99%" align="center" border="0" cellpadding="15" cellspacing="0" bgcolor="#fff" style="border:1px solid #ddd; margin:20px auto;" >
            <tr>
              <td align="center" bgcolor="#FFFFFF">
              <?php if ($this->_var['order']['shipping_name']): ?><?php echo $this->_var['lang']['select_shipping']; ?>: <strong><?php echo $this->_var['order']['shipping_name']; ?></strong>，<?php endif; ?><?php echo $this->_var['lang']['select_payment']; ?>: <strong><?php echo $this->_var['order']['pay_name']; ?></strong>。<?php echo $this->_var['lang']['order_amount']; ?>: <strong><?php echo $this->_var['total']['amount_formated']; ?></strong>
              </td>
            </tr>
            <tr>
              <td align="center" bgcolor="#FFFFFF"><?php echo $this->_var['order']['pay_desc']; ?></td>
            </tr>
            <?php if ($this->_var['pay_online']): ?>
            
            <tr>
              <td align="center" bgcolor="#FFFFFF"><?php echo $this->_var['pay_online']; ?></td>
            </tr>
            <?php endif; ?>
          </table>
          <?php if ($this->_var['virtual_card']): ?>
          <div style="text-align:center;overflow:hidden;border:1px solid #E2C822;background:#FFF9D7;margin:10px;padding:10px 50px 30px;">
          <?php $_from = $this->_var['virtual_card']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'vgoods');if (count($_from)):
    foreach ($_from AS $this->_var['vgoods']):
?>
            <h3 style="color:#2359B1; font-size:12px;"><?php echo $this->_var['vgoods']['goods_name']; ?></h3>
            <?php $_from = $this->_var['vgoods']['info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'card');if (count($_from)):
    foreach ($_from AS $this->_var['card']):
?>
              <ul style="list-style:none;padding:0;margin:0;clear:both">
              <?php if ($this->_var['card']['card_sn']): ?>
              <li style="margin-right:50px;float:left;">
              <strong><?php echo $this->_var['lang']['card_sn']; ?>:</strong><span style="color:red;"><?php echo $this->_var['card']['card_sn']; ?></span>
              </li><?php endif; ?>
              <?php if ($this->_var['card']['card_password']): ?>
              <li style="margin-right:50px;float:left;">
              <strong><?php echo $this->_var['lang']['card_password']; ?>:</strong><span style="color:red;"><?php echo $this->_var['card']['card_password']; ?></span>
              </li><?php endif; ?>
              <?php if ($this->_var['card']['end_date']): ?>
              <li style="float:left;">
              <strong><?php echo $this->_var['lang']['end_date']; ?>:</strong><?php echo $this->_var['card']['end_date']; ?>
              </li><?php endif; ?>
              </ul>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </div>
          <?php endif; ?>
          <p style="text-align:center; margin-bottom:20px;"><?php echo $this->_var['order_submit_back']; ?></p>
        </div>
        <?php endif; ?>
        <?php if ($this->_var['step'] == "login"): ?>
        <?php echo $this->smarty_insert_scripts(array('files'=>'utils.js,user.js')); ?>
        <script type="text/javascript">
        <?php $_from = $this->_var['lang']['flow_login_register']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
          var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

        
        function checkLoginForm(frm) {
          if (Utils.isEmpty(frm.elements['username'].value)) {
            alert(username_not_null);
            return false;
          }

          if (Utils.isEmpty(frm.elements['password'].value)) {
            alert(password_not_null);
            return false;
          }

          return true;
        }

        function checkSignupForm(frm) {
          if (Utils.isEmpty(frm.elements['username'].value)) {
            alert(username_not_null);
            return false;
          }

          if (Utils.trim(frm.elements['username'].value).match(/^\s*$|^c:\\con\\con$|[%,\'\*\"\s\t\<\>\&\\]/))
          {
            alert(username_invalid);
            return false;
          }

          if (Utils.isEmpty(frm.elements['email'].value)) {
            alert(email_not_null);
            return false;
          }

          if (!Utils.isEmail(frm.elements['email'].value)) {
            alert(email_invalid);
            return false;
          }

          if (Utils.isEmpty(frm.elements['password'].value)) {
            alert(password_not_null);
            return false;
          }

          if (frm.elements['password'].value.length < 6) {
            alert(password_lt_six);
            return false;
          }

          if (frm.elements['password'].value != frm.elements['confirm_password'].value) {
            alert(password_not_same);
            return false;
          }
          return true;
        }
        
        </script>
        
		
		
		
		
		
		
		
<div id="LoginAndRegister">
    <div class="ti">
	    <ul>
		    <li class="hover">用户登录</li>
			<li>用户注册</li>
		</ul>
	</div>
	<div class="LogReg">
	    
		<div class="Login">
		    <form action="flow.php?step=login" method="post" name="loginForm" id="loginForm" onsubmit="return checkLoginForm(this)">
				<p>用户名：<input name="username" type="text" class="inputBg txt" id="username" /></p>
				<p class="mm">密码：<input name="password" class="inputBg txt" type="password" /></p>
				 
				 <?php if ($this->_var['enabled_login_captcha']): ?>
				<p class="nn"><span>验证码：</span>
				   <input type="text" size="8" name="captcha" class="inputBg txt" style="width:100px;" />
                   <img src="captcha.php?is_login=1&<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer; width:80px; height:25px; margin-left:7px;" onClick="this.src='captcha.php?is_login=1&'+Math.random()" />
				</p>
				 <?php endif; ?>
				
				<p class="bc"><input type="checkbox" value="1" name="remember" id="remember" />
				<label for="remember"><?php echo $this->_var['lang']['remember']; ?></label></p>
				<p class="dg">
				     <input type="submit" class="bnt_blue sub sub1" name="login" value="<?php echo $this->_var['lang']['forthwith_login']; ?>" />
                     <?php if ($this->_var['anonymous_buy'] == 1): ?>
                     <input type="button" class="bnt_blue_2 sub sub2" value="允许未登录购买" onclick="location.href='flow.php?step=consignee&amp;direct_shopping=1'" />
                     <?php endif; ?>
                     <input name="act" type="hidden" value="signin" />
				</p>
				<p>
				    <a href="user.php?act=qpassword_name">密保问题找回密码</a>
				    <a href="user.php?act=get_password">邮箱验证找回密码</a>
				</p>
			</form>
		</div>
		<div class="Register">
		    <form action="flow.php?step=login" method="post" name="formUser" id="registerForm" onsubmit="return checkSignupForm(this)">
		    <p>用户名：<input name="username" type="text" class="inputBg txt" id="username" onblur="is_registered(this.value);" />
                    <label id="username_notice" style="color:#FF0000"></label>&nbsp;&nbsp;
			</p>
			
			<p class="mm">邮箱：<input name="email" type="text" class="inputBg txt" id="email" onblur="checkEmail(this.value);" />
            <label id="email_notice" style="color:#FF0000"></label>&nbsp;&nbsp;
			</p>
			
			<p class="mm">密码：<input name="password" class="inputBg txt" type="password" id="password1" onblur="check_password(this.value);" onkeyup="checkIntensity(this.value)" />
            <label style="color:#FF0000" id="password_notice"></label>&nbsp;&nbsp;
			</p>
			
			<p class="end">确认密码：<input name="confirm_password" class="inputBg txt" type="password" id="confirm_password" onblur="check_conform_password(this.value);" />
            <label style="color:#FF0000" id="conform_password_notice"></label>&nbsp;&nbsp;
			</p>
			
			 <?php if ($this->_var['enabled_register_captcha']): ?>
                  <p style="margin-left:-4px;">验证码：
	                 <span>			  
					    <input type="text" size="8" name="captcha" class="inputBg txt" style="width:100px;"/>
						<img src="captcha.php?<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer; width:80px; height:25px; margin-left:7px;" onClick="this.src='captcha.php?'+Math.random()" /> 
				     </span>
				  </p>
             <?php endif; ?>
			    
		    <P class="eend"> 
			     <input type="submit" name="Submit" class="bnt_blue_1 but" value="<?php echo $this->_var['lang']['forthwith_register']; ?>" />
                 <input name="act" type="hidden" value="signup" />
			</p>
	    </form>
		
		<?php if ($this->_var['need_rechoose_gift']): ?>
             <?php echo $this->_var['lang']['gift_remainder']; ?>
        <?php endif; ?>
		
	</div>
		
   </div>
</div>

<?php endif; ?>		
		
		
<div class="blank5"></div>

<div class="block">
  <div class="box">
   <div class="helpTitBg clearfix">
    <?php echo $this->fetch('library/help.lbi'); ?>
   </div>
  </div>
</div>
<div class="blank"></div>


<?php if ($this->_var['img_links'] || $this->_var['txt_links']): ?>
<div id="bottomNav" class="box">
 <div class="box_1">
  <div class="links clearfix">
    <?php $_from = $this->_var['img_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
    <a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><img src="<?php echo $this->_var['link']['logo']; ?>" alt="<?php echo $this->_var['link']['name']; ?>" border="0" /></a>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php if ($this->_var['txt_links']): ?>
    <?php $_from = $this->_var['txt_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
    [<a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><?php echo $this->_var['link']['name']; ?></a>]
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php endif; ?>
  </div>
 </div>
</div>
<?php endif; ?>

<div class="blank"></div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>

<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'index.js')); ?>


</body>
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
<?php $_from = $this->_var['lang']['passport_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var username_exist = "<?php echo $this->_var['lang']['username_exist']; ?>";
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>
</html>
