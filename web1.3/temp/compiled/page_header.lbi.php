<?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,utils.js')); ?>
<div id="TopMain">
  
    <div id="Top">
	  <a href="http:www.baidu.com" class="adv" target="_blank">
	    <img src="themes/default/images/adv.jpg"/ >
	  </a>
      <img src="themes/default/images/close.png" class="close"/>
	</div>
  
  
    <div id="header">
      
	  
	  <div class="Logo"><img src="themes/default/images/logo.png" width="200px" height="50px"></div>
	  
	  
	  
	  <div class="Search">
	      <form>
		  
		    <input type="text" class="sea">
            <input type="submit" class="but" value=""/>
		
		  </form>
	  </div>
      

  
      <div class="User">
	  <?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,utils.js')); ?>
      <?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> 
   
	   <a href="flow.php"><font class="iconfont">&#xe646;</font>查看购物车</a>
	   
	  </div>
   </div>
  
  
  </div>
  
  
  <div id="Logo">
	  <ul>
	       <li class="first"><font class="iconfont">&#xe627;</font>全部商品分类
		   </li>
	       <li class="nav"><a href="index.php"<?php if ($this->_var['navigator_list']['config']['index'] == 1): ?> class="cur"<?php endif; ?>><?php echo $this->_var['lang']['home']; ?></a></li>
	        <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
		   <li class="nav">
           <a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?> <?php if ($this->_var['nav']['active'] == 1): ?> class="cur"<?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a></li>
		    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		   <li class="last"></li>
	  </ul>
  
  </div>
  