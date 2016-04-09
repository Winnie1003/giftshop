<?php if ($this->_var['best_goods']): ?>
<?php if ($this->_var['cat_rec_sign'] != 1): ?>

  <?php endif; ?>
  <?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
	<dl>
          <dt><a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" class="goodsimg" width="100" hieght="200"/></a></dt>
          <dd><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['short_style_name']; ?></a></dd>
          <dd class="money">特价：<font>
          <?php if ($this->_var['goods']['promote_price'] != ""): ?>
          <?php echo $this->_var['goods']['promote_price']; ?>
          <?php else: ?>
          <?php echo $this->_var['goods']['shop_price']; ?>
          <?php endif; ?>
          </font></dd>
          <dd class="buy"><a href="<?php echo $this->_var['goods']['url']; ?>">立即抢购</a></dd>
	</dl>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  

  
   <?php if ($this->_var['cat_rec_sign'] != 1): ?> 

  <?php endif; ?>
<?php endif; ?>
