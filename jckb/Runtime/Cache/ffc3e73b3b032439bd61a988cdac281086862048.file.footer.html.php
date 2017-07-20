<?php /* Smarty version Smarty-3.1.6, created on 2015-11-16 16:17:53
         compiled from "D:\web\jpkc\plc\Home\View\Common\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:177395649913116f0d6-99069145%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ffc3e73b3b032439bd61a988cdac281086862048' => 
    array (
      0 => 'D:\\web\\jpkc\\plc\\Home\\View\\Common\\footer.html',
      1 => 1434733386,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177395649913116f0d6-99069145',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'frd' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_564991311becc',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564991311becc')) {function content_564991311becc($_smarty_tpl) {?>	<div class="bottom">
		<?php if ($_smarty_tpl->tpl_vars['frd']->value[0]['lid']){?>
		<div class="frdbox">
			<ul>
				<li class="frdlink fl">友情链接：</li>
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['frd']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				<li class="frdlink"><a href="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['frd']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['url']);?>
" target="_blank"><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['frd']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title']);?>
</a></li>
				<?php endfor; endif; ?>
			</ul>
		</div>
		<?php }?>
		<p><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['info']->value[0]['content']);?>
</p>
		<p>Copyright @ 2015-2020 <?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['info']->value[1]['content']);?>
</p>
	</div>
</body>
</html><?php }} ?>