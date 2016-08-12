<?php /* Smarty version Smarty-3.0.7, created on 2016-07-14 18:03:10
         compiled from "/home/skilohx6/public_html/dev/themes/administrator/show_message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27553652357880c1e0dcb57-53685123%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82eb3394956a798dd0f26ecdd0ff965fedccfb19' => 
    array (
      0 => '/home/skilohx6/public_html/dev/themes/administrator/show_message.tpl',
      1 => 1468533535,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27553652357880c1e0dcb57-53685123',
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
