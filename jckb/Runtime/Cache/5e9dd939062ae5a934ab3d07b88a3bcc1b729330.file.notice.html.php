<?php /* Smarty version Smarty-3.1.6, created on 2015-11-24 10:30:30
         compiled from "D:\web\jpkc\gcsx/Home/View\Common\notice.html" */ ?>
<?php /*%%SmartyHeaderCode:151465653cbc6aa9687-14791411%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e9dd939062ae5a934ab3d07b88a3bcc1b729330' => 
    array (
      0 => 'D:\\web\\jpkc\\gcsx/Home/View\\Common\\notice.html',
      1 => 1433994296,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151465653cbc6aa9687-14791411',
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
  'unifunc' => 'content_5653cbc6b5e23',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5653cbc6b5e23')) {function content_5653cbc6b5e23($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\web\\jpkc\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $_smarty_tpl->tpl_vars['notice']->value;?>
</title>
	<?php if ($_smarty_tpl->tpl_vars['sec']->value){?>
	<meta http-equiv="refresh" content="<?php echo $_smarty_tpl->tpl_vars['sec']->value;?>
;url=<?php echo $_smarty_tpl->tpl_vars['jump']->value;?>
"/>
	<?php }?>
	<link rel="stylesheet" href="<?php echo @HOME_IMAGE_URL;?>
css/main.css?v=<?php echo smarty_modifier_date_format(time(),"Ymd");?>
" media="screen"/>
</head>
<body style="background-color:white;">
	<div class="background">
		<div class="noticebox">
			<div class="noticetext">
				<span class="errmsg"><?php echo $_smarty_tpl->tpl_vars['notice']->value;?>
</span><br/>
				<span class="jump"><?php if ($_smarty_tpl->tpl_vars['sec']->value){?>（本页面将在<?php echo $_smarty_tpl->tpl_vars['sec']->value;?>
秒后自动<a id="jump" href="<?php echo $_smarty_tpl->tpl_vars['jump']->value;?>
">跳转</a>）<?php }?></span>
			</div>
			<div class="errbot">
				<div>Copyright © 2014-2024 www.lutcte.com All Rights Reserved</div>
			</div>
		</div>
	</div>
</body>
</html><?php }} ?>