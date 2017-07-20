<?php /* Smarty version Smarty-3.1.6, created on 2015-11-16 19:16:30
         compiled from "D:\web\jpkc\plc/Admin/View\Manage\modarticle.html" */ ?>
<?php /*%%SmartyHeaderCode:242575649bb0e009840-24619059%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eeab8134ad190bd2e1af5691f026904be818acd7' => 
    array (
      0 => 'D:\\web\\jpkc\\plc/Admin/View\\Manage\\modarticle.html',
      1 => 1433992876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '242575649bb0e009840-24619059',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'all' => 0,
    'err' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5649bb0e1ab62',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5649bb0e1ab62')) {function content_5649bb0e1ab62($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>修改分类文章 - <?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</title>
	<link rel="stylesheet" href="<?php echo @ADMIN_IMAGE_URL;?>
css/admin.css"/>
	<link rel="stylesheet" href="<?php echo @EDITOR_URL;?>
themes/default/default.css" />
	<link rel="stylesheet" href="<?php echo @EDITOR_URL;?>
plugins/code/prettify.css" />
	<script charset="utf-8" src="<?php echo @EDITOR_URL;?>
kindeditor.js"></script>
	<script charset="utf-8" src="<?php echo @EDITOR_URL;?>
lang/zh_CN.js"></script>
	<script charset="utf-8" src="<?php echo @EDITOR_URL;?>
plugins/code/prettify.js"></script>
	<script type="text/javascript">
		window.onload = function(){
			var title = document.getElementById('title');
			var errMsg = document.getElementById('errMsg');
			var cate = document.getElementById('cate');
			if(title.value){
				wleft();
			}

			title.onblur = checktitle;
			title.onfocus = checkoption;

			title.onfocus = function(){
				var errMsg = document.getElementById('errMsg');
				errMsg.innerHTML = '*';
			}
		}

		function checktitle(){
			var title = document.getElementById('title');
			var errMsg = document.getElementById('errMsg');
			if(title.value.length == 0){
				errMsg.innerHTML = '*文章标题必须填写！';
				return 0;
			}
			return 1;
		}

		function checkOption(){
			var cate = document.getElementById('cate');
			if(cate.value == 0){
				alert('请选择文章分类！');
				return false;
			}
		}

		function wleft(){
			var title = document.getElementById('title');
			var wordleft = document.getElementById('wordleft');
			
			wordleft.innerHTML = <?php echo @TITLE_MAX_WORD;?>
 - title.value.length;
		}
		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="content1"]', {
				cssPath : '<?php echo @EDITOR_URL;?>
plugins/code/prettify.css',
				uploadJson : '<?php echo @EDITOR_URL;?>
php/upload_json.php',
				fileManagerJson : '<?php echo @EDITOR_URL;?>
php/file_manager_json.php',
				allowFileManager : true,
				afterCreate : function() {
					var self = this;
					K.ctrl(document, 13, function() {
						self.sync();
						K('form[name=editor]')[0].submit();
					});
					K.ctrl(self.edit.doc, 13, function() {
						self.sync();
						K('form[name=editor]')[0].submit();
					});
				}
			});
			prettyPrint();
		});
	</script>
</head>
<body>
	<div class="wrap">
		<h2>文章内容修改</h2>
		<div class="wcon">
			<div class="editor">
				<form name="editor" method="post" onsubmit="return(checkOption());">
					<p>所属分类：<label><select id="cate" name="pid">
									<option disabled="disabled">
										请选择分类
									</option>
									<option value="0">
										【选择分类】
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
" <?php if ($_smarty_tpl->tpl_vars['all']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id']==$_smarty_tpl->tpl_vars['data']->value['category']){?>selected="selected"<?php }?>>
										<?php if ($_smarty_tpl->tpl_vars['all']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['indent']>1){?>
											<?php echo preg_replace('!^!m',str_repeat("&nbsp;",(($_smarty_tpl->tpl_vars['all']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['indent']-1)*3))," ");?>

											丨—<?php echo $_smarty_tpl->tpl_vars['all']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>

										<?php }else{ ?>
											<?php echo $_smarty_tpl->tpl_vars['all']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>

										<?php }?>
									</option>
									<?php endfor; endif; ?>
								</select><label style="color:red;">*</label></p><p style="margin:5px 0;">文章标题：<input type="text" name="title" id="title" onkeyup="wleft();" Maxlength="<?php echo @TITLE_MAX_WORD;?>
" class="atitle" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
"><span>文章标题还能键入<span id="wordleft"><?php echo @TITLE_MAX_WORD;?>
</span>字</span><label  id="errMsg">*<?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</label></p>
					<textarea name="content1" style="width:700px;height:300px;visibility:hidden;"><?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>
</textarea>
					<br />
					<input type="submit" name="button" onsubmit="con_submit();" value="提交内容" /> (提交快捷键: Ctrl + Enter)<label>*<?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</label>
				</form>
			</div>
		</div>
	</div>
</body>
</html><?php }} ?>