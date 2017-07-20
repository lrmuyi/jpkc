<?php /* Smarty version Smarty-3.1.6, created on 2015-11-16 16:14:17
         compiled from "D:\web\jpkc\plc/Admin/View\Manage\notice.html" */ ?>
<?php /*%%SmartyHeaderCode:8895564990596e3ba6-43970967%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '943b5c7c416e8184383aef81a9a7e0d4f01cef82' => 
    array (
      0 => 'D:\\web\\jpkc\\plc/Admin/View\\Manage\\notice.html',
      1 => 1433949554,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8895564990596e3ba6-43970967',
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
  'unifunc' => 'content_56499059778f7',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56499059778f7')) {function content_56499059778f7($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $_smarty_tpl->tpl_vars['notice']->value;?>
</title>
	<link rel="stylesheet" href="<?php echo @ADMIN_IMAGE_URL;?>
css/admin.css"/>
	<meta http-equiv="refresh" content="<?php echo $_smarty_tpl->tpl_vars['sec']->value;?>
;url=<?php echo $_smarty_tpl->tpl_vars['jump']->value;?>
"/>
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