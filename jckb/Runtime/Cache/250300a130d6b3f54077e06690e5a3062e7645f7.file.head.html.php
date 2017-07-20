<?php /* Smarty version Smarty-3.1.6, created on 2015-11-24 10:32:31
         compiled from "D:\web\jpkc\gcsx/Admin/View\Index\head.html" */ ?>
<?php /*%%SmartyHeaderCode:306085653cc3f4ad021-03234644%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '250300a130d6b3f54077e06690e5a3062e7645f7' => 
    array (
      0 => 'D:\\web\\jpkc\\gcsx/Admin/View\\Index\\head.html',
      1 => 1434729300,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '306085653cc3f4ad021-03234644',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5653cc3f55101',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5653cc3f55101')) {function content_5653cc3f55101($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv=content-type content="text/html; charset=utf-8" />
        <link href="<?php echo @ADMIN_IMAGE_URL;?>
css/admin.css" type="text/css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <table cellspacing=0 cellpadding=0 width="100%" 
               background="<?php echo @ADMIN_IMAGE_URL;?>
header_bg.jpg" border=0>
            <tr height=56>
                <td width=260><img height=56 src="<?php echo @ADMIN_IMAGE_URL;?>
header_left.jpg" 
                                   width=260></td>
                <td style="font-weight: bold; color: #fff; padding-top: 20px" 
                    align=middle>当前用户：<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
 &nbsp;&nbsp; <a style="color: #fff" href="<?php echo @__ROOT__;?>
" target="_blank">网站首页</a> &nbsp;&nbsp; <a style="color: #fff" href="<?php echo @__MODULE__;?>
/Manage/adminPsw" target="right">修改口令</a> &nbsp;&nbsp; <a style="color: #fff" onclick="if (confirm('确定要退出吗？')) return true; else return false;" href="<?php echo @__MODULE__;?>
/Identify/logout" target=_top>退出系统</a> 
                </td>
                <td align=right width=268><img height=56 
                                               src="<?php echo @ADMIN_IMAGE_URL;?>
header_right.jpg" width=268></td></tr></table>
        <table cellspacing=0 cellpadding=0 width="100%" border=0>
            <tr bgcolor=#1c5db6 height=4>
                <td></td>
            </tr>
        </table>
    </body>
</html><?php }} ?>