<div id="TopMain">

 <div id="Top">
	<a href="#" class="adv" target="_blank"> 
		<img src="themes/default/images/adv.jpg" /> 
	</a>
	 <img src="themes/default/images/close.png"  class="close"/>
</div>




<div id="Header">
   <div class="Logo"><a href="#"><img src="themes/default/images/logo.png" height="50px"></a></div>
   <div class="Search">
      <form>
       <input type="text" class="sea">
       <input type="submit" class="but" value="">
      </form>
   </div>

   
	
	<div class="User">

   <!--用户登录+注册
		<a href=""><font class="iconfont">&#xe60b;</font>登录</a>
		<a href=""><font class="iconfont">&#xe60a;</font>注册</a>-->
		
		
		
		<span>您好，Winnie, 欢迎您回来！<a href="">用户中心</a>|<a href="">退出</a> </span>



		<a href=""><font class="iconfont">&#xe646;</font>加入购物车</a>

	</div>
	
</div>

</div>


<div id="Nav">
    <ul>
        <li class="first"><font class="iconfont">&#xe627;</font>全部商品分类
       
        </li>
        <li><a href="index.php"<?php if ($this->_var['navigator_list']['config']['index'] == 1): ?> class="cur"<?php endif; ?>><?php echo $this->_var['lang']['home']; ?></a></li>
  		<?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
        <li class="Fnav"><a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?> <?php if ($this->_var['nav']['active'] == 1): ?> class="cur"<?php endif; ?>>									<?php echo $this->_var['nav']['name']; ?></a></li>
 		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <li class="last"></li>
    </ul>
</div>
