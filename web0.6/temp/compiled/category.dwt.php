<!doctype html>
<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
 <!--声明当前页面编码集（中文编码<gbk,gb2312>,国际编码<utf-8>）-->
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 
 <title>产品推荐页面</title>
 <link href="themes/default/css/web.css" rel="stylesheet" type="text/css" />
  <link href="themes/default/style.css" rel="stylesheet" type="text/css" />
 <meta name="keywords" content="关键词,关键词">
 <meta name="description" content="">

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,global.js,compare.js')); ?>
</head>

<body>


<?php echo $this->fetch('library/page_header.lbi'); ?>



 
 <div id="ProIntro">
     <div class="ProIntroCon">
	    
	    <div class="HotIntro">
		<img src="themes/default/images/prointro.jpg" class="hotimg">
		<div class="hotList">
        <?php echo $this->fetch('library/recommend_best.lbi'); ?>
		   
		  
		</div>
		</div>
		 

		 
		<div class="newsIntro">
		<img src="themes/default/images/commintro.jpg" class="imgNew" />
		<ul>
		   <li><a href="">·&nbsp;&nbsp;国际起泡酒节 每天9.9元秒</a></li>
		   <li><a href="">·&nbsp;&nbsp;暑期狂欢游 美酒买一赠一</a></li>
		   <li><a href="">·&nbsp;&nbsp;大牌红酒1元秒</a></li>
		   <li><a href="">·&nbsp;&nbsp;酷爽7月 冰点价低至1折</a></li>
		   <li><a href="">·&nbsp;&nbsp;买酒送酒柜 比39元更低</a></li>
		</ul>
		</div>
		
	 </div>



  </div>
  


  
  <div class="proLogo">当前位置: 
	<a href="">首页</a> > <a href="">节日礼物</a> > 
  </div>
  


	  
  
 <?php if ($this->_var['brands']['1'] || $this->_var['price_grade']['1'] || $this->_var['filter_attr_list']): ?>
  <div id="searchType">
     <h3>礼物综合搜索</h3>
     
     <?php if ($this->_var['brands']['1']): ?>
	 <dl>
	   <dt><?php echo $this->_var['lang']['brand']; ?>：</dt>
	   <dd>
            <?php $_from = $this->_var['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');if (count($_from)):
    foreach ($_from AS $this->_var['brand']):
?>
                <?php if ($this->_var['brand']['selected']): ?>
                <span style="background:#f53e6d;color:#fff;padding:5px 8px;"><?php echo $this->_var['brand']['brand_name']; ?></span>
                <?php else: ?>
                <a href="<?php echo $this->_var['brand']['url']; ?>"><?php echo $this->_var['brand']['brand_name']; ?></a>&nbsp;
                <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

       </dd>
	   <div style="clear:both"></div>
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
				<span style="background:#f53e6d;color:#fff;padding:5px 8px;"><?php echo $this->_var['grade']['price_range']; ?></span>
				<?php else: ?>
				<a href="<?php echo $this->_var['grade']['url']; ?>"><?php echo $this->_var['grade']['price_range']; ?></a>&nbsp;
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </dd>
        <div style="clear:both"></div>
	 </dl>
     <?php endif; ?>
     
     <?php $_from = $this->_var['filter_attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'filter_attr_0_56296400_1460216492');if (count($_from)):
    foreach ($_from AS $this->_var['filter_attr_0_56296400_1460216492']):
?>
	 <dl>
		<dt><?php echo htmlspecialchars($this->_var['filter_attr_0_56296400_1460216492']['filter_attr_name']); ?> :</dt>
		<dd>			
        <?php $_from = $this->_var['filter_attr_0_56296400_1460216492']['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');if (count($_from)):
    foreach ($_from AS $this->_var['attr']):
?>
				<?php if ($this->_var['attr']['selected']): ?>
				<span style="background:#f53e6d;color:#fff;padding:5px 8px;"><?php echo $this->_var['attr']['attr_value']; ?></span>
				<?php else: ?>
				<a href="<?php echo $this->_var['attr']['url']; ?>"><?php echo $this->_var['attr']['attr_value']; ?></a>&nbsp;
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </dd>
		<div style="clear:both"></div>
	 </dl>
     <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </div>
 <?php endif; ?>
  
  
  
  <?php echo $this->fetch('library/goods_list.lbi'); ?>
  <?php echo $this->fetch('library/pages.lbi'); ?>








 <?php echo $this->fetch('library/page_footer.lbi'); ?> 
 
   
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.js,index.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'transport.js')); ?>
</body>

</html>