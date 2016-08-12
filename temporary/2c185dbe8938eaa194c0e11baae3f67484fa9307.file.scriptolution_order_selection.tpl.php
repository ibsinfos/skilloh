<?php /* Smarty version Smarty-3.0.7, created on 2016-08-07 06:43:46
         compiled from "/home/skilohx6/public_html/dev/themes/scriptolution_order_selection.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10944518157a710e23089f0-54765376%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c185dbe8938eaa194c0e11baae3f67484fa9307' => 
    array (
      0 => '/home/skilohx6/public_html/dev/themes/scriptolution_order_selection.tpl',
      1 => 1468533466,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10944518157a710e23089f0-54765376',
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