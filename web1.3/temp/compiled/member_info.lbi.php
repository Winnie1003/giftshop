<div id="append_parent"></div>

<?php if ($this->_var['user_info']): ?>
	
	<span><?php echo $this->_var['lang']['hello']; ?>，<?php echo $this->_var['user_info']['username']; ?>欢迎你回来！！
	<a href="user.php"><?php echo $this->_var['lang']['user_center']; ?></a>|
	<a href="user.php?act=logout"><?php echo $this->_var['lang']['user_logout']; ?></a>
	 </span>
	<?php else: ?> 
	        
	 <a href="user.php"><font class="iconfont">&#xe60b;</font>登录</a>
	<a href="user.php?act=register" ><font class="iconfont">&#xf0073;</font>注册</a> 
<?php endif; ?>	 
	 