<?php /* Smarty version Smarty-3.0.7, created on 2016-08-23 04:19:19
         compiled from "C:/wamp/www/GIT/skilloh/themes\scriptolution_error7.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1601457bc07075ee9d4-57389333%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f69c135b1848977b1f1f5445d14d22efa5e05d7a' => 
    array (
      0 => 'C:/wamp/www/GIT/skilloh/themes\\scriptolution_error7.tpl',
      1 => 1471688043,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1601457bc07075ee9d4-57389333',
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
