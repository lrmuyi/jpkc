<?php /* Smarty version Smarty-3.1.6, created on 2015-11-16 16:34:04
         compiled from "D:\web\jpkc\plc/Home/View\Article\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:401564994fcddfe31-04208112%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6dea86e49032075bf6edf41e82d0c97a916794cd' => 
    array (
      0 => 'D:\\web\\jpkc\\plc/Home/View\\Article\\showlist.html',
      1 => 1434381580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '401564994fcddfe31-04208112',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'p' => 0,
    'aid' => 0,
    'tree' => 0,
    'i' => 0,
    'list' => 0,
    'show' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_564994fd0bb65',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564994fd0bb65')) {function content_564994fd0bb65($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../Common/header_list.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div class="wrap listwarp">
		<div class="catenavi"><span class="curposi"><label>当前位置：&nbsp;</label><a href="<?php echo @__ROOT__;?>
">Home</a> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'] = (int)-1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] = ((int)-1) == 0 ? 1 : (int)-1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['p']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop']-1);
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
?>-> <a href="<?php echo @__ROOT__;?>
/list/<?php echo $_smarty_tpl->tpl_vars['p']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['p']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>
</a><?php endfor; endif; ?> <span></div>
		<div class="list">
			<div class="catetreebox">
				<p class="catetitle"><a href="<?php echo @__ROOT__;?>
/list/<?php echo $_smarty_tpl->tpl_vars['aid']->value['id'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['aid']->value['title'];?>
</a></p>
				<ul class="ctreeul">
					<?php $_smarty_tpl->tpl_vars["i"] = new Smarty_variable(0, null, 0);?>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tree']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
					<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
					<?php if ($_smarty_tpl->tpl_vars['tree']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['indent']==1){?>
					<li class="ctreelist <?php if ($_smarty_tpl->tpl_vars['tree']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id']==$_smarty_tpl->tpl_vars['p']->value[0]['id']){?>currdisp<?php }?>"><span class="ctreea"><span class="treeImg"><a href="javascript:void(0);" onclick="showTree(this);"><img src="<?php echo @HOME_IMAGE_URL;?>
liststyle.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['tree']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>
"></a></span><span class="treeText"><a href="<?php echo @__ROOT__;?>
/list/<?php echo $_smarty_tpl->tpl_vars['tree']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id'];?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['tree']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['tree']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['tree']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>
</a></span></span>
						<?php }elseif($_smarty_tpl->tpl_vars['tree']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['indent']==2){?>
						<?php if ($_smarty_tpl->tpl_vars['tree']->value[$_smarty_tpl->tpl_vars['i']->value-2]['indent']==1){?>
						<ul class="sublist"><?php }?>
							<li <?php if ($_smarty_tpl->tpl_vars['tree']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id']==$_smarty_tpl->tpl_vars['p']->value[0]['id']){?>class="currdisp"<?php }?>><span class="ctreea"><a href="<?php echo @__ROOT__;?>
/list/<?php echo $_smarty_tpl->tpl_vars['tree']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id'];?>
.html"><img src="<?php echo @HOME_IMAGE_URL;?>
lisym.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['tree']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>
"></a><a href="<?php echo @__ROOT__;?>
/list/<?php echo $_smarty_tpl->tpl_vars['tree']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['tree']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>
</a></span></li>
						<?php if ($_smarty_tpl->tpl_vars['tree']->value[$_smarty_tpl->tpl_vars['i']->value]['indent']==1||$_smarty_tpl->tpl_vars['tree']->value[$_smarty_tpl->tpl_vars['i']->value]['indent']==''){?>	
						</ul>
						<?php }?>
						<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['tree']->value[$_smarty_tpl->tpl_vars['i']->value]['indent']==1||$_smarty_tpl->tpl_vars['tree']->value[$_smarty_tpl->tpl_vars['i']->value]['indent']==''){?>
					</li>
					<?php }?>
				<?php endfor; endif; ?>
				</ul>
			</div>
			<div class="listbox">
				<div class="listhead">
					<span class="artcate"><?php echo $_smarty_tpl->tpl_vars['p']->value[0]['title'];?>
</span>
				</div>
				<div>
					<ul class="showul">
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
						<li class="showlist"><a class="showtitle" href="<?php echo @__ROOT__;?>
/Article/<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['tid'];?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>
</a><a class="listtime" href="<?php echo @__ROOT__;?>
/Article/<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['tid'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['rtime'];?>
</a></li>
					<?php endfor; endif; ?>
					</ul>
					<?php echo $_smarty_tpl->tpl_vars['show']->value;?>

				</div>
			</div>
		</div>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ("../Common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>