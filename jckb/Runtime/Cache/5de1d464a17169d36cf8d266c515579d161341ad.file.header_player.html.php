<?php /* Smarty version Smarty-3.1.6, created on 2015-11-17 10:40:33
         compiled from "D:\web\jpkc\plc\Home\View\Common\header_player.html" */ ?>
<?php /*%%SmartyHeaderCode:27121564a93a1bedd87-48577580%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5de1d464a17169d36cf8d266c515579d161341ad' => 
    array (
      0 => 'D:\\web\\jpkc\\plc\\Home\\View\\Common\\header_player.html',
      1 => 1434456517,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27121564a93a1bedd87-48577580',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'nav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_564a93a1c9fa3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564a93a1c9fa3')) {function content_564a93a1c9fa3($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\web\\jpkc\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $_smarty_tpl->tpl_vars['info']->value[0]['content'];?>
</title>
    <meta content="<?php echo $_smarty_tpl->tpl_vars['info']->value[3]['content'];?>
" name="keywords" />
    <meta content="<?php echo $_smarty_tpl->tpl_vars['info']->value[2]['content'];?>
" name="description" />
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
	<script type="text/javascript">
		function showTree(cur){
			var sub = cur.parentNode.parentNode.getElementsByTagName('ul');
			if(sub[0].style.display == 'none'){
				sub[0].style.display = 'block';
			}else{
				sub[0].style.display = 'none';
			}
		}
	</script>
</head>
<body>
	<div class="head">
		<div class="top">
			<div class="logo">
				<a href="<?php echo $_smarty_tpl->tpl_vars['info']->value[4]['content'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['info']->value[0]['content'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['info']->value[0]['content'];?>
"><img src="<?php echo @HOME_IMAGE_URL;?>
logo.png" alt="<?php echo $_smarty_tpl->tpl_vars['info']->value[0]['content'];?>
" /></a>
			</div>
		</div>
		<div class="nav">
			<ul class="navlist">
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['nav']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['max'] = (int)10;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['max']);
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
				<li class="navcell"><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>
</a></li>
				<?php endfor; endif; ?>
			</ul>
		</div>
		<div class="navshadow"></div>
	</div><?php }} ?>