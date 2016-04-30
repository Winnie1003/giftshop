
<ul style="display:block;">
	<?php $_from = $this->_var['index_best_goods_24']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_61572200_1461929073');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_61572200_1461929073']):
?>
		<li>
		   <a href="<?php echo $this->_var['goods_0_61572200_1461929073']['url']; ?>"><img src="<?php echo $this->_var['goods_0_61572200_1461929073']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_61572200_1461929073']['name']); ?>" class="goodsimg" border="0" width="200" height="200" />
			<p><a href="<?php echo $this->_var['goods_0_61572200_1461929073']['url']; ?>" style="color:#333" title="<?php echo htmlspecialchars($this->_var['goods_0_61572200_1461929073']['name']); ?>"><?php echo htmlspecialchars($this->_var['goods_0_61572200_1461929073']['short_name']); ?></a>
				<font>
					<?php if ($this->_var['goods_0_61572200_1461929073']['promote_price'] != ""): ?>
	
					<span><?php echo $this->_var['goods_0_61572200_1461929073']['promote_price']; ?></span>
					 
					<?php else: ?>
					 
					<span><?php echo $this->_var['goods_0_61572200_1461929073']['shop_price']; ?></span>
					<?php endif; ?>
				</font>
			</p>
		</li>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</ul>
			
			