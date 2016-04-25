<?php echo $this->smarty_insert_scripts(array('files'=>'utils.js,transport.js')); ?>

<div id="sellInfo">
	<h3>收货人信息</h3>
	<table>
     <?php if ($this->_var['real_goods_count'] > 0): ?>
		<tr>
			<td class="ti"><?php echo $this->_var['lang']['country_province']; ?>:</td>
			<td colspan="3">
    <select name="country" id="selCountries_<?php echo $this->_var['sn']; ?>" onchange="region.changed(this, 1, 'selProvinces_<?php echo $this->_var['sn']; ?>')" style="border:1px solid #ccc;">
        <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['0']; ?></option>
        <?php $_from = $this->_var['country_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'country');if (count($_from)):
    foreach ($_from AS $this->_var['country']):
?>
        <option value="<?php echo $this->_var['country']['region_id']; ?>" <?php if ($this->_var['consignee']['country'] == $this->_var['country']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['country']['region_name']; ?></option>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </select>
      <select name="province" id="selProvinces_<?php echo $this->_var['sn']; ?>" onchange="region.changed(this, 2, 'selCities_<?php echo $this->_var['sn']; ?>')" style="border:1px solid #ccc;">
        <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['1']; ?></option>
        <?php $_from = $this->_var['province_list'][$this->_var['sn']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'province');if (count($_from)):
    foreach ($_from AS $this->_var['province']):
?>
        <option value="<?php echo $this->_var['province']['region_id']; ?>" <?php if ($this->_var['consignee']['province'] == $this->_var['province']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['province']['region_name']; ?></option>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </select>
      <select name="city" id="selCities_<?php echo $this->_var['sn']; ?>" onchange="region.changed(this, 3, 'selDistricts_<?php echo $this->_var['sn']; ?>')" style="border:1px solid #ccc;">
        <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['2']; ?></option>
        <?php $_from = $this->_var['city_list'][$this->_var['sn']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'city');if (count($_from)):
    foreach ($_from AS $this->_var['city']):
?>
        <option value="<?php echo $this->_var['city']['region_id']; ?>" <?php if ($this->_var['consignee']['city'] == $this->_var['city']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['city']['region_name']; ?></option>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </select>
      <select name="district" id="selDistricts_<?php echo $this->_var['sn']; ?>" <?php if (! $this->_var['district_list'][$this->_var['sn']]): ?>style="display:none"<?php endif; ?> style="border:1px solid #ccc;">
        <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['3']; ?></option>
        <?php $_from = $this->_var['district_list'][$this->_var['sn']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'district');if (count($_from)):
    foreach ($_from AS $this->_var['district']):
?>
        <option value="<?php echo $this->_var['district']['region_id']; ?>" <?php if ($this->_var['consignee']['district'] == $this->_var['district']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['district']['region_name']; ?></option>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </select>
    <?php echo $this->_var['lang']['require_field']; ?>
			</td>
		</tr>
      <?php endif; ?>
		<tr>
			<td class="ti">收货人姓名:</td>
			<td><input name="consignee" type="text" class="inputBg txt" id="consignee_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['consignee']); ?>" />
    <?php echo $this->_var['lang']['require_field']; ?> </td>
			<td class="ti">电子邮件地址：</td>
			<td><input name="email" type="text" class="inputBg txt"  id="email_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['email']); ?>" />
    <?php echo $this->_var['lang']['require_field']; ?></td>
		</tr>


      <?php if ($this->_var['real_goods_count'] > 0): ?>
      
      <tr>
        <td bgcolor="#ffffff"><?php echo $this->_var['lang']['detailed_address']; ?>:</td>
        <td bgcolor="#ffffff"><input name="address" type="text" class="inputBg txt"  id="address_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['address']); ?>" />
        <?php echo $this->_var['lang']['require_field']; ?></td>
        <td bgcolor="#ffffff"><?php echo $this->_var['lang']['postalcode']; ?>:</td>
        <td bgcolor="#ffffff"><input name="zipcode" type="text" class="inputBg txt"  id="zipcode_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['zipcode']); ?>" /></td>
      </tr>
      <?php endif; ?>



		<tr>
			<td class="ti">电话号码</td>
			<td><input name="tel" type="text" class="inputB txt"  id="tel_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['tel']); ?>" />
    <?php echo $this->_var['lang']['require_field']; ?></td>
			<td class="ti">手机：</td>
			<td><input name="mobile" type="text" class="inputBg txt"  id="mobile_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['mobile']); ?>" /></td>
		</tr>
        

          
          <?php if ($this->_var['real_goods_count'] > 0): ?>
          
		<tr>
			<td class="ti">标志建筑:</td>
			<td><input name="sign_building" type="text" class="inputBg txt"  id="sign_building_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['sign_building']); ?>" /></td>
			<td class="ti">最佳送货时间:</td>
			<td><input name="best_time" type="text"  class="inputBg txt" id="best_time_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['best_time']); ?>" /></td>
		</tr>
          <?php endif; ?>
          


		<tr>
			<td colspan='4' class="address"><input type="submit" name="Submit" class="bnt_blue_2" value="<?php echo $this->_var['lang']['shipping_address']; ?>" /></td>
            <?php if ($_SESSION['user_id'] > 0 && $this->_var['consignee']['address_id'] > 0): ?>
      
          <input name="button" type="button" onclick="if (confirm('<?php echo $this->_var['lang']['drop_consignee_confirm']; ?>')) location.href='flow.php?step=drop_consignee&amp;id=<?php echo $this->_var['consignee']['address_id']; ?>'"  class="bnt_blue" value="<?php echo $this->_var['lang']['drop']; ?>" />
          <?php endif; ?>
          <input type="hidden" name="step" value="consignee" />
          <input type="hidden" name="act" value="checkout" />
          <input name="address_id" type="hidden" value="<?php echo $this->_var['consignee']['address_id']; ?>" />
		</tr>
	</table>
</div>




