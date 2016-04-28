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
  
  <?php echo $this->smarty_insert_scripts(array('files'=>'common.js,compare.js')); ?>

 </head>
 <body>
 
  <?php echo $this->fetch('library/page_header.lbi'); ?>



<div id="webIntro">
    <div id="webIntro">
	    <div class="webIntroCon">
		    <div class="hotIntro">
			    <img src="themes/default/images/tj.jpg" class="hotImg"/>
				<div class="hotList">
				<?php echo $this->fetch('library/recommend_best.lbi'); ?>
				    
				</div>
			</div>
		    <div class="newIntro">
			    <img src="themes/default/images/cx.jpg" class="newImg"/>
				<ul>
					<li><a href="">· 暑期狂欢游 美酒买一赠一</a></li>
					<li><a href="">· 大牌红酒1元秒</a></li>
					<li><a href="">· 酷爽7月 冰点价低至1折</a></li>
					<li><a href="">· 买酒送酒柜 比39元更低</a></li>
					<li><a href="">· 一起来嗨假期 party！！！</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>



<div id="WebLogo">
      <?php echo $this->fetch('library/ur_here.lbi'); ?>
</div>



  
   
 <div id="TypeSearch">
    <h3>礼物综合搜索</h3>
 
<?php if ($this->_var['brands']['1'] || $this->_var['price_grade']['1'] || $this->_var['filter_attr_list']): ?>
	
	 <?php if ($this->_var['brands']['1']): ?>
	<dl>
		<dt><?php echo $this->_var['lang']['brand']; ?>：</dt>
		<dd>
		 <?php $_from = $this->_var['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');if (count($_from)):
    foreach ($_from AS $this->_var['brand']):
?>
					<?php if ($this->_var['brand']['selected']): ?>
					<span style="background:#F53E6D;color:#fff;padding:7px 7px;"><?php echo $this->_var['brand']['brand_name']; ?></span>
					<?php else: ?>
					<a href="<?php echo $this->_var['brand']['url']; ?>"><?php echo $this->_var['brand']['brand_name']; ?></a>&nbsp;
					<?php endif; ?>
		 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		
		</dd>
		<div style="clear:both;"></div>
    </dl>
    <?php endif; ?>


   <?php if ($this->_var['price_grade']['1']): ?>
	<dl>
		<dt><?php echo $this->_var['lang']['price']; ?>：</dt>
		<dd>
			<?php $_from = $this->_var['price_grade']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'grade');if (count($_from)):
    foreach ($_from AS $this->_var['grade']):
?>
				<?php if ($this->_var['grade']['selected']): ?>
				<span style="background:#F53E6D;color:#fff;padding:7px 7px;"><?php echo $this->_var['grade']['price_range']; ?></span>
				<?php else: ?>
				<a href="<?php echo $this->_var['grade']['url']; ?>"><?php echo $this->_var['grade']['price_range']; ?></a>&nbsp;
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</dd>
		<div style="clear:both;"></div>
    </dl>
	<?php endif; ?>
	
	
	<?php $_from = $this->_var['filter_attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'filter_attr_0_54457500_1461852545');if (count($_from)):
    foreach ($_from AS $this->_var['filter_attr_0_54457500_1461852545']):
?>
	<dl>
		<dt><?php echo htmlspecialchars($this->_var['filter_attr_0_54457500_1461852545']['filter_attr_name']); ?> :</dt>
		<dd>
		    <?php $_from = $this->_var['filter_attr_0_54457500_1461852545']['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');if (count($_from)):
    foreach ($_from AS $this->_var['attr']):
?>
				<?php if ($this->_var['attr']['selected']): ?>
				<span style="background:#F53E6D;color:#fff;padding:7px 7px;"><?php echo $this->_var['attr']['attr_value']; ?></span>
				<?php else: ?>
				<a href="<?php echo $this->_var['attr']['url']; ?>"><?php echo $this->_var['attr']['attr_value']; ?></a>&nbsp;
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</dd>
		<div style="clear:both;"></div>
    </dl>
	 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
 
 <?php endif; ?>
 
</div>



  
  <?php echo $this->fetch('library/goods_list.lbi'); ?>
  <?php echo $this->fetch('library/pages.lbi'); ?>




<?php echo $this->fetch('library/page_footer.lbi'); ?>
 
 <?php echo $this->smarty_insert_scripts(array('files'=>'transport.js')); ?>
 
 
 <script type="text/javascript" src="themes/default/js/jquery.js"></script>
 <script type="text/javascript" src="themes/default/js/index.js"></script>

 </body>
 
</html>



