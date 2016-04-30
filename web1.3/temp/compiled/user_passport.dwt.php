<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" style="background:#FBE1D4">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,user.js,transport.js')); ?>

<body>




<?php if ($this->_var['action'] == 'login'): ?>
<div class="lefeng">
		
		<div class="bg">
			<img src="themes/default/images/lefeng_bg.jpg"/>
		</div>
		
		
		
		<div class="feng_Login">
			<ul class="ul1">
			   <form name="formLogin" action="user.php" method="post" onSubmit="return userLogin()">
				<li>
					<h1>登 录</h1>
					<a href="user.php?act=register">免费注册</a>
					<div style="clear:both;"></div>
				</li>
				
				<li>
					<p><?php echo $this->_var['lang']['label_username']; ?></p>
					<input type="text" name="username" class="txt" placeholder="用户名/邮箱/已验证手机"/>
				</li>
				<li style="padding-bottom:10px;">
					<p><?php echo $this->_var['lang']['label_password']; ?>
					
					</p>
					<input type="password" class="txt" name="password"/>
					
					<div style="clear:both;"></div>
				</li>
				
				<li style="padding-bottom:60px;">
				<?php if ($this->_var['enabled_captcha']): ?>
					<p><?php echo $this->_var['lang']['comment_captcha']; ?></p>
					<input type="text" class="inputBg txt" name="captcha" style="width:100px; margin-right:5px;"/>
					 <img src="captcha.php?is_login=1&<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer;" onClick="this.src='captcha.php?is_login=1&'+Math.random()" />
				<?php endif; ?>
					<p style="font-weight:100; color:#666; float:right; padding-top:10px;">
						<input type="checkbox" value="1" name="remember" id="remember" /><label for="remember"><?php echo $this->_var['lang']['remember']; ?></label>
					</p>
				</li>
				
				<li style="padding-bottom:15px;">
				<p><a href="javascript:;">
					<input type="hidden" name="act" value="act_login" />
					<input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
					<input type="submit" name="submit" value="登录" class="us_Submit" /></a></p>
				</li>
				
				<li style="padding-bottom:40px">
					<a href="user.php?act=qpassword_name" class="f3"><?php echo $this->_var['lang']['get_password_by_question']; ?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="user.php?act=get_password" class="f3"><?php echo $this->_var['lang']['get_password_by_mail']; ?></a>
				</li>
				 </form>
			</ul>
		</div>
		
	</div>	
<?php endif; ?>




<?php if ($this->_var['action'] == 'register'): ?>
<?php if ($this->_var['shop_reg_closed'] == 1): ?>
	目前已关闭注册，不允许再注册会员。
<?php else: ?>
    <?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>
<div id="lefeng_Reg">
		
		<div class="bg">
			<img src="themes/default/images/lefeng_bg.jpg"/>
		</div>
		
		
		
		<div class="feng_Login">
			<ul >
	            <li>
					<h1>注 册</h1>
					<span>已有商城账号？<a href="user.php?act=login">登录</a></span>
					<div style="clear:both;"></div>
				</li>
				<form action="user.php" method="post" name="formUser" onsubmit="return register();">
				<li>
					<p><?php echo $this->_var['lang']['label_username']; ?></p>
					<input name="username" type="text" id="username" onblur="is_registered(this.value);" class="inputBg txt"/>
					 <span id="username_notice" style="color:#FF0000"> *</span>
				</li>
				<li>
					<p><?php echo $this->_var['lang']['label_email']; ?></p>
					 <input name="email" type="text" id="email" onblur="checkEmail(this.value);"  class="inputBg txt"/>
            		 <span id="email_notice" style="color:#FF0000"> *</span>
				</li>
			    <li>
					<p><?php echo $this->_var['lang']['label_password']; ?></p>
					<input name="password" type="password" id="password1" onblur="check_password(this.value);" onkeyup="checkIntensity(this.value)" 		class="inputBg txt" />
            		<span style="color:#FF0000" id="password_notice"> *</span>
					<p>
						<span id="pwd_lower"><?php echo $this->_var['lang']['pwd_lower']; ?></span>
						<span id="pwd_middle"><?php echo $this->_var['lang']['pwd_middle']; ?></span>
						<span id="pwd_high"><?php echo $this->_var['lang']['pwd_high']; ?></span>
					</p>
				</li>
				<li>
					<p>确认密码</p>
					 <input name="confirm_password" type="password" id="conform_password" onblur="check_conform_password(this.value);"  class="txt inputBg"/>
            		 <span style="color:#FF0000" id="conform_password_notice"> *</span>
				</li>
				
				<li>
				  <?php $_from = $this->_var['extend_info_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'field');if (count($_from)):
    foreach ($_from AS $this->_var['field']):
?>
	<?php if ($this->_var['field']['id'] == 6): ?>
				<p><?php echo $this->_var['lang']['passwd_question']; ?></p>
				<p>
					<select name='sel_question'>
					<option value='0'><?php echo $this->_var['lang']['sel_question']; ?></option>
						<?php echo $this->html_options(array('options'=>$this->_var['passwd_questions'])); ?>
					</select>
				</p>
				<?php if ($this->_var['field']['is_need']): ?>id="passwd_quesetion"<?php endif; ?>><?php echo $this->_var['lang']['passwd_answer']; ?>
                  <input name="passwd_answer" type="text" size="25" class="inputBg" maxlengt='20'/><?php if ($this->_var['field']['is_need']): ?><span style="color:		#FF0000"> *</span><?php endif; ?>
         
	<?php else: ?>
         <?php if ($this->_var['field']['is_need']): ?>id="extend_field<?php echo $this->_var['field']['id']; ?>i"<?php endif; ?>><?php echo $this->_var['field']['reg_field_name']; ?>
        
          <input name="extend_field<?php echo $this->_var['field']['id']; ?>" type="text" size="25" class="inputBg" /><?php if ($this->_var['field']['is_need']): ?><span style="color:#FF0000"> *</span><?php endif; ?>
	<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			    </li>
				
				<li>
					  <?php if ($this->_var['enabled_captcha']): ?>
					  
					  <p><?php echo $this->_var['lang']['comment_captcha']; ?></p>
					  <input type="text" size="8" name="captcha" class="inputBg txt" style="width:100px;margin-right:5px;"/>
					  <img src="captcha.php?<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer;" onClick="this.src='captcha.php?'+Math.random()" /> 
					  <?php endif; ?>
				</li>
				<li>
					<p><input name="agreement" type="checkbox" value="1" checked="checked" /><?php echo $this->_var['lang']['agreement']; ?></p>
				</li>
				<li>
					<p>
						<input name="act" type="hidden" value="act_register" >
						<input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
						<input name="Submit" type="submit" value="同意协议并注册" class="us_Submit_reg">
					</p>
				</li>
				</form>
			</ul>
		</div>
		
	</div>	
<?php endif; ?>
<?php endif; ?>




    <?php if ($this->_var['action'] == 'get_password'): ?>
    <?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>
	<?php echo $this->fetch('library/page_header.lbi'); ?>
    <script type="text/javascript">
    <?php $_from = $this->_var['lang']['password_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
      var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </script>
<div class="usBox">
  <div class="usBox_2 clearfix">
    <form action="user.php" method="post" name="getPassword" onsubmit="return submitPwdInfo();">
        <br />
        <table width="70%" border="0" align="center">
          <tr>
            <td colspan="2" align="center"><strong><?php echo $this->_var['lang']['username_and_email']; ?></strong></td>
          </tr>
          <tr>
            <td width="29%" align="right"><?php echo $this->_var['lang']['username']; ?></td>
            <td width="61%"><input name="user_name" type="text" size="30" class="inputBg" /></td>
          </tr>
          <tr>
            <td align="right"><?php echo $this->_var['lang']['email']; ?></td>
            <td><input name="email" type="text" size="30" class="inputBg" /></td>
          </tr>
          <tr>
            <td></td>
            <td><input type="hidden" name="act" value="send_pwd_email" />
              <input type="submit" name="submit" value="<?php echo $this->_var['lang']['submit']; ?>" class="bnt_blue" style="border:none;" />
              <input name="button" type="button" onclick="history.back()" value="<?php echo $this->_var['lang']['back_page_up']; ?>" style="border:none;" class="bnt_blue_1" />
	    </td>
          </tr>
        </table>
        <br />
      </form>
  </div>
</div>
<?php endif; ?>


    <?php if ($this->_var['action'] == 'qpassword_name'): ?>
	<?php echo $this->fetch('library/page_header.lbi'); ?>
<div class="usBox">
  <div class="usBox_2 clearfix">
    <form action="user.php" method="post">
        <br />
        <table width="70%" border="0" align="center">
          <tr>
            <td colspan="2" align="center"><strong><?php echo $this->_var['lang']['get_question_username']; ?></strong></td>
          </tr>
          <tr>
            <td width="29%" align="right"><?php echo $this->_var['lang']['username']; ?></td>
            <td width="61%"><input name="user_name" type="text" size="30" class="inputBg" /></td>
          </tr>
          <tr>
            <td></td>
            <td><input type="hidden" name="act" value="get_passwd_question" />
              <input type="submit" name="submit" value="<?php echo $this->_var['lang']['submit']; ?>" class="bnt_blue" style="border:none;" />
              <input name="button" type="button" onclick="history.back()" value="<?php echo $this->_var['lang']['back_page_up']; ?>" style="border:none;" class="bnt_blue_1" />
	    </td>
          </tr>
        </table>
        <br />
      </form>
  </div>
</div>
<?php endif; ?>


    <?php if ($this->_var['action'] == 'get_passwd_question'): ?>
<div class="usBox">
  <div class="usBox_2 clearfix">
    <form action="user.php" method="post">
        <br />
        <table width="70%" border="0" align="center">
          <tr>
            <td colspan="2" align="center"><strong><?php echo $this->_var['lang']['input_answer']; ?></strong></td>
          </tr>
          <tr>
            <td width="29%" align="right"><?php echo $this->_var['lang']['passwd_question']; ?>：</td>
            <td width="61%"><?php echo $this->_var['passwd_question']; ?></td>
          </tr>
          <tr>
            <td align="right"><?php echo $this->_var['lang']['passwd_answer']; ?>：</td>
            <td><input name="passwd_answer" type="text" size="20" class="inputBg" /></td>
          </tr>
          <?php if ($this->_var['enabled_captcha']): ?>
          <tr>
            <td align="right"><?php echo $this->_var['lang']['comment_captcha']; ?></td>
            <td><input type="text" size="8" name="captcha" class="inputBg" />
            <img src="captcha.php?is_login=1&<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer;" onClick="this.src='captcha.php?is_login=1&'+Math.random()" /> </td>
          </tr>
          <?php endif; ?>
          <tr>
            <td></td>
            <td><input type="hidden" name="act" value="check_answer" />
              <input type="submit" name="submit" value="<?php echo $this->_var['lang']['submit']; ?>" class="bnt_blue" style="border:none;" />
              <input name="button" type="button" onclick="history.back()" value="<?php echo $this->_var['lang']['back_page_up']; ?>" style="border:none;" class="bnt_blue_1" />
	    </td>
          </tr>
        </table>
        <br />
      </form>
  </div>
</div>
<?php endif; ?>

<?php if ($this->_var['action'] == 'reset_password'): ?>
    <script type="text/javascript">
    <?php $_from = $this->_var['lang']['password_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
      var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </script>
<div class="usBox">
  <div class="usBox_2 clearfix">
    <form action="user.php" method="post" name="getPassword2" onSubmit="return submitPwd()">
      <br />
      <table width="80%" border="0" align="center">
        <tr>
          <td><?php echo $this->_var['lang']['new_password']; ?></td>
          <td><input name="new_password" type="password" size="25" class="inputBg" /></td>
        </tr>
        <tr>
          <td><?php echo $this->_var['lang']['confirm_password']; ?>:</td>
          <td><input name="confirm_password" type="password" size="25"  class="inputBg"/></td>
        </tr>
        <tr>
          <td colspan="2" align="center">
            <input type="hidden" name="act" value="act_edit_password" />
            <input type="hidden" name="uid" value="<?php echo $this->_var['uid']; ?>" />
            <input type="hidden" name="code" value="<?php echo $this->_var['code']; ?>" />
            <input type="submit" name="submit" value="<?php echo $this->_var['lang']['confirm_submit']; ?>" />
          </td>
        </tr>
      </table>
      <br />
    </form>
  </div>
</div>
<?php endif; ?>








<div class="blank"></div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
<?php $_from = $this->_var['lang']['passport_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var username_exist = "<?php echo $this->_var['lang']['username_exist']; ?>";
</script>
</html>
