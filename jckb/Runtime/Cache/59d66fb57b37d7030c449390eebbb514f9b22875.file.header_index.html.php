<?php /* Smarty version Smarty-3.1.6, created on 2015-11-16 15:52:14
         compiled from "D:\web\jpkc\pcl\Home\View\Common\header_index.html" */ ?>
<?php /*%%SmartyHeaderCode:1090456498b2ef195a6-62513288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59d66fb57b37d7030c449390eebbb514f9b22875' => 
    array (
      0 => 'D:\\web\\jpkc\\pcl\\Home\\View\\Common\\header_index.html',
      1 => 1433993545,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1090456498b2ef195a6-62513288',
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
  'unifunc' => 'content_56498b2f0f6ff',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56498b2f0f6ff')) {function content_56498b2f0f6ff($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\web\\jpkc\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
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
  		window.onload=function(){
        function getElement(id){
            return document.getElementById(id);
        }

        
        var speed=30;//滚动速度
        var demo=getElement("demo");
        var demo2=getElement("demo2");
        var demo1=getElement("demo1");
        demo2.innerHTML=demo1.innerHTML//复制demo1中的图片到demo2中
        
        function Marqueeleft(){//向左滚动
            if(demo2.offsetWidth-demo.scrollLeft<=0)
                demo.scrollLeft-=demo1.offsetWidth
            else
                demo.scrollLeft++
        }
        
        function Marqueeright(){//向右滚动
            if(demo2.offsetWidth-demo.scrollLeft>=565)
                demo.scrollLeft+=demo1.offsetWidth
            else
                demo.scrollLeft--
        }
    
        var MyMar=setInterval(Marqueeleft,speed)//自动开始滚动
        Direction='Left';//设定初始方向为向左滚
        demo.onmouseover=function() {clearInterval(MyMar)}
        demo.onmouseout=function() {
            if(Direction=='Left'){
                MyMar=setInterval(Marqueeleft,speed)
            }else if(Direction=='Right'){
                MyMar=setInterval(Marqueeright,speed)
            }
        };
        
        getElement('left').onclick=function(){
            clearInterval(MyMar);
            MyMar=setInterval(Marqueeleft,speed)
            Direction='Left';
        };
        getElement('left').onmouseover=function(){
            this.style.opacity=0.3;
            this.style.filter='alpha(opacity=30)';
        }   
        getElement('left').onmouseout=function(){
            this.style.opacity=0.05;
            this.style.filter='alpha(opacity=5)';
        }
    
        getElement('right').onclick=function(){
            clearInterval(MyMar);
            MyMar=setInterval(Marqueeright,speed)
            Direction='Right';
        };
        getElement('right').onmouseover=function(){
            this.style.opacity=0.3;
            this.style.filter='alpha(opacity=30)';
        }   
        getElement('right').onmouseout=function(){
            this.style.opacity=0.05;
            this.style.filter='alpha(opacity=5)';
        }
    }
  	</script>
</head>
<body>
	<div class="head">
		<div class="top">
			<div class="logo">
				<a href="<?php if ($_smarty_tpl->tpl_vars['info']->value[4]['content']){?><?php echo $_smarty_tpl->tpl_vars['info']->value[4]['content'];?>
<?php }else{ ?>/<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['info']->value[0]['content'];?>
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