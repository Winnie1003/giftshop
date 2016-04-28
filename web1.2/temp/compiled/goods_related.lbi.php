
<?php if ($this->_var['related_goods']): ?>
<div id="IntroProduct">
    <p class="ti"><?php echo $this->_var['lang']['releate_goods']; ?></p>
    <ul>
	    <?php $_from = $this->_var['related_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'releated_goods_data');if (count($_from)):
    foreach ($_from AS $this->_var['releated_goods_data']):
?>
	    <li>
		    <a href="<?php echo $this->_var['releated_goods_data']['url']; ?>"><img src="<?php echo $this->_var['releated_goods_data']['goods_thumb']; ?>" alt="<?php echo $this->_var['releated_goods_data']['goods_name']; ?>" class="B_blue" 
			width="220" height="220"/></a>
            <p> <a href="<?php echo $this->_var['releated_goods_data']['url']; ?>" title="<?php echo $this->_var['releated_goods_data']['goods_name']; ?>" style="color:#666;"><?php echo $this->_var['releated_goods_data']['short_name']; ?></a></p>
            <p class="money" style="color:#666";><?php if ($this->_var['releated_goods_data']['promote_price'] != 0): ?>
        <?php echo $this->_var['lang']['promote_price']; ?><font class="f1"><?php echo $this->_var['releated_goods_data']['formated_promote_price']; ?></font>
        <?php else: ?>
        <?php echo $this->_var['lang']['shop_price']; ?><font class="f1"><?php echo $this->_var['releated_goods_data']['shop_price']; ?></font>
        <?php endif; ?>
		    </p>
			</a>
		</li>
	    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</ul>
    <div style="clear:both;"></div>
</div>
<?php endif; ?>


