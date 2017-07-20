<?php /* Smarty version Smarty-3.1.6, created on 2015-11-16 16:02:38
         compiled from "D:\web\jpkc\plc/Admin/View\Identify\login.html" */ ?>
<?php /*%%SmartyHeaderCode:2180356498d9e49fa79-74661864%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3dea9a0d6e1db6d7f7bb1dbe82f23587c391fac' => 
    array (
      0 => 'D:\\web\\jpkc\\plc/Admin/View\\Identify\\login.html',
      1 => 1432603743,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2180356498d9e49fa79-74661864',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'err' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56498d9e596b4',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56498d9e596b4')) {function content_56498d9e596b4($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta content="MSHTML 6.00.6000.16674" name="GENERATOR" />
        <meta http-equiv="Window-target" content="_top">
        <title>GXCMS管理员登录</title>
		<script>var img_url = '<?php echo @ADMIN_IMAGE_URL;?>
';var module_url = '<?php echo @__MODULE__;?>
';</script>
		<script src="<?php echo @ADMIN_JS_URL;?>
userFormVarify.js"></script>
        <link href="<?php echo @ADMIN_IMAGE_URL;?>
css/User_Login.css" type="text/css" rel="stylesheet" />
    </head><body id="userlogin_body">
        <div></div>
        <div id="user_login">
            <dl>
                <dd id="user_top">
                    <ul>
                        <li class="user_top_l"></li>
                        <li class="user_top_c"></li>
                        <li class="user_top_r"></li></ul>
                </dd><dd id="user_main">
                    <form action="<?php echo @__SELF__;?>
" method="post" name="form1">
                        <ul>
                            <li class="user_main_l"></li>
                            <li class="user_main_c">
                                <div class="user_main_box">
                                    <ul>
                                        <li class="user_main_text">用户名： </li>
                                        <li class="user_main_input">
                                            <input type="text" class="TxtUserNameCssClass" id="username" maxlength="20" name="username"> </li>
                                    </ul>
                                    <ul>
                                        <li class="user_main_text">密&nbsp;&nbsp;&nbsp;&nbsp;码： </li>
                                        <li class="user_main_input">
                                            <input class="TxtPasswordCssClass" id="password" name="password" type="password">
                                        </li>
                                    </ul>
                                    <ul>
                                        <li class="user_main_text">验证码： </li>
                                        <li class="user_main_input">
                                            <input class="TxtValidateCodeCssClass" id="checkcode" name="checkcode" type="text" MaxLength="4" onkeypress="if(event.keyCode==13){document.getElementById('button').focus();}">
                                            <img width="80px" height="20px" src="<?php echo @__MODULE__;?>
/checkCode/Checkcode" id="varify" onclick="this.src='<?php echo @__MODULE__;?>
/checkCode/Checkcode?aa='+Math.random();flag=1;" />
                                        </li>
                                    </ul>
                                    <ul style="margin-top:40px;color:red;">
                                    	<li id="usernameErr"><?php echo $_smarty_tpl->tpl_vars['err']->value['username'];?>
</li>
                                    	<li id="passwordErr"><?php echo $_smarty_tpl->tpl_vars['err']->value['password'];?>
</li>
                                    	<li id="checkcodeErr"><?php echo $_smarty_tpl->tpl_vars['err']->value['checkcode'];?>
</li>
                                    </ul>
                                </div>
                            </li>
                            <li class="user_main_r">

                                <input style="border: medium none; background: url('<?php echo @ADMIN_IMAGE_URL;?>
user_botton.gif') repeat-x scroll left top transparent; height: 122px; width: 111px; display: block; cursor: pointer;" value="" type="button" id="button" onfocus="this.click();" onclick="setTimeout(trySubmit,500);">
                            </li>
                        </ul>
                    </form>
                </dd><dd id="user_bottom">
                    <ul>
                        <li class="user_bottom_l"></li>
                        <li class="user_bottom_c"><span style="margin-top: 40px;"></span> </li>
                        <li class="user_bottom_r"></li></ul></dd></dl></div><span id="ValrUserName" style="display: none; color: red;"></span><span id="ValrPassword" style="display: none; color: red;"></span><span id="ValrValidateCode" style="display: none; color: red;"></span>
        <div id="ValidationSummary1" style="display: none; color: red;"></div>
    </body>
</html><?php }} ?>