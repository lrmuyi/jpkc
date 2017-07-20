<?php /* Smarty version Smarty-3.1.6, created on 2015-11-24 10:32:37
         compiled from "D:\web\jpkc\gcsx/Admin/View\Manage\category.html" */ ?>
<?php /*%%SmartyHeaderCode:165995653cc45898b49-99486527%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8d273012af6ef25f16b21816dd2d1a67c33184d' => 
    array (
      0 => 'D:\\web\\jpkc\\gcsx/Admin/View\\Manage\\category.html',
      1 => 1434729004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165995653cc45898b49-99486527',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cate' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5653cc45a6c23',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5653cc45a6c23')) {function content_5653cc45a6c23($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>分类内容管理</title>
	<link rel="stylesheet" href="<?php echo @ADMIN_IMAGE_URL;?>
css/admin.css"/>
	<script type="text/javascript">
	var i=0;
		function addrow(){
			i++;
		    var tr = document.createElement('tr');
		    var cellsNum = tb.rows[0].cells.length;
		    for(var j = 0 ; j < cellsNum ; j++){
		        var td = document.createElement('td');
		        	if(j==0){
		        		td.innerHTML='<select name="pid[]"><option disabled="disabled">选择上级分类</option><option value="0">【顶级分类】</option><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['cate']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><option value ="<?php echo $_smarty_tpl->tpl_vars['cate']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id'];?>
"><?php if ($_smarty_tpl->tpl_vars['cate']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['indent']>1){?><?php echo preg_replace('!^!m',str_repeat("&nbsp;",(($_smarty_tpl->tpl_vars['cate']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['indent']-1)*3))," ");?>
丨—<?php echo $_smarty_tpl->tpl_vars['cate']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['cate']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>
<?php }?></option><?php endfor; endif; ?></select>';
		        	}
		        	if(j==1){
		        		td.innerHTML='<input type="text" style="width:200px;" name="ntitle[]" placeholder="请输入分类标题..."/>';
			        }
			        if(j==2){
			        	td.innerHTML='<a href="javascript:void(0);" onclick="delrow(this.parentNode.parentNode.rowIndex);">　取消　</a>';
			        }
		        tr.appendChild(td);
		    }
		    tb.tBodies[0].appendChild(tr);
		}
		function delrow(num){
			tb.deleteRow(num);
		}
	</script>
</head>
<body>
	<div>
		<div class="wrap">
			<h2>分类内容管理：</h2>
			<div class="wcon">
				<form method="post">
					<table class="mtab">
						<tr>
							<th>顺序</th><th>分类名称</th><th style="max-width:160px;">禁用</th><th>&nbsp;</th><th>&nbsp;</th><th>&nbsp;</th>
						</tr>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['cate']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
						<tr>
							<td><input type="hidden" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['cate']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id'];?>
"/><input type="text" name="cateord[]" style="width:20px;<?php if ($_smarty_tpl->tpl_vars['cate']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['indent']==1){?>color:red;<?php }elseif($_smarty_tpl->tpl_vars['cate']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['indent']==2){?>color:green;<?php }else{ ?>color:purple;<?php }?>" value="<?php echo $_smarty_tpl->tpl_vars['cate']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ord'];?>
"/></td><td><?php if ($_smarty_tpl->tpl_vars['cate']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['indent']>1){?><?php echo preg_replace('!^!m',str_repeat("　",(($_smarty_tpl->tpl_vars['cate']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['indent']-1)*2))," ");?>
|----<?php }?><input type="text" name="title[]" style="width:150px;" value="<?php echo $_smarty_tpl->tpl_vars['cate']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>
"/></td><td><input type="checkbox" name="hidd[]" value="<?php echo $_smarty_tpl->tpl_vars['cate']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['cate']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['class']==0){?> checked="checked" <?php }?>/></td><td><a href="<?php echo @__MODULE__;?>
/Manage/delCate/id/<?php echo $_smarty_tpl->tpl_vars['cate']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id'];?>
" onclick="if (confirm('确定要删除吗？请确定分类下内容已清空或另存。')) return true; else return false;">&nbsp;删除&nbsp;</a></td><td><a href="<?php echo @__MODULE__;?>
/Manage/article/id/<?php echo $_smarty_tpl->tpl_vars['cate']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id'];?>
">　管理文章　</a></td><td align="center" style="width:50px;"><a href="<?php echo @__MODULE__;?>
/Manage/modCate/id/<?php echo $_smarty_tpl->tpl_vars['cate']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id'];?>
">　设置　</a></td>
						</tr>
						<?php endfor; endif; ?>
					</table>
					<table class="mtab" id="tb">
						<tr style="display:none;">
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
					</table>
					<div style="margin:5px 0;">
					<a href="javascript:void(0);" onclick="addrow();"><img src="<?php echo @ADMIN_IMAGE_URL;?>
m_add.png" />&nbsp;添加</a>
					</div>
					<input type="submit" name="button" value="保存" /><span id="frdnotice">（注意：删除分类前需清空其内容）</span>
				</form>
			</div>
		</div>
	</div>
</body>
</html><?php }} ?>