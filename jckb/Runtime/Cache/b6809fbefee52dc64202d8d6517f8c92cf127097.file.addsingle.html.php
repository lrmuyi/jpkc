<?php /* Smarty version Smarty-3.1.6, created on 2015-11-16 16:51:54
         compiled from "D:\web\jpkc\plc/Admin/View\Manage\addsingle.html" */ ?>
<?php /*%%SmartyHeaderCode:39505649992abf4453-22104841%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6809fbefee52dc64202d8d6517f8c92cf127097' => 
    array (
      0 => 'D:\\web\\jpkc\\plc/Admin/View\\Manage\\addsingle.html',
      1 => 1433992829,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '39505649992abf4453-22104841',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'temp' => 0,
    'err' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5649992ad2e40',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5649992ad2e40')) {function content_5649992ad2e40($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>创建新单页</title>
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
			var con = document.getElementById('con');
			var errMsg = document.getElementById('errMsg');
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
				return false;
			}
			return 1;
		}

		//检查内容字数
		/*function checkContent(){
			if(checkTitle()!=1){
				return false;
			}
			var content = document.getElementById('con');
			var errMsg = document.getElementById('errMsg2');
			if(content.value.length < 10){
				errMsg.innerHTML= '内容为空或字数太少！';
				return false;
			}
		}*/

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
		<h2>内容管理</h2>
		<div class="wcon">
			<div class="editor">
				<form name="editor" method="post" onsubmit="return(checkContent());">
					<p style="margin:5px 0;">文章标题：<input type="text" name="title" id="title" onkeyup="wleft();" Maxlength="<?php echo @TITLE_MAX_WORD;?>
" class="atitle" value="<?php echo $_smarty_tpl->tpl_vars['temp']->value['title'];?>
"><span>文章标题还能键入<span id="wordleft"><?php echo @TITLE_MAX_WORD;?>
</span>字</span><label  id="errMsg">*<?php echo $_smarty_tpl->tpl_vars['err']->value['title'];?>
</label></p>
					<textarea name="content1" id="con" style="width:700px;height:300px;visibility:hidden;"><?php echo $_smarty_tpl->tpl_vars['temp']->value['content1'];?>
</textarea>
					<br />
					<input type="submit" name="button" onsubmit="con_submit();" value="提交内容" /> (提交快捷键: Ctrl + Enter)<label id="errMsg">*<?php echo $_smarty_tpl->tpl_vars['err']->value['content1'];?>
</label><label id="errMsg2"><?php echo $_smarty_tpl->tpl_vars['err']->value['title'];?>
</label>
				</form>
			</div>
		</div>
	</div>
</body>
</html><?php }} ?>