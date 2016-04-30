   
    <ul style="display:block;">
        <?php $_from = $this->_var['index_best_goods_19']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>   
				    <li>
					    <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" class="goodsimg" border="0" width="200" height="200" /></a> 
					    <p><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo htmlspecialchars($this->_var['goods']['short_name']); ?></a>
                           <?php if ($this->_var['goods']['promote_price'] != ""): ?>    
    					   <span><?php echo $this->_var['goods']['promote_price']; ?></span>        <?php else: ?>    
              			   <span><?php echo $this->_var['goods']['shop_price']; ?></span>    
     					   <?php endif; ?>     
                        </p>
					</li>
       <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
	</ul>