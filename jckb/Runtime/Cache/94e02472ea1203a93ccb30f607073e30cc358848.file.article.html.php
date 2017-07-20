<?php /* Smarty version Smarty-3.1.6, created on 2015-11-24 10:32:40
         compiled from "D:\web\jpkc\gcsx/Admin/View\Manage\article.html" */ ?>
<?php /*%%SmartyHeaderCode:292615653cc48abf868-84424813%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94e02472ea1203a93ccb30f607073e30cc358848' => 
    array (
      0 => 'D:\\web\\jpkc\\gcsx/Admin/View\\Manage\\article.html',
      1 => 1433997976,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '292615653cc48abf868-84424813',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'all' => 0,
    'id' => 0,
    'list' => 0,
    'i' => 0,
    'show' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5653cc48d55d9',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5653cc48d55d9')) {function content_5653cc48d55d9($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'D:\\web\\jpkc\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\function.math.php';
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>分类文章管理</title>
	<link rel="stylesheet" href="<?php echo @ADMIN_IMAGE_URL;?>
css/admin.css"/>
	<!--[if lte IE 7]>
		<link rel="stylesheet" href="<?php echo @ADMIN_IMAGE_URL;?>
css/adminLteIE7.css"/>
	<![endif]--> 
	<script type="text/javascript">
		var img_url = '<?php echo @ADMIN_IMAGE_URL;?>
';var module_url = '<?php echo @__MODULE__;?>
';
		function checkSelA(){

			var sel = document.getElementsByTagName('input');
			var selectall = document.getElementById('selectall');
			var len = sel.length;
			if(selectall.checked == true){
				for(var i=0;i<len;i++){
					if(sel[i].type == "checkbox" && sel[i].name == "delflag[]"){
						sel[i].checked = true;
					}
				}
			}else{
				for(var i=0;i<len;i++){
					if(sel[i].type == "checkbox" && sel[i].name == "delflag[]"){
						sel[i].checked = false;
					}
				}
			}	
		}

		function createRequest(){
			try{
				request = new XMLHttpRequest();
			}catch(tryMS){
				try{
					request = new ActiveXObject("Msxml2.XMLHTTP");
				}catch(otherMS){
					try{
						request = new ActiveXObject("Microsoft.XMLHTTP");
					}catch(failed){
						request = null;
					}
				}
			}
			return request;
		}

		function gopush(tid){
			request = createRequest();
			if(request == null){
				alert("内部错误，无法推送!,请联系管理员");
			}else{
				var url = module_url + "/Manage/pushArticle/tid/" + tid;
				request.onreadystatechange = pushHandler;
				request.open("GET",url,true);
				request.send(null);
			}
		}

		function pushHandler(){
			if(request.readyState == 4){
				if(request.status == 200){
					//$('checkcodeErr').innerHTML = request.responseText;
					if(request.responseText == 'true'){
						alert('该文章已推送至首页！');
					}else{
						alert(request.responseText);
					}
				}
			}
		}

	</script>
</head>
<body>
	<div class="wrap">
		<h2><select name="pid" language=javascript onchange="javascript:window.location.replace(this.options[this.selectedIndex].value)">
									<option disabled="disabled">
										请选择分类
									</option>
									<option value="<?php echo @__MODULE__;?>
/Manage/article/id/0">
										【全部分类】
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
									<option value ="<?php echo @__MODULE__;?>
/Manage/article/id/<?php echo $_smarty_tpl->tpl_vars['all']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['id']->value==$_smarty_tpl->tpl_vars['all']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id']){?>selected="selected"<?php }?>>
										<?php if ($_smarty_tpl->tpl_vars['all']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['indent']>1){?>
											<?php echo preg_replace('!^!m',str_repeat("&nbsp;",(($_smarty_tpl->tpl_vars['all']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['indent']-1)*3))," ");?>

											丨—<?php echo $_smarty_tpl->tpl_vars['all']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>

										<?php }else{ ?>
											<?php echo $_smarty_tpl->tpl_vars['all']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>

										<?php }?>
									</option>
									<?php endfor; endif; ?>
								</select></h2><h2 style="margin: 17px 0px 15px 81px;">内容管理</h2>
		<div class="listbox">
			<div class="listheader"><span><form style="display:inline;" action="<?php echo @__MODULE__;?>
/Manage/searchRes" method="GET"><label class="search"><select name="pid">
									<option disabled="disabled">
										请选择分类
									</option>
									<option value="0">
										【全部分类】
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
">
										<?php if ($_smarty_tpl->tpl_vars['all']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['indent']>1){?>
											<?php echo preg_replace('!^!m',str_repeat("&nbsp;",(($_smarty_tpl->tpl_vars['all']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['indent']-1)*3))," ");?>

											丨—<?php echo $_smarty_tpl->tpl_vars['all']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>

										<?php }else{ ?>
											<?php echo $_smarty_tpl->tpl_vars['all']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>

										<?php }?>
									</option>
									<?php endfor; endif; ?>
								</select><input type="text" name="search"/><input type="submit" value="搜索"/></label></form><a href="<?php echo @__MODULE__;?>
/Manage/addArticle/id/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><img src="<?php echo @ADMIN_IMAGE_URL;?>
addbtn.png"/></a></span></div><hr style="width: 100%;"/>
		<form name="delete" method="POST" onsubmit="return confirm('确定要删除所选文章吗？');" action="<?php echo @__MODULE__;?>
/Manage/delArticle">
		<!--文章循环开始-->
			<ul style="margin: 0px;">
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['list']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				<li><span class="delcheck"><input type="checkbox" id="sel[]" name="delflag[]" value="<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['tid'];?>
"></span><span class="articletitle"><a href="<?php echo @PHP_FILE;?>
/Article/<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['tid'];?>
.html" title="作者:<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['author'];?>
&nbsp;时间:<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['rtime'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>
</a></span><span class="artcate">所属分类：<?php $_smarty_tpl->tpl_vars["i"] = new Smarty_variable(0, null, 0);?><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['all']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?><?php if ($_smarty_tpl->tpl_vars['all']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']==$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['category']){?><?php echo $_smarty_tpl->tpl_vars['all']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title'];?>
<?php }else{ ?><?php echo smarty_function_math(array('equation'=>$_smarty_tpl->tpl_vars['i']->value+1,'assign'=>'i'),$_smarty_tpl);?>
<?php }?><?php endfor; endif; ?><?php if ($_smarty_tpl->tpl_vars['i']->value==count($_smarty_tpl->tpl_vars['all']->value)){?>无<?php }?></span><span class="modbtn"><a href="<?php echo @__MODULE__;?>
/Manage/modArticle/tid/<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['tid'];?>
">修改</a></span><span class="modbtn"><a href="javascript:void(0);" onclick="gopush(<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['tid'];?>
);">推送</a></span></li><hr/>
				<?php endfor; endif; ?>
			</ul>
		</div>
		<div class="bottom"><span class="selectall"><input type="checkbox" id="selectall" onclick="checkSelA();" name="selectall"><input type="submit" value="删除"></span><span class="recycle"><a href="<?php echo @__MODULE__;?>
/Manage/recycleArticle">回收站</a></span><span class="paging"><center style="margin-right: 60px;"><?php echo $_smarty_tpl->tpl_vars['show']->value;?>
</center></span></div>
		</form>
	</div>
</body>
</html><?php }} ?>