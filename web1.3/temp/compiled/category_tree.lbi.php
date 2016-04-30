<div class="Menu"> 
			  
				    <ol>
						<?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
				        <li>
						    <h3><a href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a></h3>
							<p><a href="">生日</a> <a href="">表白</a> <a href="">订婚</a> <a href="">结婚</a></p>
							<div class="moreNav">
							 <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
								<a href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a>
							 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
							</div>
							<div class="border_top"></div>
							<div class="border_bottom"></div>
							<div class="border_right"></div>
						</li>
					   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
					</ol>
</div>