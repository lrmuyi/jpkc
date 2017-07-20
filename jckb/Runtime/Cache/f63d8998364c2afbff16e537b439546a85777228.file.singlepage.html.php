<?php /* Smarty version Smarty-3.1.6, created on 2015-11-16 16:45:07
         compiled from "D:\web\jpkc\plc/Admin/View\Manage\singlepage.html" */ ?>
<?php /*%%SmartyHeaderCode:74465649979312cfe7-39160240%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f63d8998364c2afbff16e537b439546a85777228' => 
    array (
      0 => 'D:\\web\\jpkc\\plc/Admin/View\\Manage\\singlepage.html',
      1 => 1433992771,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74465649979312cfe7-39160240',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'show' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56499793283b5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56499793283b5')) {function content_56499793283b5($_smarty_tpl) {?><!DOCTYPE html>
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
		<h2>单页管理</h2>
		<div class="listbox">
			<div class="listheader"><span><form style="display:inline;" action="<?php echo @__MODULE__;?>
/Manage/searchRes" method="GET"><label class="search"><input type="text" name="search"/><input type="submit" value="搜索"/></label></form><a href="<?php echo @__MODULE__;?>
/Manage/addSingle"><img src="<?php echo @ADMIN_IMAGE_URL;?>
addspbtn.png"/></a></span></div><hr style="width: 100%;"/>
			<form name="delete" method="POST" onsubmit="return confirm('确定要删除所选文章吗？');" action="<?php echo @__MODULE__;?>
/Manage/delSingle">
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
</a></span><span class="artcate">所属分类：单页</span><span class="modbtn"><a href="<?php echo @__MODULE__;?>
/Manage/modSingle/tid/<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['tid'];?>
">修改</a></span><span class="modbtn"><a href="javascript:void(0);" onclick="gopush(<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['tid'];?>
);">推送</a></span></li><hr/>
					<?php endfor; endif; ?>
				</ul>
		</div>
		<div class="bottom"><span class="selectall"><input type="checkbox" id="selectall" onclick="checkSelA();" name="selectall"><input type="submit" value="删除"></span><span class="recycle"><a href="<?php echo @__MODULE__;?>
/Manage/recycleSingle">单页回收站</a></span><span class="paging"><center style="margin-right: 60px;"><?php echo $_smarty_tpl->tpl_vars['show']->value;?>
</center></span></div>
			</form>
	</div>
</body>
</html><?php }} ?>