<?php /* Smarty version Smarty-3.1.6, created on 2015-11-23 19:15:34
         compiled from "D:\web\jpkc\plc/Admin/View\Manage\modsingle.html" */ ?>
<?php /*%%SmartyHeaderCode:322125652f55611a275-70405197%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cc8e003341fcf42b594aab29bac9146f2d8eceb' => 
    array (
      0 => 'D:\\web\\jpkc\\plc/Admin/View\\Manage\\modsingle.html',
      1 => 1433992885,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '322125652f55611a275-70405197',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'err' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5652f5562fe9a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5652f5562fe9a')) {function content_5652f5562fe9a($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>修改单页 - <?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
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

			title.onblur = checkTitle;

			title.onfocus = function(){
				var errMsg = document.getElementById('errMsg');
				errMsg.innerHTML = '*';
			}
		}

		function checkTitle(){
			var title = document.getElementById('title');
			var errMsg = document.getElementById('errMsg');
			if(title.value.length == 0){
				errMsg.innerHTML = '*文章标题必须填写！';
				return 0;
			}
			return 1;
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
		<h2>单页内容修改</h2>
		<div class="wcon">
			<div class="editor">
				<form name="editor" method="post" onsubmit="return(checkTitle());">
					<p style="margin:5px 0;">文章标题：<input type="text" name="title" id="title" onkeyup="wleft();" Maxlength="<?php echo @TITLE_MAX_WORD;?>
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