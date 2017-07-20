<?php /* Smarty version Smarty-3.1.6, created on 2015-11-16 20:20:03
         compiled from "D:\web\jpkc\plc/Admin/View\Manage\recyclearticle.html" */ ?>
<?php /*%%SmartyHeaderCode:227625649c9f36038c1-90392671%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b7557d32f1e5da5c435fc079daee195a92d559f' => 
    array (
      0 => 'D:\\web\\jpkc\\plc/Admin/View\\Manage\\recyclearticle.html',
      1 => 1433992750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '227625649c9f36038c1-90392671',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'all' => 0,
    'show' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5649c9f37a71f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5649c9f37a71f')) {function content_5649c9f37a71f($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="Cache-Control" content="no-cache, must-revalidate">
	<meta http-equiv="expires" content="Wed, 26 Feb 1997 08:21:57 GMT">
	<title>文章回收站</title>
	<link rel="stylesheet" href="<?php echo @ADMIN_IMAGE_URL;?>
css/admin.css"/>
	<!--[if lte IE 7]>
		<link rel="stylesheet" href="<?php echo @ADMIN_IMAGE_URL;?>
css/adminLteIE7.css"/>
	<![endif]-->
	<script type="text/javascript">
		var module_url = '<?php echo @__MODULE__;?>
';

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

		function goRecycle(tid,cate){
			request = createRequest();
			if(request == null){
				alert("内部错误，无法还原所选文章!,请联系管理员");
			}else{
				var url = module_url+"/Manage/recycleArticle/re/"+tid+"/cate/"+cate;
				request.onreadystatechange = recycleHandler;
				request.open("GET",url,true);
				request.send(null);
			}
		}

		function recycleHandler(){
			if(request.readyState == 4){
				if(request.status == 200){
					if(request.responseText == 'true'){
						alert('文章已还原成功！');
					}else{
						alert(request.responseText);
					}
				}
			}
		}

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

		function checkOption(cur,tid){
			var cate = cur.parentNode.parentNode.getElementsByTagName('select');
			if(cate[0].value == 0){
				alert('请选择文章分类！');
				return 0;
			}

			goRecycle(tid,cate[0].value);
			cur.parentNode.parentNode.remove();
		}
	</script>
</head>
<body>
	<div class="wrap">
		<h2>文章回收站</h2>
		<form name="delete" method="POST" onsubmit="return confirm('是否确定删除所选文章？');">
		<div class="listbox">
			<ul class="reul">
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
				<li class="reli">
					<span class="delcheck"><input type="checkbox" id="sel[]" name="delflag[]" value="<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['tid'];?>
" /></span>
					<span class="articletitle rearttitle"><a href="<?php echo @PHP_FILE;?>
/Article/<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['tid'];?>
.html" title="作者:<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['author'];?>
&nbsp;时间:<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['rtime'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>
</a></span>
					<span class="cateop">
						<select name="pid">
							<option disabled="disabled">
								请选择分类
							</option>
							<option value="0">
								【无分类】
							</option>
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
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
?>
							<option value ="<?php echo $_smarty_tpl->tpl_vars['all']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['category']==$_smarty_tpl->tpl_vars['all']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']){?>selected="selected"<?php }?>>
								<?php if ($_smarty_tpl->tpl_vars['all']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['indent']>1){?>
									<?php echo preg_replace('!^!m',str_repeat("&nbsp;",(($_smarty_tpl->tpl_vars['all']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['indent']-1)*3))," ");?>

									丨—<?php echo $_smarty_tpl->tpl_vars['all']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title'];?>

								<?php }else{ ?>
									<?php echo $_smarty_tpl->tpl_vars['all']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title'];?>

								<?php }?>
							</option>
							<?php endfor; endif; ?>
						</select>
					</span>
					<span class="modbtn"><a href="javascript:void(0);" onclick="checkOption(this,<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['tid'];?>
);">还原</a></span></li>
				<?php endfor; endif; ?>
			</ul>
		</div>
		<div class="bottom"><span class="selectall"><input type="checkbox" id="selectall" onclick="checkSelA();" name="selectall"><input type="submit" value="彻底删除"></span><span class="paging"><center><?php echo $_smarty_tpl->tpl_vars['show']->value;?>
</center></span></div>
		</form>
	</div>
</body>
</html><?php }} ?>