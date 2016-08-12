<?php /* Smarty version Smarty-3.0.7, created on 2016-07-15 03:46:14
         compiled from "/home/skilohx6/public_html/dev/themes/scriptolution_error7.tpl" */ ?>
<?php /*%%SmartyHeaderCode:556750717578894c65a8488-05576030%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9d9b03205845cf10c7b394e0999332cd40b38d9' => 
    array (
      0 => '/home/skilohx6/public_html/dev/themes/scriptolution_error7.tpl',
      1 => 1468533460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '556750717578894c65a8488-05576030',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('error')->value!=''){?>
<div class='scriptolution_error'>
	<p><?php echo $_smarty_tpl->getVariable('error')->value;?>
</p>
</div>
<?php }?>
<?php if ($_smarty_tpl->getVariable('message')->value!=''){?>
<div class='scriptolution_success'>
    <p><?php echo $_smarty_tpl->getVariable('message')->value;?>
</p>
</div>
<?php }?>
<?php if ($_smarty_tpl->getVariable('snotice')->value!=''){?>
<div class='scriptolution_notice'>
    <p><?php echo $_smarty_tpl->getVariable('snotice')->value;?>
</p>
</div>
<?php }?>
