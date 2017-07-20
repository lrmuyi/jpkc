<?php /* Smarty version Smarty-3.1.6, created on 2015-11-16 16:03:41
         compiled from "D:\web\jpkc\plc/Admin/View\Manage\siteinfo.html" */ ?>
<?php /*%%SmartyHeaderCode:1413556498dddb2fe67-32583302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d1a5d56ca7bfd3fc7c50132d9246c40d39cb36e' => 
    array (
      0 => 'D:\\web\\jpkc\\plc/Admin/View\\Manage\\siteinfo.html',
      1 => 1433992780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1413556498dddb2fe67-32583302',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56498dddc2b65',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56498dddc2b65')) {function content_56498dddc2b65($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>网站设置</title>
	<link rel="stylesheet" href="<?php echo @ADMIN_IMAGE_URL;?>
css/admin.css"/>
	<script>
		window.onload = checkTclose;

		function checkTclose(){
			var tclose = document.getElementById('tclose');
			var cnotice = document.getElementById('cnotice');

			if(tclose.checked==true){
				cnotice.style='display:table-row';
			}else{
				cnotice.style='display:none';
			}
		}
	</script>
</head>
<body>
	<div>
		<div class="wrap">
			<h2>站点信息：</h2>
			<div class="wcon">
				<form method="post">
					<table class="mtab" style="width:600px;">
						<tr>
							<td style="width:130px;">站点名称</td><td><input type="text" name="siteName" style="width:320px;" value="<?php echo $_smarty_tpl->tpl_vars['info']->value[0]['content'];?>
"/></td><td style="border:none;color:silver;width:200px;">	网站名称，将显示在页面底部的联系方式处</td>
						</tr>
						<tr>
							<td>网站名称</td><td><input type="text" name="websName" style="width:320px;" value="<?php echo $_smarty_tpl->tpl_vars['info']->value[1]['content'];?>
"/></td><td style="border:none;color:silver;">站点名称，将显示在浏览器窗口标题等位置</td>
						</tr>
						<tr>
							<td>网站描述</td><td><textarea style="width:320px;resize:none;" name="sitedesc"/><?php echo $_smarty_tpl->tpl_vars['info']->value[2]['content'];?>
</textarea></td><td style="border:none;color:silver;">网站描述，作为网站的简介</td>
						</tr>
						<tr>
							<td>网站关键词</td><td><textarea style="width:320px;resize:none;" name="keywords"/><?php echo $_smarty_tpl->tpl_vars['info']->value[3]['content'];?>
</textarea></td><td style="border:none;color:silver;">网站主题的关键词，3~15个</td>
						</tr>
						<tr>
							<td>网站URL</td><td><input type="text" name="siteUrl" style="width:320px;" value="<?php echo $_smarty_tpl->tpl_vars['info']->value[4]['content'];?>
"/></td><td style="border:none;color:silver;">	网站 URL，将作为链接显示在logo处或页面底部</td>
						</tr>
						<tr>
							<td>网站备案号码</td><td><input type="text" name="icp" style="width:320px;" value="<?php echo $_smarty_tpl->tpl_vars['info']->value[5]['content'];?>
"/></td><td style="border:none;color:silver;">	页面底部可以显示 ICP 备案信息</td>
						</tr>
						<tr>
							<td>关闭站点</td><td>
								<input id="tclose" type="radio" name="tempclose" value="1" onclick="checkTclose();" <?php if ($_smarty_tpl->tpl_vars['info']->value[6]['content']==1){?>checked="checked"<?php }?>/>是
								<input type="radio" name="tempclose" value="0" onclick="checkTclose();" <?php if ($_smarty_tpl->tpl_vars['info']->value[6]['content']==0){?>checked="checked"<?php }?>/>否
							</td><td style="border:none;color:silver;"> 暂时将站点关闭，所有人无法访问前台</td>
						</tr>
						<tr id="cnotice" style="display:none;">
							<td style="width:130px;">关闭时显示提示语</td><td><input type="text" name="cnotice" style="width:320px;" value="<?php echo $_smarty_tpl->tpl_vars['info']->value[7]['content'];?>
"/></td><td style="border:none;color:silver;">网站关闭时页面显示该提示</td>
						</tr>
					</table>
					<input style="margin-top:10px;" type="submit" name="button" value="　保存　" /></span>
				</form>
			</div>
		</div>
	</div>
</body>
</html><?php }} ?>