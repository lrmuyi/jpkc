<?php /* Smarty version Smarty-3.1.6, created on 2015-11-16 16:44:38
         compiled from "D:\web\jpkc\plc/Admin/View\Manage\modcate.html" */ ?>
<?php /*%%SmartyHeaderCode:29590564997768111f7-92860343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfaf25264e8bddd8a3f8a50b3f6b3274fd8276fb' => 
    array (
      0 => 'D:\\web\\jpkc\\plc/Admin/View\\Manage\\modcate.html',
      1 => 1434369279,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29590564997768111f7-92860343',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cate' => 0,
    'all' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56499776963c1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56499776963c1')) {function content_56499776963c1($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>分类设置</title>
	<link rel="stylesheet" href="<?php echo @ADMIN_IMAGE_URL;?>
css/admin.css"/>
</head>
<body>
	<div>
		<div class="wrap">
			<h2>分类详细设置：</h2>
			<div class="wcon">
				<form method="post">
					<table class="mtab">
						<tr>
							<td style="width:60px;">分类名称</td><td style="width:160px;"><input type="text" name="title" style="width:150px;" value="<?php echo $_smarty_tpl->tpl_vars['cate']->value['title'];?>
"/></td>
						</tr>
						<tr>
							<td style="width:60px;">创建时间</td><td style="width:160px;"><?php echo $_smarty_tpl->tpl_vars['cate']->value['ctime'];?>
</td>
						</tr>
						<tr>
							<td style="width:60px;">上级分类</td><td style="width:160px;">
								<select name="pid">
									<option disabled="disabled">
										选择上级分类
									</option>
									<option value="0">
										【顶级分类】
									</option>
									<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['all']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total']);
?>
									<option value ="<?php echo $_smarty_tpl->tpl_vars['all']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['cate']->value['pid']==$_smarty_tpl->tpl_vars['all']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id']){?>selected="selected"<?php }?>>
										<?php if ($_smarty_tpl->tpl_vars['all']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['indent']>1){?>
											<?php echo preg_replace('!^!m',str_repeat("&nbsp;",(($_smarty_tpl->tpl_vars['all']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['indent']-1)*3))," ");?>

											丨—<?php echo $_smarty_tpl->tpl_vars['all']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>

										<?php }else{ ?>
											<?php echo $_smarty_tpl->tpl_vars['all']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>

										<?php }?>
									</option>
									<?php endfor; endif; ?>
								</select>
							</td>
						</tr>
						<tr>
							<td style="width:60px;">启用分类</td><td style="width:160px;">
								<input type="radio" name="enable" value="1" <?php if ($_smarty_tpl->tpl_vars['cate']->value['class']==1){?>checked="checked"<?php }?> />是 
								<input type="radio" name="enable" value="0" <?php if ($_smarty_tpl->tpl_vars['cate']->value['class']==0){?>checked="checked"<?php }?> />否 
							</td>
						</tr>
						<tr>
							<td style="width:60px;">显示风格</td><td style="width:160px;">
								<input type="radio" name="style" value="1" <?php if ($_smarty_tpl->tpl_vars['cate']->value['style']==1){?>checked="checked"<?php }?> />文字
								<input type="radio" name="style" value="2" <?php if ($_smarty_tpl->tpl_vars['cate']->value['style']==2){?>checked="checked"<?php }?> />图文 
								<input type="radio" name="style" value="3" <?php if ($_smarty_tpl->tpl_vars['cate']->value['style']==3){?>checked="checked"<?php }?> />图片
							</td>
						</tr>
					</table>
					<div style="margin:5px 0;">
						<a style="margin:5px 0;display:block;" href="<?php echo @__MODULE__;?>
/Manage/article/id/<?php echo $_smarty_tpl->tpl_vars['cate']->value['id'];?>
">该分类下内容管理</a>
					</div>
					<input type="submit" name="button" value="保存" /><span id="frdnotice">（注意：名称不得为空）</span>
				</form>
			</div>
		</div>
	</div>
</body>
</html><?php }} ?>