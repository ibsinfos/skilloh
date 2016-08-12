<?php /* Smarty version Smarty-3.0.7, created on 2016-08-07 06:43:46
         compiled from "/home/skilohx6/public_html/dev/themes/view_order_bit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113626367457a710e2358729-31815019%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b08e049f49df368971e13164c30b205622bc741' => 
    array (
      0 => '/home/skilohx6/public_html/dev/themes/view_order_bit.tpl',
      1 => 1468533488,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113626367457a710e2358729-31815019',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_SESSION['USERID']==$_smarty_tpl->getVariable('p')->value['USERID']){?>   
<a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/edit?id=<?php echo $_smarty_tpl->getVariable('p')->value['PID'];?>
" class="hugeGreenBtn hoverMe"><?php echo ((mb_detect_encoding($_smarty_tpl->getVariable('lang141')->value, 'UTF-8, ISO-8859-1') === 'UTF-8') ? mb_strtoupper($_smarty_tpl->getVariable('lang141')->value,SMARTY_RESOURCE_CHAR_SET) : strtoupper($_smarty_tpl->getVariable('lang141')->value));?>
</a>
<?php }elseif($_SESSION['USERID']>"0"){?>
<a onclick="document.ordermulti.submit();" href="#" class="hugeGreenBtn hoverMe"><?php echo ((mb_detect_encoding($_smarty_tpl->getVariable('lang107')->value, 'UTF-8, ISO-8859-1') === 'UTF-8') ? mb_strtoupper($_smarty_tpl->getVariable('lang107')->value,SMARTY_RESOURCE_CHAR_SET) : strtoupper($_smarty_tpl->getVariable('lang107')->value));?>
</a>
<?php }else{ ?>
<a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/login?r=<?php $_smarty_tpl->assign('rurl' , insert_get_redirect (array('value' => 'a', 'PID' => $_smarty_tpl->getVariable('p')->value['PID'], 'seo' => $_smarty_tpl->getVariable('p')->value['seo'], 'gtitle' => $_smarty_tpl->getVariable('title')->value),$_smarty_tpl), true);?><?php echo stripslashes($_smarty_tpl->getVariable('rurl')->value);?>
" class="hugeGreenBtn hoverMe"><?php echo ((mb_detect_encoding($_smarty_tpl->getVariable('lang107')->value, 'UTF-8, ISO-8859-1') === 'UTF-8') ? mb_strtoupper($_smarty_tpl->getVariable('lang107')->value,SMARTY_RESOURCE_CHAR_SET) : strtoupper($_smarty_tpl->getVariable('lang107')->value));?>
</a>
<?php }?>

<?php if ($_SESSION['USERID']>"0"){?>
    <?php if ($_smarty_tpl->getVariable('p')->value['scriptolution_add_multiple']>"0"){?>
        <?php if ($_SESSION['USERID']!=$_smarty_tpl->getVariable('p')->value['USERID']){?> 
        <div class="order-extras"> 
            <form name="ordermulti" id="ordermulti" action="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/ordering.php" method="post">
            <span class="quantity">
                <?php echo $_smarty_tpl->getVariable('lang575')->value;?>
:
                <select class="customDropdown" id="multi" name="multi">
                    <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = (int)1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('p')->value['scriptolution_add_multiple']+1) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max']);
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
                    <option value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['index'];?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['index'];?>
</option>
                    <?php endfor; endif; ?>
                </select>
            </span>
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('p')->value['PID'];?>
" />
            </form>
        </div>
        <?php }?>
    <?php }else{ ?>
    <form name="ordermulti" id="ordermulti" action="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/ordering.php" method="post">
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('p')->value['PID'];?>
" />
    </form>
    <?php }?>
<?php }?>

