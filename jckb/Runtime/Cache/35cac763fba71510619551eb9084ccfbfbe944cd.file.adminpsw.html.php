<?php /* Smarty version Smarty-3.1.6, created on 2015-11-17 11:11:38
         compiled from "D:\web\jpkc\plc/Admin/View\Manage\adminpsw.html" */ ?>
<?php /*%%SmartyHeaderCode:18302564a9aea7711a6-93338237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35cac763fba71510619551eb9084ccfbfbe944cd' => 
    array (
      0 => 'D:\\web\\jpkc\\plc/Admin/View\\Manage\\adminpsw.html',
      1 => 1433992835,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18302564a9aea7711a6-93338237',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'err' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_564a9aea897db',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564a9aea897db')) {function content_564a9aea897db($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>管理员修改密码</title>
	<style type="text/css">
		.pwdbox{
			margin: 50px 25%;
			width:350px;
			height:250px;
			border:1px solid silver;
			border-radius: 15px;
		}

		.pwdbox span{
			display:block;
			margin:15px;
		}

		.pwdbox span p{
			font-family: "华文行楷";
			font-size: 1.2em;
			color:red;
		}

		.pwdbox input[type=text]{
			width:50px;
		}

		.pwdbox input[type=button]{
			width:70px;
		}

		.pwdbox img{
			margin-left:10px;
			height:30px;
		}

		.pwdbox button{
			width:70px;
			margin-left:50px;
		}
	</style>
	<script type="text/javascript">
		window.onload=init;
		function init(){

			var btn    = $('rbtn');
			var oldPwd = $('oldPwd');
			var newPwd = $('newPwd');
			var rePwd  = $('rePwd');
			var msg1   = $('p1');
			var msg2   = $('p2');
			var msg3   = $('p3');

			oldPwd.onfocus = function(){
				oldPwd.value = '';
				oldPwd.style = "background-color:none";
			}
			newPwd.onfocus=function(){
				newPwd.value = '';
				newPwd.style = "background-color:none";
			}
			rePwd.onfocus = function(){
				rePwd.value = '';
				rePwd.style = "background-color:none";
			}

			
			
			

			oldPwd.onblur = function(){
				if(oldPwd.value == ''){
					msg1.innerHTML = "旧密码必须填写";
					oldPwd.style = "background-color:pink";
					return false;
				}else if(oldPwd.value.length<6){
					msg1.innerHTML = "旧密码格式错误";
					oldPwd.style = "background-color:pink";
					return false;
				}else{
					msg1.innerHTML = "旧密码格式正确";
					msg1.style = "color:green";
					if(checkNew()&&checkRe()){
						btn.disabled=false;	
					}
					return true;
				}
			}

			newPwd.onblur = function(){
				if(newPwd.value == ''){
					msg2.innerHTML = "新密码必须填写";
					newPwd.style = "background-color:pink";
					return false;
				}else if(newPwd.value.length<6){
					msg2.innerHTML = "新密码不能少于6位";
					newPwd.style = "background-color:pink";
					return false;
				}else if(newPwd.value==oldPwd.value){
					msg2.innerHTML = "新密码不能与旧密码相同";
					newPwd.style = "background-color:pink";
					return false;
				}else{
					msg2.innerHTML = "新密码格式正确";
					msg2.style = "color:green";
				}
			}

			rePwd.onblur  = function(){
				if(rePwd.value == ''){
					msg3.innerHTML = "确认密码必须填写";
					rePwd.style = "background-color:pink";
					return false;
				}else if(rePwd.value.length<6){
					msg3.innerHTML = "确认密码不正确";
					rePwd.style = "background-color:pink";
					return false;
				}else if(rePwd.value != newPwd.value){
					msg3.innerHTML = "确认密码不正确";
					rePwd.style = "background-color:pink";
					return false;
				}else{
					msg3.innerHTML = "确认密码输入正确";
					msg3.style = "color:green";
					return true;
				}
			}

			btn.onclick = function(){
				if(oldPwd.value == ''||oldPwd.value.length<6){
					return false;
				}else if(newPwd.value == ''||newPwd.value.length<6||newPwd.value == oldPwd.value){
					return false;
				}else if(rePwd.value == ''||rePwd.value.length<6||rePwd.value != newPwd.value){
					return false;
				}else{
					document.form1.submit();
				}
				
			}
		}

		function $(id){
			return document.getElementById(id);
		}
	</script>
</head>
<body>
	<div class="background">
		<div class="pwdbox">
			<form method="POST" name="form1">
			<span><center>原密码:<input type="password" name="oldPwd" id="oldPwd"/></center></span>
			<span><center>新密码:<input type="password" name="newPwd"  id="newPwd"/></center></span>
			<span><center>确　认:<input type="password" name="rePwd"  id="rePwd"/></center></span>
			<span><center><p id="p1"><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
<?php echo $_smarty_tpl->tpl_vars['err']->value['oldPwd'];?>
&nbsp;</p><p id="p2"><?php echo $_smarty_tpl->tpl_vars['err']->value['newPwd'];?>
&nbsp;</p><p id="p3"><?php echo $_smarty_tpl->tpl_vars['err']->value['rePwd'];?>
&nbsp;</p></center></span>
			<span><center><input type="button" id="rbtn" value="提交" /><a href="#"><button>取消</button></a></center></span>
			</form>
		</div>
	</div>
</body>
</html><?php }} ?>