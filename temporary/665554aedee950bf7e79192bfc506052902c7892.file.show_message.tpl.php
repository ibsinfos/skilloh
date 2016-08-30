<?php /* Smarty version Smarty-3.0.7, created on 2016-08-22 17:03:57
         compiled from "C:/wamp/www/GIT/skilloh/themes\administrator/show_message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:584357bb68bd5f4c21-44583210%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '665554aedee950bf7e79192bfc506052902c7892' => 
    array (
      0 => 'C:/wamp/www/GIT/skilloh/themes\\administrator/show_message.tpl',
      1 => 1471688043,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '584357bb68bd5f4c21-44583210',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('error')->value!=''){?>
								<ul class="messages">
                                    <li class="error-msg">
                                    	<ul><li><?php echo $_smarty_tpl->getVariable('error')->value;?>
</li></ul>
                                    </li>
                                </ul>
<?php }?>
<?php if ($_smarty_tpl->getVariable('message')->value!=''){?>
								<ul class="messages">
                                	<li class="success-msg">
                                    	<ul><li><?php echo $_smarty_tpl->getVariable('message')->value;?>
</li></ul>
                                    </li>
                                </ul>
<?php }?>
