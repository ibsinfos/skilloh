<?php /* Smarty version Smarty-3.0.7, created on 2016-08-22 17:03:37
         compiled from "C:/wamp/www/GIT/skilloh/themes\administrator/gigs_instant_bit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2939957bb68a996e9b1-42818459%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76f48881c1805eef6baa6bf09e5e92237e286835' => 
    array (
      0 => 'C:/wamp/www/GIT/skilloh/themes\\administrator/gigs_instant_bit.tpl',
      1 => 1471688043,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2939957bb68a996e9b1-42818459',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('subresults')->value['ifile']>"0"){?>
	<br /><b>INSTANT DELIVERY GIG FILE: </b>
    <?php $_smarty_tpl->assign('fd' , insert_file_details (array('value' => 'a', 'fid' => $_smarty_tpl->getVariable('subresults')->value['ifile']),$_smarty_tpl), true);?>
    <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['x']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['name'] = 'x';
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('fd')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['x']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['x']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['x']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['x']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['x']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['x']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['total']);
?>
    <?php $_smarty_tpl->assign('afs' , insert_gfs (array('value' => 'a', 'fid' => $_smarty_tpl->getVariable('fd')->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['FID']),$_smarty_tpl), true);?>
    <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/files/<?php echo md5($_smarty_tpl->getVariable('fd')->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['FID']);?>
<?php echo $_smarty_tpl->getVariable('fd')->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['s'];?>
/<?php echo $_smarty_tpl->getVariable('fd')->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['fname'];?>
" target="_blank"><?php echo $_smarty_tpl->getVariable('fd')->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['fname'];?>
 <b>[<?php echo $_smarty_tpl->getVariable('afs')->value;?>
]</b></a>
    <?php endfor; endif; ?>
<?php }elseif($_smarty_tpl->getVariable('subresults')->value['iurl']!=''){?>
	<br /><b>INSTANT DELIVERY GIG URL: </b>
    <a target="_blank" href="<?php echo stripslashes($_smarty_tpl->getVariable('subresults')->value['iurl']);?>
"><?php echo stripslashes($_smarty_tpl->getVariable('subresults')->value['iurl']);?>
</a>
<?php }?>