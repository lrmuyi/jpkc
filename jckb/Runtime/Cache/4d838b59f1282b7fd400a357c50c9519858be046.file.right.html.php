<?php /* Smarty version Smarty-3.1.6, created on 2015-11-16 16:03:07
         compiled from "D:\web\jpkc\plc/Admin/View\Index\right.html" */ ?>
<?php /*%%SmartyHeaderCode:2035856498dbbf05d13-65959985%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d838b59f1282b7fd400a357c50c9519858be046' => 
    array (
      0 => 'D:\\web\\jpkc\\plc/Admin/View\\Index\\right.html',
      1 => 1434729639,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2035856498dbbf05d13-65959985',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'logintimes' => 0,
    'prev_login' => 0,
    'remoteip' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56498dbc0a229',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56498dbc0a229')) {function content_56498dbc0a229($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\web\\jpkc\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv=content-type content="text/html; charset=utf-8" />
        <link href="css/admin.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <table cellspacing=0 cellpadding=0 width="100%" align=center border=0>
            <tr height=28>
                <td background=./img/title_bg1.jpg>当前位置: </td></tr>
            <tr>
                <td bgcolor=#b1ceef height=1></td></tr>
            <tr height=20>
                <td background=./img/shadow_bg.jpg></td></tr></table>
        <table cellspacing=0 cellpadding=0 width="90%" align=center border=0>
            <tr height=100>
                <td align=middle width=100><img height=100 src="<?php echo @ADMIN_IMAGE_URL;?>
admin_p.gif" 
                                                width=90></td>
                <td width=60>&nbsp;</td>
                <td>
                    <table height=100 cellspacing=0 cellpadding=0 width="100%" border=0>

                        <tr>
                            <td>当前时间：<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d %H:%M:%S");?>
</td></tr>
                        <tr>
                            <td style="font-weight: bold; font-size: 16px"><?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</td></tr>
                        <tr>
                            <td>欢迎进入网站管理中心！</td></tr></table></td></tr>
            <tr>
                <td colspan=3 height=10></td></tr></table>
        <table cellspacing=0 cellpadding=0 width="95%" align=center border=0>
            <tr height=20>
                <td></td></tr>
            <tr height=22>
                <td style="padding-left: 20px; font-weight: bold; color: #ffffff" 
                    align=middle background=<?php echo @ADMIN_IMAGE_URL;?>
title_bg2.jpg>您的相关信息</td></tr>
            <tr bgcolor=#ecf4fc height=12>
                <td></td></tr>
            <tr height=20>
                <td></td></tr></table>
        <table cellspacing=0 cellpadding=2 width="95%" align=center border=0>
            <tr>
                <td align=right width=100>登陆帐号：</td>
                <td style="color: #880000"><?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</td></tr>
            <tr>
                <td align=right>登陆次数：</td>
                <td style="color: #880000"><?php echo $_smarty_tpl->tpl_vars['logintimes']->value;?>
</td></tr>
            <tr>
                <td align=right>上次登录：</td>
                <td style="color: #880000"><?php echo $_smarty_tpl->tpl_vars['prev_login']->value;?>
</td></tr>
            <tr>
                <td align=right>ip地址：</td>
                <td style="color: #880000"><?php echo $_smarty_tpl->tpl_vars['remoteip']->value;?>
</td></tr>
            <tr>
                <td align=right>身份过期：</td>
                <td style="color: #880000">30 分钟</td></tr>
            <tr>
                <td align=right>网站开发qq：</td>
                <td style="color: #880000">67192988</td></tr>
        </table>
    </body>
</html><?php }} ?>