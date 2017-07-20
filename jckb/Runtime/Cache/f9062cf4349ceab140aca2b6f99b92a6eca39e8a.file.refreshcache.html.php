<?php /* Smarty version Smarty-3.1.6, created on 2015-11-16 20:15:14
         compiled from "D:\web\jpkc\plc/Admin/View\Manage\refreshcache.html" */ ?>
<?php /*%%SmartyHeaderCode:217635649c8d25572f4-51985264%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9062cf4349ceab140aca2b6f99b92a6eca39e8a' => 
    array (
      0 => 'D:\\web\\jpkc\\plc/Admin/View\\Manage\\refreshcache.html',
      1 => 1433177795,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '217635649c8d25572f4-51985264',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'msg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5649c8d25d954',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5649c8d25d954')) {function content_5649c8d25d954($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文章搜索结果</title>
	<link rel="stylesheet" href="<?php echo @ADMIN_IMAGE_URL;?>
css/admin.css"/>
</head>
<body>
	<div class="wrap">
		<h2>更新缓存</h2>
		<div>
			<div style="display:block;margin:50px 150px;"><?php if ($_smarty_tpl->tpl_vars['msg']->value){?><span style="color:red;font-size:1.3em;"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</span><?php }else{ ?><form method="POST">
				<input type = "hidden" name = "refresh" value="1"/>
				<input type = "submit" value = "　　更新缓存　　"/>
			</form><?php }?></div>
	</div>
</body>
</html><?php }} ?>