<?php /* Smarty version Smarty-3.0.7, created on 2016-08-07 08:12:06
         compiled from "/home/skilohx6/public_html/dev/themes/administrator/gigs_extras_bit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29046948657a7259687cdf9-79624049%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f74145bde1471ce7ef17f1ccebd9f5ee66d6cfaa' => 
    array (
      0 => '/home/skilohx6/public_html/dev/themes/administrator/gigs_extras_bit.tpl',
      1 => 1468533719,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29046948657a7259687cdf9-79624049',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_smarty_tpl->assign('extras' , insert_get_extras (array('value' => 'a', 'PID' => $_smarty_tpl->getVariable('subresults')->value['PID']),$_smarty_tpl), true);?>
<?php if (count($_smarty_tpl->getVariable('extras')->value)>0){?>
<br /><b>THIS GIG HAS THE FOLLOWING EXTRAS: </b>
<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('extras')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
<br />- <?php echo $_smarty_tpl->getVariable('lang62')->value;?>
 <?php echo stripslashes($_smarty_tpl->getVariable('extras')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['etitle']);?>
 <?php echo $_smarty_tpl->getVariable('lange1')->value;?>
 <?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php echo stripslashes($_smarty_tpl->getVariable('extras')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['eprice']);?>
 <a href="<?php echo $_smarty_tpl->getVariable('adminurl')->value;?>
/scriptolution_edit_extra.php?EID=<?php echo $_smarty_tpl->getVariable('extras')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['EID'];?>
">[EDIT]</a>
<?php endfor; endif; ?>	
<?php }?>
