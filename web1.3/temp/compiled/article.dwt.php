<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="themes/default/style.css" rel="stylesheet" type="text/css">
<link href="themes/default/css/web.css" rel="stylesheet" type="text/css">
  

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
</head>
<body>
	  <?php echo $this->fetch('library/page_header.lbi'); ?>


<div id="WebLogo">
      <?php echo $this->fetch('library/ur_here.lbi'); ?>
</div>


<div class="blank"></div>
<div class="block clearfix" style="margin-top: 80px;">
  
  <div class="AreaR"     style="width: 1230px; margin: 0 auto;">
    <div class="box">
     <div class="box_1">
      <div>
         <div class="tc" style="width:1200px; margin:30px auto;">
         <h1  style="text-align:center;"><?php echo htmlspecialchars($this->_var['article']['title']); ?></h1>
		 <br /><p style="text-align:center;">作者：<?php echo htmlspecialchars($this->_var['article']['author']); ?>&nbsp;&nbsp;时间：<?php echo $this->_var['article']['add_time']; ?></p>
         </div>
		 <div style="font-size:14px; line-height:20px; text-align:center; color:#666;">
         <?php if ($this->_var['article']['content']): ?>
          <?php echo $this->_var['article']['content']; ?>
         <?php endif; ?>
		 </div>
         <?php if ($this->_var['article']['open_type'] == 2 || $this->_var['article']['open_type'] == 1): ?><br />
         <div><a href="<?php echo $this->_var['article']['file_url']; ?>" target="_blank"><?php echo $this->_var['lang']['relative_file']; ?></a></div>
          <?php endif; ?>
         <div style="font-size:12px; color:#666; line-height:30px; margin: 90px 0 50px 0;">
         
          <?php if ($this->_var['next_article']): ?>
            <?php echo $this->_var['lang']['next_article']; ?>:&nbsp;<a href="<?php echo $this->_var['next_article']['url']; ?>" class="f6" style="color:#666;"><?php echo $this->_var['next_article']['title']; ?></a><br />
          <?php endif; ?>
          
          <?php if ($this->_var['prev_article']): ?>
            <?php echo $this->_var['lang']['prev_article']; ?>:&nbsp;<a href="<?php echo $this->_var['prev_article']['url']; ?>" class="f6" style="color:#666;"><?php echo $this->_var['prev_article']['title']; ?></a>
          <?php endif; ?>
         </div>
      </div>
    </div>
  </div>
  <div class="blank"></div>
  <?php echo $this->fetch('library/comments.lbi'); ?>

  </div>
  
</div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
 <script type="text/javascript" src="themes/default/js/jquery.js"></script>
 <script type="text/javascript" src="themes/default/js/index.js"></script>
</body>
</html>
