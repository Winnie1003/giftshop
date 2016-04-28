<?php if ($this->_var['promotion_goods']): ?>
<script >
var Tday = new Array();
var daysms = 24 * 60 * 60 * 1000
var hoursms = 60 * 60 * 1000
var Secondms = 60 * 1000
var microsecond = 1000
var DifferHour = -1
var DifferMinute = -1
var DifferSecond = -1
function clock(key)
  {
   var time = new Date()
   var hour = time.getHours()
   var minute = time.getMinutes()
   var second = time.getSeconds()
   var timevalue = ""+((hour > 12) ? hour-12:hour)
   timevalue +=((minute < 10) ? ":0":":")+minute
   timevalue +=((second < 10) ? ":0":":")+second
   timevalue +=((hour >12 ) ? " PM":" AM")
   var convertHour = DifferHour
   var convertMinute = DifferMinute
   var convertSecond = DifferSecond
   var Diffms = Tday[key].getTime() - time.getTime()
   DifferHour = Math.floor(Diffms / daysms)
   Diffms -= DifferHour * daysms
   DifferMinute = Math.floor(Diffms / hoursms)
   Diffms -= DifferMinute * hoursms
   DifferSecond = Math.floor(Diffms / Secondms)
   Diffms -= DifferSecond * Secondms
   var dSecs = Math.floor(Diffms / microsecond)
   
   if(convertHour != DifferHour) a="<font style='font-weight:bold;color:#CC0000; font-size:16px;'>"+DifferHour+"</font>天";
   if(convertMinute != DifferMinute) b="<font style='font-weight:bold;color:#CC0000; font-size:16px;'>"+DifferMinute+"</font>时";
   if(convertSecond != DifferSecond) c="<font style='font-weight:bold;color:#CC0000; font-size:16px;'>"+DifferSecond+"</font>分"
     d="<font style='font-weight:bold;color:#CC0000; font-size:16px;'>"+dSecs+"</font>秒"
     if (DifferHour>0) {a=a} 
     else {a=''}
   document.getElementById("leftTime"+key).innerHTML = a + b + c + d; //显示倒计时信息
  
  }
</script>



<div id="sales" style="text-align:center">
<?php $_from = $this->_var['promotion_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'goods');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['goods']):
        $this->_foreach['name']['iteration']++;
?>
<?php if (($this->_foreach['name']['iteration'] <= 1)): ?>
<a href="<?php echo $this->_var['goods']['url']; ?>">
<img src="<?php echo $this->_var['goods']['thumb']; ?>" style="border:none" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" width="165" height="165"/></a>       

<p style="font-size:16px;">

<a style="color:#F21C24" href="<?php echo $this->_var['goods']['url']; ?>">
<?php if ($this->_var['goods']['promote_price'] != ""): ?>
<?php echo $this->_var['goods']['promote_price']; ?>
<?php else: ?>
<?php echo $this->_var['goods']['shop_price']; ?>
<?php endif; ?>
<font style="text-decoration:line-through; color:#CCCCCC; font-size:12px;"><?php echo $this->_var['goods']['shop_price']; ?></font></a> <br/>  
</p>             


<font id="leftTime<?php echo $this->_var['key']; ?>" style=" background:url(themes/default/images/pro.gif) left center no-repeat; text-indent:30px; height:35px; line-height:35px; display:block; width:160px; margin-bottom:5px;"><?php echo $this->_var['lang']['please_waiting']; ?></font>                

<a href="<?php echo $this->_var['goods']['url']; ?>"><img src="themes/default/images/button2.gif" style="border:none; margin-bottom:5px;"/></a>     

<script>
Tday[<?php echo $this->_var['key']; ?>] = new Date("<?php echo $this->_var['goods']['gmt_end_time']; ?>");   
window.setInterval(function()     
{clock(<?php echo $this->_var['key']; ?>);}, 1000);     
</script>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>


</div>    
<?php endif; ?>
