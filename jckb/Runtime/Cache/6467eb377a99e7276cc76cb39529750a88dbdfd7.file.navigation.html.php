<?php /* Smarty version Smarty-3.1.6, created on 2015-11-24 10:32:44
         compiled from "D:\web\jpkc\gcsx/Admin/View\Manage\navigation.html" */ ?>
<?php /*%%SmartyHeaderCode:78125653cc4cc05178-57170098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6467eb377a99e7276cc76cb39529750a88dbdfd7' => 
    array (
      0 => 'D:\\web\\jpkc\\gcsx/Admin/View\\Manage\\navigation.html',
      1 => 1433992725,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78125653cc4cc05178-57170098',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'navi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5653cc4cd0b92',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5653cc4cd0b92')) {function content_5653cc4cd0b92($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>管理友情链接</title>
	<link rel="stylesheet" href="<?php echo @ADMIN_IMAGE_URL;?>
css/admin.css"/>
	<script type="text/javascript">
		function addrow(){
		    var tr = document.createElement('tr');
		    var cellsNum = tb.rows[0].cells.length;
		    for(var j = 0 ; j < cellsNum ; j++){
		        var td = document.createElement('td');
		        	if(j==0){
		        		td.innerHTML='<input style="width:50px;" type="text" name="ord[]"/>';
		        	}
		        	if(j==1){
		        		td.innerHTML='<input type="text" name="title[]" style="width:150px;"/>';
			        }
			        if(j==2){
			        	td.innerHTML='<input type="text" style="width:300px;" name="url[]"/>';
			        }
			        if(j==3){
			        	td.innerHTML='';
			        }
			        if(j==4){
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
			<h2>主导航管理：</h2>
			<div class="wcon">
				<form method="post">
					<table class="mtab" id="tb">
						<tr>
							<th style="width:60px;">次序</th><th style="width:160px;">导航标题</th><th style="width:310px;">链接地址</th><th>隐藏</th><th>&nbsp;</th>
						</tr>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['navi']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
							<td><input style="width:50px;" type="text" name="ord[]" value="<?php echo $_smarty_tpl->tpl_vars['navi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ord'];?>
" /></td><td><input type="text" name="title[]" style="width:150px;" value="<?php echo $_smarty_tpl->tpl_vars['navi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>
"/></td><td><input type="text" style="width:300px;" name="url[]" value="<?php echo $_smarty_tpl->tpl_vars['navi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['url'];?>
"/></td><td><input type="checkbox" name="hidd[]" value="<?php echo $_smarty_tpl->tpl_vars['navi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['nid'];?>
" <?php if ($_smarty_tpl->tpl_vars['navi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['class']==0){?> checked="checked" <?php }?>/></td><td align="center" style="width:50px;"><?php if ($_smarty_tpl->tpl_vars['navi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['del']!=0){?><a href="<?php echo @__MODULE__;?>
/Manage/delNavi/nid/<?php echo $_smarty_tpl->tpl_vars['navi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['nid'];?>
"><?php }else{ ?><a href="javascript:void(0);" style="color:silver;"><?php }?>删除</a></td>
						</tr>
						<?php endfor; endif; ?>
					</table>
					<div style="margin:5px 0;">
					<a href="javascript:void(0);" onclick="addrow();"><img src="<?php echo @ADMIN_IMAGE_URL;?>
m_add.png" />&nbsp;添加</a>
					</div>
					<input type="submit" name="button" value="保存" /><span id="frdnotice">（注意：名称与链接为必填，前台只依序显示10条）</span>
				</form>
			</div>
		</div>
	</div>
</body>
</html><?php }} ?>