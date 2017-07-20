<?php /* Smarty version Smarty-3.1.6, created on 2015-10-15 08:06:59
         compiled from "D:\web\jpkc\gcsx/Home/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:23722561eee23cf3d77-44713051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfc0b6d175b42b535851c728b3b3394a91533a65' => 
    array (
      0 => 'D:\\web\\jpkc\\gcsx/Home/View\\Index\\index.html',
      1 => 1434562667,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23722561eee23cf3d77-44713051',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'ui' => 0,
    'push' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_561eee2434c1d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561eee2434c1d')) {function content_561eee2434c1d($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncateutf8')) include 'D:\\web\\jpkc\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.truncateutf8.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\web\\jpkc\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("../Common/header_index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div class="wrap">
		<div class="topbanner"<?php if ($_smarty_tpl->tpl_vars['info']->value[8]['content']!=''){?>style="background: url('<?php echo @__ROOT__;?>
<?php echo $_smarty_tpl->tpl_vars['info']->value[8]['content'];?>
') no-repeat top center;"<?php }?>></div>
		<div class="box">
			<div class="boxhead">
				<span class="boxtitle"><?php echo smarty_modifier_truncateutf8($_smarty_tpl->tpl_vars['ui']->value[0]['info']['title'],19);?>
</span>
				<span class="boxmore"><a href="<?php echo @__ROOT__;?>
/<?php if ($_smarty_tpl->tpl_vars['ui']->value[0]['single']==1){?>article/<?php echo $_smarty_tpl->tpl_vars['ui']->value[0]['tid'];?>
<?php }else{ ?>list/<?php echo $_smarty_tpl->tpl_vars['ui']->value[0]['cid'];?>
<?php }?>.html"><img src="<?php echo @HOME_IMAGE_URL;?>
boxmore.png"/></a></span>
			</div>
			<div class="boxcon">
				<?php if ($_smarty_tpl->tpl_vars['ui']->value[0]['single']==1){?>
				<a href="<?php echo @__ROOT__;?>
/article/<?php echo $_smarty_tpl->tpl_vars['ui']->value[0]['tid'];?>
.html"><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['ui']->value[0]['info']['content']);?>

				</a>
			<?php }else{ ?>
				<ul class="boxlist">
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ui']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['max'] = (int)6;
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
					<li><a href="<?php echo @__ROOT__;?>
/article/<?php echo $_smarty_tpl->tpl_vars['ui']->value[0]['artlist'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['tid'];?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['ui']->value[0]['artlist'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['ui']->value[0]['artlist'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>
</a></li>
					<?php endfor; endif; ?>
				</ul>
			<?php }?>
			</div>
		</div>
		<div class="box middlebox">
			<div class="boxhead boxhead2">
				<span class="boxtitle"><?php echo smarty_modifier_truncateutf8($_smarty_tpl->tpl_vars['ui']->value[1]['info']['title'],50);?>
</span>
				<span class="boxmore"><a href="<?php echo @__ROOT__;?>
/<?php if ($_smarty_tpl->tpl_vars['ui']->value[1]['single']==1){?>article/<?php echo $_smarty_tpl->tpl_vars['ui']->value[1]['tid'];?>
<?php }else{ ?>list/<?php echo $_smarty_tpl->tpl_vars['ui']->value[1]['cid'];?>
<?php }?>.html"><img src="<?php echo @HOME_IMAGE_URL;?>
boxmore.png"/></a></span>
			</div>
			<div class="boxcon">
			<?php if ($_smarty_tpl->tpl_vars['ui']->value[1]['single']==1){?>
				<div class="boxtext">
					<a href="<?php echo @__ROOT__;?>
/article/<?php echo $_smarty_tpl->tpl_vars['ui']->value[1]['tid'];?>
.html"><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['ui']->value[1]['info']['content']);?>

					</a>
				</div><div class="boximg"><a href="<?php echo @__ROOT__;?>
/article/<?php echo $_smarty_tpl->tpl_vars['ui']->value[1]['tid'];?>
.html"><img src="<?php echo @ATTACHED_IMG_URL;?>
<?php if ($_smarty_tpl->tpl_vars['ui']->value[1]['info']['cover']){?><?php echo $_smarty_tpl->tpl_vars['ui']->value[1]['info']['cover'];?>
_s.jpg<?php }else{ ?>nopic.jpg_s.jpg<?php }?>" alt="<?php echo $_smarty_tpl->tpl_vars['ui']->value[1]['info']['title'];?>
"></a></div>
					<?php }else{ ?>
					<ul class="boxlist box2list">
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ui']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['max'] = (int)6;
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
						<li><a href="<?php echo @__ROOT__;?>
/article/<?php echo $_smarty_tpl->tpl_vars['ui']->value[1]['artlist'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['tid'];?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['ui']->value[1]['artlist'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>
"><img src="<?php echo @HOME_IMAGE_URL;?>
lisym.jpg" title="linesymbol"/><?php echo $_smarty_tpl->tpl_vars['ui']->value[1]['artlist'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>
</a><span class="litime"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['ui']->value[1]['artlist'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['rtime'],"%Y-%m-%d");?>
</span></li>
						<?php endfor; endif; ?>
					</ul>
				<?php }?>
			</div>
		</div>
		<div class="box">
			<div class="boxhead">
				<span class="boxtitle"><?php echo smarty_modifier_truncateutf8($_smarty_tpl->tpl_vars['ui']->value[2]['info']['title'],19);?>
</span>
				<span class="boxmore"><a href="<?php echo @__ROOT__;?>
/<?php if ($_smarty_tpl->tpl_vars['ui']->value[2]['single']==1){?>article/<?php echo $_smarty_tpl->tpl_vars['ui']->value[2]['tid'];?>
<?php }else{ ?>list/<?php echo $_smarty_tpl->tpl_vars['ui']->value[2]['cid'];?>
<?php }?>.html"><img src="<?php echo @HOME_IMAGE_URL;?>
boxmore.png"/></a></span>
			</div>
			<div class="boxcon">
				<?php if ($_smarty_tpl->tpl_vars['ui']->value[2]['single']==1){?>
				<a href="<?php echo @__ROOT__;?>
/article/<?php echo $_smarty_tpl->tpl_vars['ui']->value[2]['tid'];?>
.html"><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['ui']->value[2]['info']['content']);?>

				</a>
			<?php }else{ ?>
				<ul class="boxlist">
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ui']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['max'] = (int)6;
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
					<li><a href="<?php echo @__ROOT__;?>
/article/<?php echo $_smarty_tpl->tpl_vars['ui']->value[2]['artlist'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['tid'];?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['ui']->value[2]['artlist'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['ui']->value[2]['artlist'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>
</a></li>
					<?php endfor; endif; ?>
				</ul>
			<?php }?>
			</div>
		</div>
		<div class="box iconbox">
			<div>
				<ul class="iconul">
					<li class="iconli"><a href="#"><img src="<?php echo @HOME_IMAGE_URL;?>
icon1.jpg" alt="icon1"></a></li>
					<li class="iconli"><a href="#"><img src="<?php echo @HOME_IMAGE_URL;?>
icon2.jpg" alt="icon2"></a></li>
					<li class="iconli"><a href="#"><img src="<?php echo @HOME_IMAGE_URL;?>
icon3.jpg" alt="icon3"></a></li>
					<li class="iconli"><a href="#"><img src="<?php echo @HOME_IMAGE_URL;?>
icon4.jpg" alt="icon4"></a></li>
				</ul>
			</div>
		</div>
		<div class="box">
			<div class="boxhead">
				<span class="boxtitle"><?php echo smarty_modifier_truncateutf8($_smarty_tpl->tpl_vars['ui']->value[3]['info']['title'],19);?>
</span>
				<span class="boxmore"><a href="<?php echo @__ROOT__;?>
/<?php if ($_smarty_tpl->tpl_vars['ui']->value[3]['single']==1){?>article/<?php echo $_smarty_tpl->tpl_vars['ui']->value[3]['tid'];?>
<?php }else{ ?>list/<?php echo $_smarty_tpl->tpl_vars['ui']->value[3]['cid'];?>
<?php }?>.html"><img src="<?php echo @HOME_IMAGE_URL;?>
boxmore.png"/></a></span>
			</div>
			<div class="boxcon">
				<?php if ($_smarty_tpl->tpl_vars['ui']->value[3]['single']==1){?>
				<a href="<?php echo @__ROOT__;?>
/article/<?php echo $_smarty_tpl->tpl_vars['ui']->value[3]['tid'];?>
.html"><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['ui']->value[3]['info']['content']);?>

				</a>
			<?php }else{ ?>
				<ul class="boxlist">
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ui']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['max'] = (int)6;
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
					<li><a href="<?php echo @__ROOT__;?>
/article/<?php echo $_smarty_tpl->tpl_vars['ui']->value[3]['artlist'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['tid'];?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['ui']->value[3]['artlist'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['ui']->value[3]['artlist'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>
</a></li>
					<?php endfor; endif; ?>
				</ul>
			<?php }?>
			</div>
		</div>
		<div class="box">
			<div class="boxhead">
				<span class="boxtitle"><?php echo smarty_modifier_truncateutf8($_smarty_tpl->tpl_vars['ui']->value[4]['info']['title'],19);?>
</span>
				<span class="boxmore"><a href="<?php echo @__ROOT__;?>
/<?php if ($_smarty_tpl->tpl_vars['ui']->value[4]['single']==1){?>article/<?php echo $_smarty_tpl->tpl_vars['ui']->value[4]['tid'];?>
<?php }else{ ?>list/<?php echo $_smarty_tpl->tpl_vars['ui']->value[4]['cid'];?>
<?php }?>.html"><img src="<?php echo @HOME_IMAGE_URL;?>
boxmore.png"/></a></span>
			</div>
			<div class="boxcon">
				<?php if ($_smarty_tpl->tpl_vars['ui']->value[4]['single']==1){?>
				<a href="<?php echo @__ROOT__;?>
/article/<?php echo $_smarty_tpl->tpl_vars['ui']->value[4]['tid'];?>
.html"><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['ui']->value[4]['info']['content']);?>

				</a>
			<?php }else{ ?>
				<ul class="boxlist">
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ui']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['max'] = (int)6;
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
					<li><a href="<?php echo @__ROOT__;?>
/article/<?php echo $_smarty_tpl->tpl_vars['ui']->value[4]['artlist'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['tid'];?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['ui']->value[4]['artlist'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['ui']->value[4]['artlist'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>
</a></li>
					<?php endfor; endif; ?>
				</ul>
			<?php }?>
			</div>
		</div>
		<div class="box">
			<div class="boxhead">
				<span class="boxtitle"><?php echo smarty_modifier_truncateutf8($_smarty_tpl->tpl_vars['ui']->value[5]['info']['title'],19);?>
</span>
				<span class="boxmore"><a href="<?php echo @__ROOT__;?>
/<?php if ($_smarty_tpl->tpl_vars['ui']->value[5]['single']==1){?>article/<?php echo $_smarty_tpl->tpl_vars['ui']->value[5]['tid'];?>
<?php }else{ ?>list/<?php echo $_smarty_tpl->tpl_vars['ui']->value[5]['cid'];?>
<?php }?>.html"><img src="<?php echo @HOME_IMAGE_URL;?>
boxmore.png"/></a></span>
			</div>
			<div class="boxcon">
				<?php if ($_smarty_tpl->tpl_vars['ui']->value[5]['single']==1){?>
				<a href="<?php echo @__ROOT__;?>
/article/<?php echo $_smarty_tpl->tpl_vars['ui']->value[5]['tid'];?>
"><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['ui']->value[5]['info']['content']);?>

				</a>
			<?php }else{ ?>
				<ul class="boxlist">
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ui']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['max'] = (int)6;
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
					<li><a href="<?php echo @__ROOT__;?>
/article/<?php echo $_smarty_tpl->tpl_vars['ui']->value[5]['artlist'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['tid'];?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['ui']->value[5]['artlist'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['ui']->value[5]['artlist'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>
</a></li>
					<?php endfor; endif; ?>
				</ul>
			<?php }?>
			</div>
		</div>
		<div class="box longbox">
			<div class="boxhead boxhead3">
				<span class="boxtitle">图片展示</span>
			</div>
			<!--底部跑马灯-->
			<div class="marquee">
				<div id="outer">
					<a href="#nogo" hidefocus id="left"><img src="<?php echo @HOME_IMAGE_URL;?>
Left.png" /></a>
					<div id="demo" >
					    <table width="565px" border="0"  cellpadding="0" bgcolor="#FFFFFF">
					        <tr>
					            <td id="demo1" valign="top">
					                <table border="0" align="center" cellpadding="0" cellspacing="0">
					                    <tr valign="top" >
											<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['push']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['max'] = (int)16;
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
					                        <td align="center" style="border:1px solid #FFFFFF;">
					                            <a href="<?php echo @__ROOT__;?>
/article/<?php echo $_smarty_tpl->tpl_vars['push']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['tid'];?>
.html" class="listname" title="<?php echo $_smarty_tpl->tpl_vars['push']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>
" target="_blank">
					                            	<div class="listimage" style="background:url('<?php echo @ATTACHED_IMG_URL;?>
<?php if ($_smarty_tpl->tpl_vars['push']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['cover']){?><?php echo $_smarty_tpl->tpl_vars['push']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['cover'];?>
_s.jpg<?php }else{ ?>nopic.jpg_s.jpg<?php }?>') no-repeat center;background-size: cover;">
					                                    <span class="imgtitle"><?php echo $_smarty_tpl->tpl_vars['push']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>
</span>
					                                
					                            	</div>
					                            </a>
					                        </td>
					                        <?php endfor; endif; ?>
					                    </tr>
					                </table>
					            </td>
					            <td id="demo2" valign="top"></td>
					        </tr>
					    </table>
					</div>
					<a href="#nogo" hidefocus id="right"><img src="<?php echo @HOME_IMAGE_URL;?>
Right.png" /></a>
				</div>
			</div>
		</div>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ("../Common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>