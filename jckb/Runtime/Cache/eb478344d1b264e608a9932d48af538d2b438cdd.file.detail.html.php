<?php /* Smarty version Smarty-3.1.6, created on 2015-11-24 10:29:54
         compiled from "D:\web\jpkc\gcsx/Home/View\Article\detail.html" */ ?>
<?php /*%%SmartyHeaderCode:42805653cba2a98401-15227722%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb478344d1b264e608a9932d48af538d2b438cdd' => 
    array (
      0 => 'D:\\web\\jpkc\\gcsx/Home/View\\Article\\detail.html',
      1 => 1434277998,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42805653cba2a98401-15227722',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'single' => 0,
    'data' => 0,
    'p' => 0,
    'aid' => 0,
    'sinlist' => 0,
    'tree' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5653cba2d0df6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5653cba2d0df6')) {function content_5653cba2d0df6($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncateutf8')) include 'D:\\web\\jpkc\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.truncateutf8.php';
?><?php echo $_smarty_tpl->getSubTemplate ("../Common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>''), 0);?>

	<div class="listwarp">
		<div class="catenavi"><span class="curposi"><label>当前位置：&nbsp;</label><a href="<?php echo $_smarty_tpl->tpl_vars['info']->value[4]['content'];?>
">Home</a> <?php if ($_smarty_tpl->tpl_vars['single']->value==1){?>-> <a href="<?php echo @__ROOT__;?>
/Article/<?php echo $_smarty_tpl->tpl_vars['data']->value['tid'];?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</a><?php }else{ ?><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
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
</a><?php endfor; endif; ?><?php }?> <span></div>
		<div class="list">
			<div class="catetreebox">
				<p class="catetitle"><?php if ($_smarty_tpl->tpl_vars['single']->value==1){?>文章单页<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['aid']->value['title'];?>
<?php }?></p>
				<ul class="ctreeul">
					<?php if ($_smarty_tpl->tpl_vars['single']->value==1){?>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['sinlist']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
					<li class="ctreelist <?php if ($_smarty_tpl->tpl_vars['sinlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['tid']==$_smarty_tpl->tpl_vars['data']->value['tid']){?>currdisp<?php }?>"><span class="ctreea"><a href="<?php echo @__ROOT__;?>
/Article/<?php echo $_smarty_tpl->tpl_vars['sinlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['tid'];?>
.html" alt="<?php echo $_smarty_tpl->tpl_vars['sinlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['sinlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>
"><img src="<?php echo @HOME_IMAGE_URL;?>
singleli.jpg"><?php echo smarty_modifier_truncateutf8($_smarty_tpl->tpl_vars['sinlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'],12);?>
<?php if ($_smarty_tpl->tpl_vars['sinlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['count']>18){?>...<?php }?></a></span></li>
					<?php endfor; endif; ?>
					<?php }else{ ?>
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
					<li class="ctreelist <?php if ($_smarty_tpl->tpl_vars['tree']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id']==$_smarty_tpl->tpl_vars['p']->value[0]['id']){?>currdisp<?php }?>"><span class="ctreea"><a href="javascript:void(0);" onclick="showTree(this);"><img src="<?php echo @HOME_IMAGE_URL;?>
liststyle.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['tree']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>
"></a><a href="<?php echo @__ROOT__;?>
/list/<?php echo $_smarty_tpl->tpl_vars['tree']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['tree']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>
</a></span>
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
				<?php }?>
				</ul>
			</div>
			<div class="listbox">
				<div class="listhead">
					<span class="artcate"><?php echo $_smarty_tpl->tpl_vars['p']->value[0]['title'];?>
</span>
				</div>
				<!--文章内容开始-->
				<div class="maintextbox">
						<h1 class="arttitle"><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</h1>
						<div class="artinfo">
							<span class="authorinfo">作者：<?php echo $_smarty_tpl->tpl_vars['data']->value['author'];?>
</span><span class="timeinfo"><?php echo $_smarty_tpl->tpl_vars['data']->value['rtime'];?>
</span>
						</div>
						<div class="maintext">
							<?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>

						</div>
						<div class="paging"></div>
				</div>
			</div>
		</div>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ("../Common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>