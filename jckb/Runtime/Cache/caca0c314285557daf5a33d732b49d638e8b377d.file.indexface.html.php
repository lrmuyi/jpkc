<?php /* Smarty version Smarty-3.1.6, created on 2015-11-16 16:08:07
         compiled from "D:\web\jpkc\plc/Admin/View\Manage\indexface.html" */ ?>
<?php /*%%SmartyHeaderCode:1046456498ee75edbc4-65941472%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'caca0c314285557daf5a33d732b49d638e8b377d' => 
    array (
      0 => 'D:\\web\\jpkc\\plc/Admin/View\\Manage\\indexface.html',
      1 => 1434332420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1046456498ee75edbc4-65941472',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'banner' => 0,
    'c' => 0,
    'ui' => 0,
    's' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56498ee7d22a2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56498ee7d22a2')) {function content_56498ee7d22a2($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\web\\jpkc\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>首页内容指派</title>
	<link rel="stylesheet" href="<?php echo @HOME_IMAGE_URL;?>
css/main.css?v=<?php echo smarty_modifier_date_format(time(),"Ymd");?>
" media="screen"/>
	<!--[if lte IE 6]>
	<script src="<?php echo @HOME_JS_URL;?>
DD_belatedPNG_0.0.8a-min.js" type="text/javascript"></script>
	<script type="text/javascript">
	DD_belatedPNG.fix('div, ul, img, li, input, a, .logo,.boxhead,.boxhead2,.boxhead3,.boxmore');
	</script>
	<![endif]-->
	<style>
		.modban{
		    margin-top:140px;
		    width:200px;
		    background-color:white;
		    float:right;
		    border:1px dashed;
		    border-radius:5px;
		}
		.box{
			border:1px dashed;
		}
		.boxcon{text-indent:0;}
		.confirm{
			width:300px;
			height:150px;
			position: fixed;
			bottom:0px;
			right:10px;
			background-color: rgb(255,255,255);
			border:1px solid;
			border-radius: 5px;
		}
		.confirm span{
			display: block;
			margin-top:10px;
		}
		.sbtn{
			display:block;
			margin:20px auto;
			width:80px;
			height:40px;
		}
		.iconli{
			border:1px dotted;
		}
		.iconli a{
			display: block;
			width:220px;height:46px;
		}
		.btn{
			border:3px solid gray;
			border-radius: 10px;
			width:500px;
			height:350px;
			margin:auto;
			position: fixed;
			left:0;
			right:0;
			top:0;
			bottom:0;
			background-color: white;
			display: none;
		}
		.titbar{width:500px;}
		.titbar a{
			float:right;
		}
		.single{
			width:200px;
		}
		.single option{
			width:200px;
		}
	</style>
	<script type="text/javascript">
		window.onload=function(){
			var sels=document.getElementsByTagName('select');
			for(var i=0;i<sels.length;i+=2){
				isSingle(sels[i]);
			}
		}

		function isSingle(curBlock){
				var sel = curBlock.parentNode.getElementsByTagName('select');
				var sp  = curBlock.parentNode.getElementsByTagName('span');
			if(curBlock.value==0){
				sel[1].style.display = 'block';
				sp[0].style.display = 'block';
			}else{
				sel[1].value = '0';
				sel[1].style.display = 'none';
				sp[0].style.display = 'none';
			}
		}

		function cleancheck(){
			var chec = document.getElementById('resetbtn');
			chec.checked=false;
		}

		function isUpload(){
			var btn = document.getElementById('resetbtn');
			var upbtn = document.getElementById('uploadbtn');
			if(btn.checked!=true){
				upbtn.click();
			}
		}

		/*function showWindow(no){
			var win=document.getElementById('btn'+no);
			win.style.display='block';
		}
		function clWin(no){
			var win=document.getElementById('btn'+no);
			win.style.display='none';
		}*/
	</script>
</head>
<body>
	<form enctype="multipart/form-data" method="POST">
		<div class="wrap">
			<div class="topbanner"<?php if ($_smarty_tpl->tpl_vars['banner']->value!=''){?>style="background: url('<?php echo @__ROOT__;?>
<?php echo $_smarty_tpl->tpl_vars['banner']->value;?>
') no-repeat top center;"<?php }?>>
				<div class="modban">更改该图片(960×220):
					<input id="uploadbtn" type="file" onclick="cleancheck();" name="banner"/>
					使用默认：<input id="resetbtn" type="checkbox" name="bannReset" onclick="isUpload();" value="1" <?php if ($_smarty_tpl->tpl_vars['banner']->value==''){?>checked="checked"<?php }?>/>
				</div>
			</div>
			<!-- 区域1 -->
			<div class="box">
				<div class="boxhead">
					<span class="boxtitle"></span>
					<span class="boxmore"></span>
				</div>
				<div class="boxcon">
					该区域显示内容：<br/>
					<select id="cate" name="cate[]" onchange="isSingle(this);">
						<option disabled="disabled">
							请选择分类
						</option>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['c']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
						<option value ="<?php echo $_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id']==$_smarty_tpl->tpl_vars['ui']->value[0]['cid']){?>selected="selected"<?php }?>>
							<?php if ($_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['indent']>1){?>
								<?php echo preg_replace('!^!m',str_repeat("&nbsp;",(($_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['indent']-1)*3))," ");?>

								丨—<?php echo $_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>

							<?php }else{ ?>
								<?php echo $_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>

							<?php }?>
						</option>
						<?php endfor; endif; ?>
						<option value="0" <?php if ($_smarty_tpl->tpl_vars['ui']->value[0]['single']==1){?>selected="selected"<?php }?>>
							【单页文章】
						</option>
					</select>
					<br/>
					<span style="display:none;">请选择单页：</span>
					<select id="single" class="single" name="single[]" style="display:none;">
						<option disabled="disabled">
							请选择单页
						</option>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['s']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
						<option value ="<?php echo $_smarty_tpl->tpl_vars['s']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['tid'];?>
" <?php if ($_smarty_tpl->tpl_vars['s']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['tid']==$_smarty_tpl->tpl_vars['ui']->value[0]['tid']){?>selected="selected"<?php }?>>
							<?php if ($_smarty_tpl->tpl_vars['s']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['indent']>1){?>
								<?php echo preg_replace('!^!m',str_repeat("&nbsp;",(($_smarty_tpl->tpl_vars['s']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['indent']-1)*3))," ");?>

								丨—<?php echo $_smarty_tpl->tpl_vars['s']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>

							<?php }else{ ?>
								<?php echo $_smarty_tpl->tpl_vars['s']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>

							<?php }?>
						</option>
						<?php endfor; endif; ?>
					</select>
				</div>
			</div>
			<!-- 区域2 -->
			<div class="box middlebox">
				<div class="boxhead boxhead2">
					<span class="boxtitle"></span>
					<span class="boxmore"></span>
				</div>
				<div class="boxcon"><div class="boxtext">
					该区域显示内容：<br/>
					<select id="cate" name="cate[]" onchange="isSingle(this);">
						<option disabled="disabled">
							请选择分类
						</option>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['c']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
						<option value ="<?php echo $_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id']==$_smarty_tpl->tpl_vars['ui']->value[1]['cid']){?>selected="selected"<?php }?>>
							<?php if ($_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['indent']>1){?>
								<?php echo preg_replace('!^!m',str_repeat("&nbsp;",(($_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['indent']-1)*3))," ");?>

								丨—<?php echo $_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>

							<?php }else{ ?>
								<?php echo $_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>

							<?php }?>
						</option>
						<?php endfor; endif; ?>
						<option value="0" <?php if ($_smarty_tpl->tpl_vars['ui']->value[1]['single']==1){?>selected="selected"<?php }?>>
							【单页文章】
						</option>
					</select>
					<br/>
					<span style="display:none;">请选择单页：</span>
					<select id="single" class="single" name="single[]" style="display:none;">
						<option disabled="disabled">
							请选择单页
						</option>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['s']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
						<option value ="<?php echo $_smarty_tpl->tpl_vars['s']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['tid'];?>
" <?php if ($_smarty_tpl->tpl_vars['s']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['tid']==$_smarty_tpl->tpl_vars['ui']->value[1]['tid']){?>selected="selected"<?php }?>>
							<?php if ($_smarty_tpl->tpl_vars['s']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['indent']>1){?>
								<?php echo preg_replace('!^!m',str_repeat("&nbsp;",(($_smarty_tpl->tpl_vars['s']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['indent']-1)*3))," ");?>

								丨—<?php echo $_smarty_tpl->tpl_vars['s']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>

							<?php }else{ ?>
								<?php echo $_smarty_tpl->tpl_vars['s']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>

							<?php }?>
						</option>
						<?php endfor; endif; ?>
					</select>
				</div><div class="boximg"></div></div>
			</div>
			<div class="box">
				<div class="boxhead">
					<span class="boxtitle"></span>
					<span class="boxmore"></span>
				</div>
				<div class="boxcon">
					该区域显示内容：<br/>
					<select id="cate" name="cate[]" onchange="isSingle(this);">
						<option disabled="disabled">
							请选择分类
						</option>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['c']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
						<option value ="<?php echo $_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id']==$_smarty_tpl->tpl_vars['ui']->value[2]['cid']){?>selected="selected"<?php }?>>
							<?php if ($_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['indent']>1){?>
								<?php echo preg_replace('!^!m',str_repeat("&nbsp;",(($_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['indent']-1)*3))," ");?>

								丨—<?php echo $_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>

							<?php }else{ ?>
								<?php echo $_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>

							<?php }?>
						</option>
						<?php endfor; endif; ?>
						<option value="0" <?php if ($_smarty_tpl->tpl_vars['ui']->value[2]['single']==1){?>selected="selected"<?php }?>>
							【单页文章】
						</option>
					</select>
					<br/>
					<span style="display:none;">请选择单页：</span>
					<select id="single" class="single" name="single[]" style="display:none;">
						<option disabled="disabled">
							请选择单页
						</option>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['s']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
						<option value ="<?php echo $_smarty_tpl->tpl_vars['s']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['tid'];?>
" <?php if ($_smarty_tpl->tpl_vars['s']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['tid']==$_smarty_tpl->tpl_vars['ui']->value[2]['tid']){?>selected="selected"<?php }?>>
							<?php if ($_smarty_tpl->tpl_vars['s']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['indent']>1){?>
								<?php echo preg_replace('!^!m',str_repeat("&nbsp;",(($_smarty_tpl->tpl_vars['s']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['indent']-1)*3))," ");?>

								丨—<?php echo $_smarty_tpl->tpl_vars['s']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>

							<?php }else{ ?>
								<?php echo $_smarty_tpl->tpl_vars['s']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>

							<?php }?>
						</option>
						<?php endfor; endif; ?>
					</select>
				</div>
			</div>
			<div class="box iconbox">
				<div>
					<ul class="iconul">
						<li class="iconli" style="width:220px"><a href="javascript:void(0)" onclick="showWindow(1);"></a></li>
						<li class="iconli" style="width:220px"><a href="javascript:void(0)" onclick="showWindow(2);"></a></li>
						<li class="iconli" style="width:220px"><a href="javascript:void(0)" onclick="showWindow(3);"></a></li>
						<li class="iconli" style="width:220px"><a href="javascript:void(0)" onclick="showWindow(4);"></a></li>
					</ul>
				</div>
			</div>
			<div class="box">
				<div class="boxhead">
					<span class="boxtitle"></span>
					<span class="boxmore"></span>
				</div>
				<div class="boxcon">
					该区域显示内容：<br/>
					<select id="cate" name="cate[]" onchange="isSingle(this);">
						<option disabled="disabled">
							请选择分类
						</option>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['c']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
						<option value ="<?php echo $_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id']==$_smarty_tpl->tpl_vars['ui']->value[3]['cid']){?>selected="selected"<?php }?>>
							<?php if ($_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['indent']>1){?>
								<?php echo preg_replace('!^!m',str_repeat("&nbsp;",(($_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['indent']-1)*3))," ");?>

								丨—<?php echo $_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>

							<?php }else{ ?>
								<?php echo $_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>

							<?php }?>
						</option>
						<?php endfor; endif; ?>
						<option value="0" <?php if ($_smarty_tpl->tpl_vars['ui']->value[3]['single']==1){?>selected="selected"<?php }?>>
							【单页文章】
						</option>
					</select>
					<br/>
					<span style="display:none;">请选择单页：</span>
					<select id="single" class="single" name="single[]" style="display:none;">
						<option disabled="disabled">
							请选择单页
						</option>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['s']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
						<option value ="<?php echo $_smarty_tpl->tpl_vars['s']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['tid'];?>
" <?php if ($_smarty_tpl->tpl_vars['s']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['tid']==$_smarty_tpl->tpl_vars['ui']->value[3]['tid']){?>selected="selected"<?php }?>>
							<?php if ($_smarty_tpl->tpl_vars['s']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['indent']>1){?>
								<?php echo preg_replace('!^!m',str_repeat("&nbsp;",(($_smarty_tpl->tpl_vars['s']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['indent']-1)*3))," ");?>

								丨—<?php echo $_smarty_tpl->tpl_vars['s']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>

							<?php }else{ ?>
								<?php echo $_smarty_tpl->tpl_vars['s']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>

							<?php }?>
						</option>
						<?php endfor; endif; ?>
					</select>
				</div>
			</div>
			<div class="box">
				<div class="boxhead">
					<span class="boxtitle"></span>
					<span class="boxmore"></span>
				</div>
				<div class="boxcon">
					该区域显示内容：<br/>
					<select id="cate" name="cate[]" onchange="isSingle(this);">
						<option disabled="disabled">
							请选择分类
						</option>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['c']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
						<option value ="<?php echo $_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id']==$_smarty_tpl->tpl_vars['ui']->value[4]['cid']){?>selected="selected"<?php }?>>
							<?php if ($_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['indent']>1){?>
								<?php echo preg_replace('!^!m',str_repeat("&nbsp;",(($_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['indent']-1)*3))," ");?>

								丨—<?php echo $_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>

							<?php }else{ ?>
								<?php echo $_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>

							<?php }?>
						</option>
						<?php endfor; endif; ?>
						<option value="0" <?php if ($_smarty_tpl->tpl_vars['ui']->value[4]['single']==1){?>selected="selected"<?php }?>>
							【单页文章】
						</option>
					</select>
					<br/>
					<span style="display:none;">请选择单页：</span>
					<select id="single" class="single" name="single[]" style="display:none;">
						<option disabled="disabled">
							请选择单页
						</option>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['s']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
						<option value ="<?php echo $_smarty_tpl->tpl_vars['s']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['tid'];?>
" <?php if ($_smarty_tpl->tpl_vars['s']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['tid']==$_smarty_tpl->tpl_vars['ui']->value[4]['tid']){?>selected="selected"<?php }?>>
							<?php if ($_smarty_tpl->tpl_vars['s']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['indent']>1){?>
								<?php echo preg_replace('!^!m',str_repeat("&nbsp;",(($_smarty_tpl->tpl_vars['s']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['indent']-1)*3))," ");?>

								丨—<?php echo $_smarty_tpl->tpl_vars['s']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>

							<?php }else{ ?>
								<?php echo $_smarty_tpl->tpl_vars['s']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>

							<?php }?>
						</option>
						<?php endfor; endif; ?>
					</select>
				</div>
			</div>
			<div class="box">
				<div class="boxhead">
					<span class="boxtitle"></span>
					<span class="boxmore"></span>
				</div>
				<div class="boxcon">
					该区域显示内容：<br/>
					<select id="cate" name="cate[]" onchange="isSingle(this);">
						<option disabled="disabled">
							请选择分类
						</option>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['c']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
						<option value ="<?php echo $_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id']==$_smarty_tpl->tpl_vars['ui']->value[5]['cid']){?>selected="selected"<?php }?>>
							<?php if ($_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['indent']>1){?>
								<?php echo preg_replace('!^!m',str_repeat("&nbsp;",(($_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['indent']-1)*3))," ");?>

								丨—<?php echo $_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>

							<?php }else{ ?>
								<?php echo $_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>

							<?php }?>
						</option>
						<?php endfor; endif; ?>
						<option value="0" <?php if ($_smarty_tpl->tpl_vars['ui']->value[5]['single']==1){?>selected="selected"<?php }?>>
							【单页文章】
						</option>
					</select>
					<br/>
					<span style="display:none;">请选择单页：</span>
					<select id="single" class="single" name="single[]" style="display:none;">
						<option disabled="disabled">
							请选择单页
						</option>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['s']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
						<option value ="<?php echo $_smarty_tpl->tpl_vars['s']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['tid'];?>
" <?php if ($_smarty_tpl->tpl_vars['s']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['tid']==$_smarty_tpl->tpl_vars['ui']->value[5]['tid']){?>selected="selected"<?php }?>>
							<?php if ($_smarty_tpl->tpl_vars['s']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['indent']>1){?>
								<?php echo preg_replace('!^!m',str_repeat("&nbsp;",(($_smarty_tpl->tpl_vars['s']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['indent']-1)*3))," ");?>

								丨—<?php echo $_smarty_tpl->tpl_vars['s']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>

							<?php }else{ ?>
								<?php echo $_smarty_tpl->tpl_vars['s']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>

							<?php }?>
						</option>
						<?php endfor; endif; ?>
					</select>
				</div>
			</div>
			<div class="box longbox">
				<div class="boxhead boxhead3">
					<span class="boxtitle"></span>
					<span class="boxmore"></span>
				</div>
				<!--底部跑马灯-->
				<div class="marquee">
					<div id="outer">
						<div id="demo" >
						    <table width="565px" border="0"  cellpadding="0" bgcolor="#FFFFFF">
						        <tr>
						            <td id="demo1" valign="top">
						                <table border="0" align="center" cellpadding="0" cellspacing="0">
						                    <tr valign="top" >

						                        <td align="center" style="border:1px solid #FFFFFF;">
						                            <div>
						                                <img src="<?php echo @ADMIN_IMAGE_URL;?>
images.jpg" class="listimage" alt="abc123"/>
						                            </div>
						                        </td>
												<td align="center" style="border:1px solid #FFFFFF;">
						                            <div>
						                                <img src="<?php echo @ADMIN_IMAGE_URL;?>
images.jpg" class="listimage" alt="abc123"/>
						                            </div>
						                        </td>
						                        <td align="center" style="border:1px solid #FFFFFF;">
						                            <div>
						                                <img src="<?php echo @ADMIN_IMAGE_URL;?>
images.jpg" class="listimage" alt="abc123"/>
						                            </div>
						                        </td>
						                        <td align="center" style="border:1px solid #FFFFFF;">
						                            <div>
						                                <img src="<?php echo @ADMIN_IMAGE_URL;?>
images.jpg" class="listimage" alt="abc123"/>
						                            </div>
						                        </td>
						                        <td align="center" style="border:1px solid #FFFFFF;">
						                            <div>
						                                <img src="<?php echo @ADMIN_IMAGE_URL;?>
images.jpg" class="listimage" alt="abc123"/>
						                            </div>
						                        </td>
						                        <td align="center" style="border:1px solid #FFFFFF;">
						                            <div>
						                                <img src="<?php echo @ADMIN_IMAGE_URL;?>
images.jpg" class="listimage" alt="abc123"/>
						                            </div>
						                        </td>
						                    </tr>
						                </table>
						            </td>
						            <td id="demo2" valign="top"></td>
						        </tr>
						    </table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="btn" id="btn1"><div class="titbar"><a href="javascript:void(0)" onclick="clWin(1);"><img src="<?php echo @ADMIN_IMAGE_URL;?>
close.jpg" alt="关闭"></a></div></div>
		<div class="btn" id="btn2"><div class="titbar"><a href="javascript:void(0)" onclick="clWin(2);"><img src="<?php echo @ADMIN_IMAGE_URL;?>
close.jpg" alt="关闭"></a></div></div>
		<div class="btn" id="btn3"><div class="titbar"><a href="javascript:void(0)" onclick="clWin(3);"><img src="<?php echo @ADMIN_IMAGE_URL;?>
close.jpg" alt="关闭"></a></div></div>
		<div class="btn" id="btn4"><div class="titbar"><a href="javascript:void(0)" onclick="clWin(4);"><img src="<?php echo @ADMIN_IMAGE_URL;?>
close.jpg" alt="关闭"></a></div></div>
		<div class="confirm"><span>修改完记得保存(点击下面按钮保存)：<input type="submit" class="sbtn" value="保存"/><span></div>
	</form>
</body>
</html><?php }} ?>