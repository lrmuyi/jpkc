<?php /* Smarty version Smarty-3.1.6, created on 2015-11-16 16:03:43
         compiled from "D:\web\jpkc\plc/Admin/View\Identify\inotice.html" */ ?>
<?php /*%%SmartyHeaderCode:588756498ddf769919-62867373%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b451964b55b7c1d5ef414bf7ab14077f4ccf5da5' => 
    array (
      0 => 'D:\\web\\jpkc\\plc/Admin/View\\Identify\\inotice.html',
      1 => 1433949409,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '588756498ddf769919-62867373',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'notice' => 0,
    'sec' => 0,
    'jump' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56498ddf82119',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56498ddf82119')) {function content_56498ddf82119($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $_smarty_tpl->tpl_vars['notice']->value;?>
</title>
	<link rel="stylesheet" href="<?php echo @ADMIN_IMAGE_URL;?>
css/admin.css"/>
	<?php if (!isset($_smarty_tpl->tpl_vars['top'])) $_smarty_tpl->tpl_vars['top'] = new Smarty_Variable(null);if ($_smarty_tpl->tpl_vars['top']->value = 1){?><script>
	 	window.onload=function(){
	 		window.setTimeout(goJump,<?php echo $_smarty_tpl->tpl_vars['sec']->value;?>
*1000);
	 	}
	 	function goJump(){
	 		var j = document.getElementById('jump');
	 		j.click();
	 	}
	 </script><?php }else{ ?><meta http-equiv="refresh" content="<?php echo $_smarty_tpl->tpl_vars['sec']->value;?>
;url=<?php echo $_smarty_tpl->tpl_vars['jump']->value;?>
;"/><?php }?>
</head>
<body>
	<div class="background">
		<div class="noticebox">
			<div class="noticetext">
				<span class="errmsg"><?php echo $_smarty_tpl->tpl_vars['notice']->value;?>
</span><br/>
				<span class="jump"><?php if ($_smarty_tpl->tpl_vars['sec']->value){?>（本页面将在<?php echo $_smarty_tpl->tpl_vars['sec']->value;?>
秒后自动<a id="jump" href="<?php echo $_smarty_tpl->tpl_vars['jump']->value;?>
" <?php if (!isset($_smarty_tpl->tpl_vars['top'])) $_smarty_tpl->tpl_vars['top'] = new Smarty_Variable(null);if ($_smarty_tpl->tpl_vars['top']->value = 1){?>target="_top"<?php }?>>跳转</a>）<?php }?></span>
			</div>
			<div class="errbot">
				<div>Copyright © 2014-2024 www.lutcte.com All Rights Reserved</div>
			</div>
		</div>	
	</div>
</body>
</html><?php }} ?>