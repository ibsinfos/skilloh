<?php /* Smarty version Smarty-3.0.7, created on 2016-08-24 02:47:33
         compiled from "C:/wamp/www/GIT/skilloh/themes\scriptolution_order_selection.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2144457bd4305b823a6-56176332%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22d91ee5003944eddb03d34b303ab48dae2093e6' => 
    array (
      0 => 'C:/wamp/www/GIT/skilloh/themes\\scriptolution_order_selection.tpl',
      1 => 1471688043,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2144457bd4305b823a6-56176332',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('p')->value['price2']>"0"){?>
<?php $_template = new Smarty_Internal_Template('view_order_bit_ship.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<?php }elseif($_smarty_tpl->getVariable('p')->value['scriptolutionhasextras']=="1"){?>
<?php $_template = new Smarty_Internal_Template('view_order_bit_extras.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<?php }else{ ?>
<?php $_template = new Smarty_Internal_Template('view_order_bit.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<?php }?>